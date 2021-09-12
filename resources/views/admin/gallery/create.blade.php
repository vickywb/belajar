@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h3>{{ __('Form Create New Picture')  }}</h3></div>
        <div class="card-body">
          <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="{{ route('admin.gallery.store')  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- text input -->
               
                    <div class="form-group my-2">
                      <label for="name">{{ __('Name') }}</label>
                      <input value="{{ old('name') }}" type="text" class="form-control" name="name" id="name" placeholder="{{ __('Judul Gambar') }}" required autocomplete="off">  
                    </div>
                    <div class="form-group my-2">
                        <label for="description">{{ ('Description') }}</label>
                        <textarea class="form-control" id="description" rows="3" name="description" required placeholder="{{ __('Deskripsi Artikel') }}" required autocomplete="off">{{ old('description') }}</textarea>
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

