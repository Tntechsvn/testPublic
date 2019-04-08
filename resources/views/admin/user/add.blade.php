@extends('admin.layout.master')
@section('title')
    Thêm người dùng
@stop
@section('content')

<!-- Page Content -->
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Người dùng
                    <small>thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{ $err }}<br />
                        @endforeach
                    </div>
                @endif

                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{ session('thongbao') }}
                    </div>
                @endif
                <form action="admin/user/add" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Tên người dùng</label>
                        <input class="form-control" name="Ten" type="text" placeholder="Điền tên vào..." value="" />
                    </div>

                    <div class="form-group">
                        <label>Email người dùng</label>
                        <input class="form-control" name="email" type="email" placeholder="Nhập email..." value="" />
                    </div>

                    <div class="form-group">
                        <label>Cấp quyền</label>
                        <select>
                            @foreach($role as $r)
                                <option>{{$r->display_name}}</option>
                            @endforeach
                        </select>          
                    </div>

                    <button type="submit" class="btn btn-default">Thực hiện</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <a href="{{route('user.list')}}">Trở về trang trước</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection