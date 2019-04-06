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
    <form role="form" method="post" action="{{ route('profile.update',$users->user_id) }}" enctype="multipart/form-data">
    	@csrf

      <input type="hidden" name="_method" value="PUT">

    	<div class="form-group">
        <label>Department</label>
        <select class="form-control" name="department">
          <option value="CSE" {{ $users->dept_id == 'CSE' ? 'selected' : '' }}> CSE</option>
          <option value="EEE" {{ $users->dept_id == 'EEE' ? 'selected' : '' }}> EEE</option>
          <option value="Civil" {{ $users->dept_id == 'Civil' ? 'selected' : '' }}> Civil</option>
        </select>
      </div>

      <div class="form-group">
        <label>Batch</label>
        <select class="form-control" name="batch">
          <option value="38(D)" {{ $users->batch_id == '38(D)' ? 'selected' : '' }}> 38(D)</option>
          <option value="38(C)" {{ $users->batch_id == '38(C)' ? 'selected' : '' }}> 38(C)</option>
          <option value="38(B)" {{ $users->batch_id == '38(B)' ? 'selected' : '' }}> 38(B)</option>
        </select>
      </div>

      <!-- text input -->
      <div class="form-group">
        <label>Roll</label>
        <input id="roll" type="number" class="form-control{{ $errors->has('roll') ? ' is-invalid' : '' }}" name="roll" value="{{ $users->roll ?? old('roll') }}" required autofocus>

        @if ($errors->has('roll'))
            <span class="help-block">{{ $errors->first('roll') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Semester</label>
        <select class="form-control" name="semester">
          <option value="1st" {{ $users->semester == '1st' ? 'selected' : '' }}>1st</option>
          <option value="2nd" {{ $users->semester == '2nd' ? 'selected' : '' }}>2nd</option>
          <option value="3rd" {{ $users->semester == '3rd' ? 'selected' : '' }}>3rd</option>
        </select>
      </div>

      <div class="form-group">
        <label>Registration Number</label>
        <input id="reg_num" type="number" class="form-control{{ $errors->has('reg_num') ? ' is-invalid' : '' }}" name="reg_num" value="{{ $users->reg_num ?? old('reg_num') }}" required autofocus>

        @if ($errors->has('reg_num'))
            <span class="help-block">{{ $errors->first('reg_num') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Blood Group</label>
        <select class="form-control" name="blood_group">
          <option value="A(+)" {{ $users->blood_group == 'A(+)' ? 'selected' : '' }}>A(+)</option>
          <option value="A(-)" {{ $users->blood_group == 'A(-)' ? 'selected' : '' }}>A(-)</option>
          <option value="B(+)" {{ $users->blood_group == 'B(+)' ? 'selected' : '' }}>B(+)</option>
          <option value="B(-)" {{ $users->blood_group == 'B(-)' ? 'selected' : '' }}>B(-)</option>
          <option value="O(+)" {{ $users->blood_group == 'O(+)' ? 'selected' : '' }}>O(+)</option>
          <option value="O(-)" {{ $users->blood_group == 'O(-)' ? 'selected' : '' }}>O(-)</option>
          <option value="AB(+)" {{ $users->blood_group == 'AB(+)' ? 'selected' : '' }}>AB(+)</option>
          <option value="AB(-)" {{ $users->blood_group == 'AB(-)' ? 'selected' : '' }}>AB(-)</option>
        </select>
      </div>

      <div class="form-group">
        <label>Profile Picture</label>
        <input id="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" name="profile_pic" value="{{ old('profile_pic') }}" autofocus>
        <input type="hidden" name="profile_pic_old" value="{{ $users->profile_pic }}">
				<span class="help-block">Upload Up To 2MB.</span>
        @if ($errors->has('profile_pic'))
            <span class="help-block">{{ $errors->first('profile_pic') }}</span>
        @endif
      </div>
      
      <?php if($users->profile_pic){ ?>
      <div class="img" style="margin-bottom: 10px">
        <img src="{{ asset('upload_images/'.$users->profile_pic) }}" />
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