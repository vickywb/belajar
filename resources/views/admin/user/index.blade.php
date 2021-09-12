@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
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
            @if ($students->total())
            <table class="table">
                <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                    <tbody>
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td><img src="{{ $student->image == NULL ? url('images/orang.jpg') : Storage::url('profile/'.  $student->image) }}" alt="" width="50px" height="35px"></td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->born_place }}</td>
                            <td>{{ $student->born_date->format('j F, Y') }}</td>
                            <td>{{ $student->religion }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>
                                <a href="{{ route('admin.user.edit', $student->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.user.destroy', $student->id) }}" method="POST" >
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
                {{ $students->firstItem() }}
                to
                {{ $students->lastItem() }}
                of
                {{ $students->total() }}
                enteries
        </div>
        <div class="float-right">
              {{ $students->appends('search')->links() }}
        </div>
        @else
            <h5 class="text-center py-5">{{ __('There is no Data Student') }}</h5>
        @endif
        </div>  
    </div>
</div>
@endsection
