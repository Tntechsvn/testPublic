@extends('admin.layout.master')
@section('title')
    Danh sách lớp học
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
        <li class="active">Bảng lớp</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách lớp học</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên lớp học</th>
	                  <th>Giáo viên chủ nhiệm</th>
	                  <th>Ngày lập</th>
	                  <th>Sửa info</th>
	                  <th>Xóa</th>
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
	                </tr>
                </tbody>
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên lớp học</th>
	                  <th>Giáo viên chủ nhiệm</th>
	                  <th>Ngày lập</th>
	                  <th>Sửa info</th>
	                  <th>Xóa</th>
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