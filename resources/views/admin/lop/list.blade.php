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
            <div class="box-header">
              <a href="{{ route('create_lop') }}" class="create_lop">Create Lớp</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên lớp học</th>
                    <th>Tên khóa học</th>
	                  <th>Giáo viên chủ nhiệm</th>
	                  <th>Khóa học</th>
                    <th>Chi tiết</th>
	                  <th>Sửa</th>
	                  <th>Xóa</th>
	                </tr>
                </thead>
                <tbody>
	                <tr>
<<<<<<< HEAD
	                  <td>1</td>
	                  <td>Internet Explorer 4.0</td>
                    <td>2016-2019</td>
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
                    <th>Tên khóa học</th>
	                  <th>Giáo viên chủ nhiệm</th>
	                  <th>Ngày lập</th>
	                  <th>Sửa info</th>
	                  <th>Xóa</th>
	                </tr>
                </tfoot>
=======
	                  <td></td>
	                  <td></td>
	                  <td></td>
	                  <td><a href="">Show</a></td>
	                  <td><a href="">Sửa</a></td>
	                  <td>
                      <form action="" method="post">
                          <input type="submit" name="delete" value="Xóa">
                      </form>
                    </td>
	                </tr>
                </tbody>
                
>>>>>>> 74ac7f60e14f96c61c434806f3fdd1934324f7ed
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