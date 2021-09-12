@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h3>{{ __('Form Update Article')  }}</h3></div>
        <div class="card-body">
          <div class="box">
                @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="{{ route('admin.post.update', $article->id)  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- text input -->
               
                    <div class="form-group my-2">
                      <label for="title">{{ __('Title') }}</label>
                      <input value="{{ $article->title }}" type="text" class="form-control" name="title" id="title" required >  
                    </div>
                    <div class="form-group my-2">
                      <label for="slug">{{ __('Slug') }}</label>
                      <input value="{{ $article->slug }}" type="text" class="form-control" name="slug" id="slug"  required>  
                    </div>
                    <div class="form-group my-2">
                        <label for="description">{{ ('Description') }}</label>
                        <textarea class="form-control" id="description" rows="3" name="description" required  required >{{ $article->description }}</textarea>
                      </div>
                      <div class="form-group my-2">
                        <label for="image">{{ ('Image') }}</label>
                        <input type="file" name="image" id="image">
                      </div>
                    <div class="box-footer">
                      <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                      <button type="button" class="btn btn-secondary float-right" onclick="window.history.back()">{{ __('Cancel') }}</button>
                    </div>
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
          </div>
        </div>
      </div>
</div>
@endsection
