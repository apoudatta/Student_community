@extends('layouts.app')

@section('title', 'Profile Update')

@section('content')
<div class="content-wrapper">



    @if (session('success'))
      <div class="col-md-6">
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
      </div>
    @endif


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">CK Editor
                <small>Advanced and full of features</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf
                    <textarea id="editor1" name="post" rows="10" cols="80">
                                            
                    </textarea>

                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">
                                    {{ __('Publish') }}
                                </button>
              </form>
            </div>
          </div>
          <!-- /.box -->
          </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>



</div>
@endsection


@section('footer_script')
  <!-- CK Editor -->
  <script src="/template/bower_components/ckeditor/ckeditor.js"></script>
  <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
  })
</script>
@endsection