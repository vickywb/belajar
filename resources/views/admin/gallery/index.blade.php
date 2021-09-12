@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header pull-right">
            <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
         </div>
        <div class="card-header pull-left">
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                  <input type="text" name="search" class="form-control" placeholder="Search..." autocomplete="off">
                  <span class="input-group-btn">
                        <button type="submit"  id="search-btn" class="btn btn-flat" ><i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
              </form>
        </div>
        <div class="card-body">
            @if ($pictures->total())
            <table class="table">
                <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                     @foreach ($pictures as $picture) 
                    <tbody>
                        <tr>
                            <td>{{ $picture->id }}</td>
                            <td><img src="{{ $picture->image == NULL ? url('images/orang.jpg') : Storage::url('gallery/'.  $picture->image) }}" alt="" width="50px" height="35px"></td>
                            <td>{{ $picture->name }}</td>
                            <td>{{ $picture->description }}</td>
                            <td>
                                <a href="{{ route('admin.gallery.edit', $picture->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.gallery.destroy', $picture->id) }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="return confirm(' {{ __('Are you sure?')  }}')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                </tbody>
                    @endforeach 
            </table>
            <div class="float-left">
                showing
                {{ $pictures->firstItem() }}
                to
                {{ $pictures->lastItem() }}
                of
                {{ $pictures->total() }}
                enteries
        </div>
        <div class="float-right">
              {{ $pictures->appends('search')->links() }}
        </div>
        @else
            <h5 class="text-center py-5">{{ __('Tidak ada Gambar yang diUpload') }}</h5>
        @endif
        </div>  
    </div>
</div>
@endsection
