@extends('layouts.app')

@section('title', 'Teachers')

@section('content')
<div class="content-wrapper">
	<!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Attendance View</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Date</th>
                  <th>Department</th>
                  <th>Batch</th>
                  <th>Teacher</th>
                  <th>Subject</th>
                  <th>upload_by</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php if (isset($attendance)) {
                  $i = '1';
                      foreach ($attendance as $value) { ?>
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $value->date_of_atdns }}</td>
                  <td>{{ $value->dept_id }}</td>
                  <td>{{ $value->batch_id }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->subject_name }}</td>
                  <td>{{ $value->upload_by }}</td>
                  <td>
                    <a href="" class="btn btn-success btn-xs"> View </a>
                  </td>
                </tr>
                <?php $i++; } } ?>
                
              </table> -->
            </div>
            <!-- /.box-body -->
          </div>





			</div>
		</div>
	</section>
</div>
@endsection