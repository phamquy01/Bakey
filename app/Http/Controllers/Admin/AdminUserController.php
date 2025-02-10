<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\UserRole;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\User\UserRepositoryInterface;

class AdminUserController extends Controller
{
    //
    protected $userRepository;
    function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->middleware(function($request, $next){
            session(['module_active' => 'user']);
            return $next($request);
        });
    }

    function index(Request $request, $status=""){

        $count = $this->userRepository->count();
        if($status == "del"){
            $list_act = [
                'restore'=>"Khôi phục",
                'delete'=>"Xóa vĩnh viễn"
            ];
            $search = "";
            if($request->input('keyword'))
                $search = $request->input('keyword');
            $users = $this->userRepository->getUserRemove($search);
            //dd($users->total());
            return view("admin.user.list", compact("users", "count", "list_act"));
        }else if($status == "active"){
            $list_act = [
                'remove'=>"Vô hiệu hóa",
            ];
            $search = "";
            if($request->input('keyword'))
                $search = $request->input('keyword');
            $users = $this->userRepository->getUserActive($search);
            // dd($users->total());
            return view("admin.user.list", compact("users", "count", "list_act"));
        }else{
            if($count['user_remove'] != 0){
                $list_act = [
                    'restore'=>"Khôi phục",
                    'remove'=>"Vô hiệu hóa",
                    'delete'=>"Xóa vĩnh viễn"
                ];
            }else{
                $list_act = [
                    'remove'=>"Vô hiệu hóa",
                ];
            }
            $search = "";
            if($request->input('keyword'))
                $search = $request->input('keyword');
            $users = $this->userRepository->getAllUser($search);
            //dd($users->total());
            return view("admin.user.list", compact("users", "count", "list_act"));
        }
    }

    function create(){
        $roles = Roles::get();
        return view('admin.user.create', compact('roles'));
    }

    function store(Request $request){
        $this->userRepository->create($request);
        return redirect('admin/user/list')->with('success', 'Đã thêm một người dùng mới!', 'alert', 'success');
    }

    //Xóa hoàn toàn một user khỏi hệ thống
    function delete($id){
        if($this->userRepository->delete($id)){
            return redirect('admin/user/list')->with('success', "Bạn đã xóa vĩnh viễn thành viên!");
        }else{
            return redirect('admin/user/list')->with('danger', "Bạn không thể xóa tài khoản này!");
        }
    }

    //Vô hiệu hóa một user
    function remove($id){
        if($this->userRepository->remove($id)){
            return redirect('admin/user/list')->with('success', "Bạn đã vô hiệu hóa tài khoản thành công!");
        }else{
            return redirect('admin/user/list')->with('danger', "Bạn không thể vô hiệu hóa tài khoản đó!");
        }
    }

    //Khôi phục một user bị vô hiệu hóa
    function restore($id){
        if($this->userRepository->restore($id)){
            return redirect('admin/user/list')->with('success', "Bạn đã khôi phúc tài khoản thành công!");
        }else{
            return redirect('admin/user/list')->with('danger', "Bạn không thể khôi phục tài khoản đó!");
        }
    }

    //Hành động áp dụng hàng loạt
    function action(Request $req){
        $listcheck = $req->input('list_check');

        if($listcheck){
            //Loại bỏ thao tác lên chính tài khoản của mình
            foreach($listcheck as $k => $id){
                if(Auth::id() == $id){
                    unset($listcheck[$k]);
                }
            }
            if(!empty($listcheck)){

                $act = $req->input('act');
                //Thực hiện hành động vô hiệu hoa các tài khoản có id trong list_check
                if($act == "remove"){
                    User::destroy($listcheck);
                    return redirect('admin/user/list')->with('success', "Bạn đã vô hiệu hóa thành công!",);
                }
                //Thực hiện hành động khôi phục các tài khoản có id trong list_check
                if($act == 'restore'){
                    User::withTrashed()
                    ->whereIn('id', $listcheck)
                    ->restore();
                    return redirect('admin/user/list')->with('success', "Bạn đã khôi phục thành công!");
                }
                if($act == 'delete'){
                    User::withTrashed()
                    ->whereIn('id', $listcheck)
                    ->forceDelete();
                    return redirect('admin/user/list')->with('success', "Bạn đã xóa vĩnh viễn thành viên!", 'alert', 'success');
                }
            }
        }
    }

    function edit($id){
        $roles = Roles::get();
        $user = $this->userRepository->find($id);
        $user->roles = UserRole::where('user_id', $user->id)->pluck('role_id')->toArray();
        return view('admin.user.edit', compact('user','roles'));
    }
    function update(Request $req, $id){
        $req->validate(
            [
                'name'=> 'required|string|max:255',
                'phone'=> 'required|string|digits:10',
                'avatar' => 'mimes:jpg,png,gif,webp|max:20000',
            ],
            [
                'required'=> ':attribute không được bỏ trống!',
                'digits'=> ':attribute phải có độ dài 10!',
                'mimes'=> ':attribute phải có định dạng jpg, png, gif!',
            ],
            [
                'name'=>'Tên người dùng',
                'phone'=>'Số điện thoại',
                'avatar'=>'Ảnh đại diện',
            ],
        );

        $user = $this->userRepository->find($id);
        UserRole::where('user_id', $user->id)->delete();
        UserRole::insert(array_map(function($role) use($user){
            return ['user_id'=>$user->id, 'role_id'=>$role];
        }, $req->input('role', [])));

        if(empty($req->file())){
            $avatar = $user->avatar;
        }else{
            $fileName = time().'.'.$req->avatar->extension();
            $req->avatar->move(public_path("uploads"), $fileName);
            $avatar = $fileName;
        }
        $userUpdate = [
            'name' =>$req->input('name'),
            'gender' =>$req->input('gender'),
            'phone' =>$req->input('phone'),
            'avatar' =>$avatar,
        ];
        // dd($user->email);
        if($this->userRepository->updateUser($id,$userUpdate)){
            return redirect('admin/user/list')->with('success', "Đã cập nhật thành công!");
        }else{
            return redirect('admin/user/list')->with('success', "Đã cập nhật thành công!");
        }
    }

}
