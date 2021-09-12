@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"><h3>{{ __('Form Create New Major')  }}</h3></div>
        <div class="card-body">
          <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                  <form role="form" action="{{ route('admin.major.update', $major->id)  }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- text input -->

                    <div class="form-group my-2">
                      <label for="category_id">Kategori Jurusan</label>
                      <select name="category_id" class="form-control" id="category_id">
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $major->category_id ? 'selected' : ' ' }} > {{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
               
                    <div class="form-group my-2">
                      <label for="name">{{ __('Name') }}</label>
                      <input value="{{ old('name') }}" type="text" class="form-control" name="name" id="name" placeholder="{{ __('Nama Jurusan') }}" required autocomplete="off">  
                    </div>
                    <div class="form-group my-2">
                        <label for="description">{{ ('Description') }}</label>
                        <textarea class="form-control" id="description" rows="3" name="description" required placeholder="{{ __('Deskripsi Jurusan') }}" required autocomplete="off">{{ old('description') }}</textarea>
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

