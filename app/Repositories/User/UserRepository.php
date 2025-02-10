<?php

namespace App\Repositories\User;

use App\Models\SessionUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UserRepository implements UserRepositoryInterface
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function count(){
        $count = [];
        $count['all_user'] = $this->user->withTrashed()->count();
        $count['user_active'] = $this->user->all()->count();
        $count['user_remove'] = $this->user->onlyTrashed()->count();
        return $count;
    }

    public function find($id)
    {
        $result = $this->user->withTrashed()->find($id);

        return $result;
    }
    public function getAllUser($search)
    {
        return $this->user->withTrashed()->where('name', 'LIKE', "%{$search}%")->paginate(15);
    }
    public function getUserActive($search)
    {
        return $this->user->where('name', 'LIKE', "%{$search}%")->paginate(15);
    }
    public function getUserRemove($search)
    {
        return $this->user->onlyTrashed()->where('name', 'LIKE', "%{$search}%")->paginate(15);
    }
    public function create($request){
        $request->validate(
            [
                'name'=> 'required|string|max:255',
                'email'=>'required|string|email|max:255|unique:users',
                'password'=> 'required|string|min:8|confirmed',
                'phone'=> 'string|digits:10',
                'avatar' => 'mimes:jpg,png,gif,webp|max:20000',
            ],
            [
                'required'=> ':attribute không được bỏ trống!',
                'min'=> ':attribute có độ dài ít nhất :min ký tự!',
                'max'=> ':attribute có độ dài lớn nhất :max ký tự!',
                'confirmed'=> 'Xác nhận mật khẩu không thành công!',
                'unique'=> ':attribute đã được sử dụng',
                'mimes'=> ':attribute phải có định dạng jpg, png, gif!',
            ],
            [
                'name'=>'Tên người dùng',
                'email'=>'Email',
                'password'=>'Mật khẩu',
                'avatar'=>'Ảnh đại diện',
                'phone'=>'Số điện thoại',
            ]
        );

        if(empty($request->file())){
            $avatar = 'user-blank.png';
        }else{
            $fileName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path("uploads"), $fileName);
            $avatar = $fileName;
        }
        $user = [
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'gender' =>$request->input('gender'),
            'phone' =>$request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'avatar' =>$avatar,
        ];
        return $this->user->create($user);
    }
    public function updateUser($id, $attributes = [])
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    public function remove($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }
    public function restore($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->restore();

            return true;
        }

        return false;
    }


    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->forceDelete();
            return true;
        }

        return false;
    }
    public function total(){
        return $this->user->total();
    }

    //API
    public function register($request){
        $validator = Validator::make($request->all(),
            [
                'name'=> 'required|string|max:255',
                'email'=>'required|string|email|max:255|unique:users',
                'password'=> 'required|string|min:8|confirmed',
                'phone'=> 'string|digits:10',
                'avatar' => 'mimes:jpg,png,gif,webp|max:20000',
            ],
            [
                'required'=> ':attribute không được bỏ trống!',
                'min'=> ':attribute có độ dài ít nhất :min ký tự!',
                'max'=> ':attribute có độ dài lớn nhất :max ký tự!',
                'confirmed'=> 'Xác nhận mật khẩu không thành công!',
                'unique'=> ':attribute đã được sử dụng',
                'mimes'=> ':attribute phải có định dạng jpg, png, gif!',
            ],
            [
                'name'=>'Tên người dùng',
                'email'=>'Email',
                'password'=>'Mật khẩu',
                'avatar'=>'Ảnh đại diện',
                'phone'=>'Số điện thoại',
            ]
        );
        if ($validator->fails()) {
            return [
                'code' => 422,
                'errors' => $validator->errors()
            ];
        }
        if(empty($request->file())){
            $avatar = 'user-blank.png';
        }else{
            $fileName = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path("uploads"), $fileName);
            $avatar = $fileName;
        }
        $user = [
            'name' =>$request->input('name'),
            'email' =>$request->input('email'),
            'gender' =>$request->input('gender'),
            'phone' =>$request->input('phone'),
            'password' => Hash::make($request->input('password')),
            'avatar' =>$avatar,
        ];

        return [
            'code' => 201,
            'data' => $this->user->create($user)
        ];
    }

    public function login($request){
        $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $checkTokenExit = SessionUser::where('user_id', $user->id)->first();
                if(empty($checkTokenExit)){
                    $userSession = SessionUser::create([
                        'token' => $user->createToken('token',['user' => $user])->plainTextToken,
                        'refresh_token' => $user->createToken('refresh_token',['user' => $user])->plainTextToken,
                        'token_expried'=> date('Y-m-d H:i:s', strtotime('+30 day')),
                        'refresh_token_expried'=> date('Y-m-d H:i:s', strtotime('+360 day')),
                        'user_id' => $user->id
                    ]);
                }else{
                    $userSession = $checkTokenExit;
                }
                return response()->json([
                    'code'=> 200,
                    'data' => $userSession->only(['token', 'refresh_token', 'token_expried', 'refresh_token_expried'])
                ], 200);
            }else{
                return response()->json([
                    'code'=>401,
                    'error'=> 'Email hoặc mật khẩu không chính xác!',
                ],401);
            }
    }
    public function logout($request){
        $userSession = SessionUser::where('token', $request->token);
        if($userSession){
            $userSession->delete();
            return response()->json([
                'code'=> 200,
                'message' => 'Đăng xuất thành công!'
            ], 200);
        }
        return response()->json([
            'code'=> 401,
            'message' => 'Bạn chưa đăng nhập!'
        ], 401);
    }
    public function getUserInfo($request){
        {
            $checkToken = SessionUser::where('token', $request->token)->first();
            return response()->json([
                'status'=>200,
                'info'=>User::find($checkToken->user_id)->only(['name', 'avatar'])
            ],200);
        }
    }
}
