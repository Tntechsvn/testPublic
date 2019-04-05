@extends('admin.layout.master')
@section('title')
    Danh sách môn học
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
        <li class="active">Bảng môn học</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách môn học</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên bộ môn</th>
	                  <th>Mô tả</th>
	                  <th>Ngày tạo</th>
	                  <th>Sửa info</th>
	                  <th>Xóa bộ môn</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
	                  <td>1</td>
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
	                  <th>Tên bộ môn</th>
	                  <th>Mô tả</th>
	                  <th>Ngày tạo</th>
	                  <th>Sửa info</th>
	                  <th>Xóa bộ môn</th>
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