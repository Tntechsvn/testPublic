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
            <div class="box-header">
              <a href="{{ route('create.monhoc') }}" class="create_lop">Thêm môn học</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
	                <tr>
<<<<<<< HEAD
	                  <th>ID</th>
	                  <th>Tên bộ môn</th>
	                  <th>Sửa info</th>
	                  <th>Xóa bộ môn</th>
=======
                    <th>STT</th>
	                  <th>Tên môn học</th>
	                  <th>Sửa môn học</th>
	                  <th>Xóa môn học</th>
>>>>>>> 74ac7f60e14f96c61c434806f3fdd1934324f7ed
	                </tr>
                </thead>
                <tbody>
                  <?php $a = 1; ?>
                  @foreach($bomon as $bm)
	                <tr>
<<<<<<< HEAD
	                  <td>1</td>
	                  <td>Internet Explorer 4.0</td>
	                  <td>X</td>
	                  <td>Vinh</td>
=======
                    <td>{{$a++}}</td>
	                  <td>{{ $bm->tenmonhoc}}</td>
	                  <td><a href="{{ route('showedit.monhoc',$bm->id)}}">Edit</a></td>
	                  <td>
                      <form action="{{route('deletemh',$bm->id)}}" method="get">
                        <input type="submit" name="destroy" value="Delete">
                      </form>
                    </td>
>>>>>>> 74ac7f60e14f96c61c434806f3fdd1934324f7ed
	                </tr>
                  @endforeach
                </tbody>
<<<<<<< HEAD
                <tfoot>
	                <tr>
	                  <th>ID</th>
	                  <th>Tên bộ môn</th>
	                  <th>Sửa info</th>
	                  <th>Xóa bộ môn</th>
	                </tr>
                </tfoot>
=======
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