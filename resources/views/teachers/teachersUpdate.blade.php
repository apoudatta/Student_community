@extends('layouts.app')

@section('title', 'Profile Update')

@section('content')
<div class="content-wrapper">
	<!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8">


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<!-- general form elements disabled -->
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Profile Update</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" method="post" action="{{ route('teachers.store') }}" enctype="multipart/form-data">
    	@csrf

    	<div class="form-group">
        <label>Department</label>
        <select class="form-control" name="department">
          <option value="CSE" {{ (isset($users->dept_id) && ($users->dept_id == 'CSE')) ? 'selected' : '' }}> CSE</option>
          <option value="EEE" {{ (isset($users->dept_id) && ($users->dept_id == 'EEE')) ? 'selected' : '' }} > EEE</option>
          <option value="Civil" {{ (isset($users->dept_id) && ($users->dept_id == 'Civil')) ? 'selected' : '' }}> Civil</option>
        </select>
      </div>

      <!-- text input -->
      <div class="form-group">
        <label>Designation</label>
        <input id="designation" type="text" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" value="{{ (isset($users->designation)) ? $users->designation : '' }}" required autofocus>

        @if ($errors->has('designation'))
            <span class="help-block">{{ $errors->first('designation') }}</span>
        @endif
      </div>


      <div class="form-group">
        <label>Blood Group</label>
        <select class="form-control" name="blood_group">
          <option value="A(+)" {{ (isset($users->blood_group) && ($users->blood_group == 'A(+)')) ? 'selected' : '' }}>A(+)</option>
          <option value="A(-)" {{ (isset($users->blood_group) && ($users->blood_group == 'A(-)')) ? 'selected' : '' }}>A(-)</option>
          <option value="B(+)" {{ (isset($users->blood_group) && ($users->blood_group == 'B(+)')) ? 'selected' : '' }}>B(+)</option>
          <option value="B(-)" {{ (isset($users->blood_group) && ($users->blood_group == 'B(-)')) ? 'selected' : '' }}>B(-)</option>
          <option value="O(+)" {{ (isset($users->blood_group) && ($users->blood_group == 'O(+)')) ? 'selected' : '' }}>O(+)</option>
          <option value="O(-)" {{ (isset($users->blood_group) && ($users->blood_group == 'O(-)')) ? 'selected' : '' }}>O(-)</option>
          <option value="AB(+)" {{ (isset($users->blood_group) && ($users->blood_group == 'AB(+)')) ? 'selected' : '' }}>AB(+)</option>
          <option value="AB(-)" {{ (isset($users->blood_group) && ($users->blood_group == 'AB(-)')) ? 'selected' : '' }}>AB(-)</option>
          
        </select>
      </div>

      <div class="form-group">
        <label>Profile Picture</label>
        <input id="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" name="profile_pic" value="{{ old('profile_pic') }}" autofocus>
        <input type="hidden" name="profile_pic_old" value="{{ (isset($users->profile_pic)) ? $users->profile_pic : 'demo.jpg' }}">
				<span class="help-block">Upload Up To 2MB.</span>
        @if ($errors->has('profile_pic'))
            <span class="help-block">{{ $errors->first('profile_pic') }}</span>
        @endif
      </div>

      <?php if(isset($users->profile_pic)){ ?>
      <div class="img" style="margin-bottom: 10px">
        <img src="{{ asset('upload_images/'.$users->profile_pic) }}" height="200" width="200" class="img-thumbnail" />
      </div>
      <?php } ?>
      
      
      

      <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>

    </form>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->




			</div>
		</div>
	</section>
</div>
@endsection