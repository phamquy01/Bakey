@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa người dùng
        </div>
        <div class="card-body">
            <form action="{{route('admin.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{$user->name}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{$user->email}}" disabled>
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <div>
                        <input  type="radio" name="gender" value="nam" {{$user->gender == "nam" ? 'checked':''}}><label>&nbsp; Nam</label>
                        <input class="ml-3" type="radio" name="gender" value="nữ" {{$user->gender == "nữ" ? 'checked':''}}><label>&nbsp; Nữ</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Điện thoại</label>
                    <input class="form-control" type="text" name="phone" id="phone" value="{{$user->phone}}">
                    @error('phone')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="avatar">Ảnh đại diện</label>
                    <div>
                        <input type="file" name="avatar" id="avatar" class="@error('file') is-invalid @enderror">
                        <div class="avatar-img">
                            <img src="/uploads/{{$user->avatar}}" alt="Ảnh đại diện">
                        </div>
                    </div>
                    @error('avatar')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Nhóm quyền</label>
                        @foreach($roles as $role)
                        <div class="checkRole">
                            <input type="checkbox" name="role[]" id="role-{{$role->id}}" value="{{$role->id}}" {{ in_array($role->id, $user->roles) ? "checked":""}}>
                            <label for="role-{{$role->id}}">{{$role->name}}</label>
                        </div>
                        @endforeach
                </div>

                <button type="submit" name="btnEdit" value="Cập nhật" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>
</div>
@endsection
