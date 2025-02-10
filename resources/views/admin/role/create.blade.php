@extends('layouts.admin')
@section('content')
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm nhóm phân quyền
        </div>
        <div class="card-body" >
            <form action="{{route('admin.role.store')}}" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <label for="name">Tên nhóm quyền</label>
                    <input class="form-control" type="text" name="name" id="name">
                <div class="form-group">
                    <label for="name">Danh sách các quyền</label><br>
                    <input id="inputSearch" type="text" placeholder="Tìm kiếm">
                    <div class="checkbox mt-2" style="height: 550px; overflow-y: auto">
                        @foreach($routes as $route)
                            <div class="routeItem">
                            <input type="checkbox" name="route[]" value="{{$route}}">
                            <label>{{$route}}</label>
                            </div>
                        @endforeach
                    </div>

                </div>
                <button type="submit" name="btnCreate" value="Thêm mới" class="btn btn-primary">Thêm mới</button>
                    <input type="checkbox" class="check-all"> Chọn tất cả
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        function convertName(route){
            var componentRoute = route.split('.');
            var name = "";
            for(let i = componentRoute.length-1; i > 0; i--){
                if(componentRoute[i]){
                    switch(componentRoute[i].trim()){
                    case "product":
                        name += "sản phẩm ";
                        break;
                    case "cat":
                        name += "danh mục ";
                        break;
                    case "user":
                        name += "người dùng ";
                        break;
                    case "role":
                        name += "quyền ";
                        break;
                    case "slider":
                        name += "slider ";
                        break;
                    case "dashboard":
                        name += "xem dashboard ";
                        break;
                    case "brand":
                        name += "thương hiệu ";
                        break;
                    case "feedback":
                        name += "phản hồi ";
                        break;
                    case "index":
                        name += "xem danh sách ";
                        break;
                    case "create":
                        name += "thêm mới ";
                        break;
                    case "store":
                        name += "lưu trữ ";
                        break;
                    case "update":
                        name += "cập nhật ";
                        break;
                    case "edit":
                        name += "chỉnh sửa ";
                        break;
                    case "remove":
                        name += "ẩn ";
                        break;
                    case "restore":
                        name += "hiển thị lại ";
                        break;
                    case "delete":
                        name += "xóa vĩnh viễn ";
                        break;
                    case "status":
                        name += "xem danh sách theo trạng thái ";
                        break;
                    case "action":
                        name += "Thực hiện hành động với nhiều ";
                        break;
                }
                }
            }
            return name;
        }
        $(".routeItem label").each(function( index ) {
            $(this).text(convertName($(this).text()));
        });
        $(document).ready(function(){
            $("#inputSearch").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".routeItem").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        $(".check-all").click(function(){
            $('input:checkbox').not(this).prop('checked', this.checked);
        });


    </script>
@endsection
@section('css')
<style>
    .routeItem label{
        text-transform: capitalize;
    }
</style>
@endsection

