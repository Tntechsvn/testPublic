@extends('admin.layout.master')
@section('title')
    Admin - LTE
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Bảng User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên người dùng</th>
	                  <th>Email</th>
	                  <th>Cấp quyền</th>
	                  <th>Ngày tạo</th>
	                  <th>Sửa user</th>
	                  <th>Xóa user</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  <td>Trident</td>
	                  <td>Internet Explorer 4.0</td>
	                  <td>Win 95+</td>
	                  <td> 4</td>
	                  <td>X</td>
	                  <td>Vinh</td>
	                  <td>Đẹp trai</td>
	                </tr>
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên người dùng</th>
	                  <th>Email</th>
	                  <th>Cấp quyền</th>
	                  <th>Ngày tạo</th>
	                  <th>Sửa user</th>
	                  <th>Xóa user</th>
	                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
@endsection