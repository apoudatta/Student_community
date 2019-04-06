@extends('layouts.app')

@section('title', 'Profile Update')

@section('content')
<div class="content-wrapper">
	<!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-10">


@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

      <?php if (isset($posts)) {
            foreach ($posts as $value) { ?>
      <!-- Post -->
      <div class="post">
        <div class="user-block">
          <img class="img-circle img-bordered-sm" src="{{ asset('upload_images/'.$value->profile_pic) }}" alt="user image">
              <span class="username">
                <a href="#">{{ $value->name }}</a>
                <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
              </span>
          <span class="description">Shared publicly - <b>{{ $value->created_at }}</b></span>
        </div>
        <!-- /.user-block -->
        <div style="margin-left: 50px;">
            <?php echo $value->post ?>
        </div>
        <ul class="list-inline">
          <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
          <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
          </li>
          <li class="pull-right">
            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
              (5)</a></li>
        </ul>

        <input class="form-control input-sm" type="text" placeholder="Type a comment">
      </div>
      <?php } } ?>









			</div>
		</div>
	</section>
</div>
@endsection