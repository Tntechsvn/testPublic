@extends('layouts.hung.index')
@section('title')
    Quản lý học sinh
@stop
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('layouts.hung.menu')
    <section class="content-header">
      <h1>Quản lý học sinh </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      		<table width="100%">
      			<caption>danh sách học sinh lớp </caption>
      			<thead>
      				<tr>
      					<th>header</th>
      				</tr>
      			</thead>
      			<tbody>
      				<tr>
      					<td>data</td>
      				</tr>
      			</tbody>
      		</table>
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