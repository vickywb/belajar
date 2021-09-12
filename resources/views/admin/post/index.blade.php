@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header pull-right">
           <a href="{{ route('admin.post.create') }}" class="btn btn-primary"><i class="fa fa-plus">Tambah</i></a>
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
            @if ($articles->total())
            <table class="table">
                <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    @foreach ($articles as $article)
                    <tbody>
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td><img src="{{ Storage::url('article/'. $article->image) }}" alt="" width="95" height="75"></td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->slug }}</td>
                            <td>{{ Str::limit($article->description, '25') }}</td>
                            <td>
                                <a href="{{ route('admin.post.edit', $article->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.post.destroy', $article->id) }}" method="POST" >
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
                {{ $articles->firstItem() }}
                to
                {{ $articles->lastItem() }}
                of
                {{ $articles->total() }}
                enteries
        </div>
        <div class="float-right">
              {{ $articles->appends('search')->links() }}
        </div>
        @else
            <h5 class="text-center py-5">{{ __('There is no Articles') }}</h5>
        @endif
        </div>  
    </div>
</div>
@endsection
