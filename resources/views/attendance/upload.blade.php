@extends('layouts.app')

@section('title', 'Profile Update')

@section('header_script')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="/template/plugins/iCheck/all.css">
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Main content -->
  <section class="content">
    <div class="row">


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif




<!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">
              <form method="post" action="{{ route('attendance.store') }}">
                @csrf

              <div class="form-group">
                <label for="exampleInputEmail1">Department</label>
                <input type="text" name="department" class="form-control" placeholder="Enter Department">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Batch</label>
                <input type="text" name="batch" class="form-control" placeholder="Enter Batch">
              </div>

              <div class="form-group">
                <label>Teacher</label>
                <select class="form-control select2" name="teacher" style="width: 100%;">
                  <?php if (isset($teacher)) {
                    foreach ($teacher as $value) { ?>
                      <option value="{{ $value->user_id }}">{{ $value->name }}</option>
                  <?php } } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Subject Name</label>
                <input type="text" name="subject" class="form-control" placeholder="Enter Subject Name">
              </div>

              <!-- Date -->
              <div class="form-group">
                <label>Attendance Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="date_of_atdns" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

              
              <h3>Student List:</h3>
              <div class="form-group" style="border: 1px solid;padding: 10px 10px;margin-left: 60px;">

                <?php if (isset($students)) {
                    foreach ($students as $value) { ?>
                      <div >
                        <label>
                          <input type="checkbox" name="attendances[]" value="{{ $value->user_id }}" class="minimal"> {{ $value->name }}
                        </label>
                      </div>
                  <?php } } ?>
              </div>
              <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          
        </div>
        <!-- /.col (right) -->




		</div>
	</section>
</div>
@endsection

@section('footer_script')
  <!-- bootstrap datepicker -->
  <script src="/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- iCheck 1.0.1 -->
  <script src="/template/plugins/iCheck/icheck.min.js"></script>

  <script>
    $(function () {
      //Date picker
      $('#datepicker').datepicker({
        autoclose: true
      })

      //iCheck for checkbox and radio inputs
      $('input[type="checkbox"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue'
      })
    })
  </script>
@endsection