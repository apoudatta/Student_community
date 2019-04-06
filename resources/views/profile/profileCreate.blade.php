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


<!-- general form elements disabled -->
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Profile Update</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form role="form" method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
    	@csrf

    	<div class="form-group">
        <label>Department</label>
        <select class="form-control" name="department">
          <option value="CSE" {{ old('department') == 'CSE' ? 'selected' : '' }}>CSE</option>
          <option value="EEE" {{ old('department') == 'EEE' ? 'selected' : '' }}>EEE</option>
          <option value="Civil" {{ old('department') == 'Civil' ? 'selected' : '' }}>Civil</option>
        </select>
      </div>

      <div class="form-group">
        <label>Batch</label>
        <select class="form-control" name="batch">
          <option value="38(D)" {{ old('batch') == '38(D)' ? 'selected' : '' }}>38(D)</option>
          <option value="38(C)" {{ old('batch') == '38(C)' ? 'selected' : '' }}>38(C)</option>
          <option value="38(B)" {{ old('batch') == '38(B)' ? 'selected' : '' }}>38(B)</option>
        </select>
      </div>

      <!-- text input -->
      <div class="form-group">
        <label>Roll</label>
        <input id="roll" type="number" class="form-control{{ $errors->has('roll') ? ' is-invalid' : '' }}" name="roll" value="{{ old('roll') }}" required autofocus>

        @if ($errors->has('roll'))
            <span class="help-block">{{ $errors->first('roll') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Semester</label>
        <select class="form-control" name="semester">
          <option value="1st" {{ old('semester') == '1st' ? 'selected' : '' }}>1st</option>
          <option value="2nd" {{ old('semester') == '2nd' ? 'selected' : '' }}>2nd</option>
          <option value="3rd" {{ old('semester') == '3rd' ? 'selected' : '' }}>3rd</option>
        </select>
      </div>

      <div class="form-group">
        <label>Registration Number</label>
        <input id="reg_num" type="number" class="form-control{{ $errors->has('reg_num') ? ' is-invalid' : '' }}" name="reg_num" value="{{ old('reg_num') }}" required autofocus>

        @if ($errors->has('reg_num'))
            <span class="help-block">{{ $errors->first('reg_num') }}</span>
        @endif
      </div>

      <div class="form-group">
        <label>Blood Group</label>
        <select class="form-control" name="blood_group">
          <option value="A(+)" {{ old('blood_group') == 'A(+)' ? 'selected' : '' }}>A(+)</option>
          <option value="A(-)" {{ old('blood_group') == 'A(-)' ? 'selected' : '' }}>A(-)</option>
          <option value="B(+)" {{ old('blood_group') == 'B(+)' ? 'selected' : '' }}>B(+)</option>
          <option value="B(-)" {{ old('blood_group') == 'B(-)' ? 'selected' : '' }}>B(-)</option>
          <option value="O(+)" {{ old('blood_group') == 'O(+)' ? 'selected' : '' }}>O(+)</option>
          <option value="O(-)" {{ old('blood_group') == 'O(-)' ? 'selected' : '' }}>O(-)</option>
          <option value="AB(+)" {{ old('blood_group') == 'AB(+)' ? 'selected' : '' }}>AB(+)</option>
          <option value="AB(-)" {{ old('blood_group') == 'AB(-)' ? 'selected' : '' }}>AB(-)</option>
        </select>
      </div>

      <div class="form-group">
        <label>Profile Picture</label>
        <input id="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" name="profile_pic" value="{{ old('profile_pic') }}" required autofocus>
				<span class="help-block">Upload Up To 2MB.</span>
        @if ($errors->has('profile_pic'))
            <span class="help-block">{{ $errors->first('profile_pic') }}</span>
        @endif
      </div>

      <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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