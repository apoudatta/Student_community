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
              <h3 class="box-title">Teachers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Designation</th>
                  <th>Blood Group</th>
                  <th>Created</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                <?php if (isset($friends)) {
                  $i = '1';
                      foreach ($friends as $value) { ?>
                <tr>
                  <td>{{ $i }}</td>
                  <td>{{ $value->name }}</td>
                  <td>{{ $value->dept_id }}</td>
                  <td>{{ $value->designation }}</td>
                  <td>{{ $value->blood_group }}</td>
                  <td>{{ $value->created_at }}</td>
                  <td><img src="{{ asset('upload_images/'.$value->profile_pic) }}" height="70" width="100"></td>
                  <td>
                    <a href="" class="btn btn-success btn-xs"> View </a>
                  </td>
                </tr>
                <?php $i++; } } ?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>





			</div>
		</div>
	</section>
</div>
@endsection