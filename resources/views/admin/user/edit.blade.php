@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a>{{ __('Update Student') }}</a>
                </div>
                <div class="card-body">
                    <form class="" action="{{ route('admin.user.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="role_id" value="3">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('Full Name') }}" required value="{{ $student->name }}">
                            <label for="name">{{ __('Nama Lengkap') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}" required value="{{ $student->email }}">
                            <label for="email">{{ __('Email') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            @foreach ($allGender as $key => $gender)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="{{  $key }}" required 
                                    @if ( $student->gender == $key)
                                        checked
                                    @endif
                                >
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="{{  $key  }}"
                                    @if ( $student->gender == $key)
                                         checked
                                    @endif
                                > 
                                <label>{{ $gender }}</label>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="born_place" id="born_place" placeholder="{{ __('Born Place') }}" required value="{{ $student->born_place }}" >
                            <label for="born_place">{{ __('Tempat Lahir') }}</label>
                        </div>  
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="born_date" id="born_date" placeholder="{{ __('Born Date') }}" required value="{{ $student->birthdateinput }}">
                            <label for="born_date">{{ __('Tanggal Lahir') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="school_origin" id="school_origin" placeholder="{{ __('Original School') }}" required value="{{ $student->school_origin }}">
                            <label for="school_origin">{{ __('Sekolah Asal') }}</label>
                        </div>
                        <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="religion" required>
                            @foreach ($allReligion as $key => $religion)
                            <option  value="{{  $key }}" @if ( $student->religion == $key)
                                    selected
                                @endif>{{ $religion }}</option>
                            @endforeach
                          </select>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" id="address" placeholder="{{ __('Address') }}" required value="{{ $student->address }}">
                            <label for="address">{{ __('Alamat') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="{{ __('Phone Number') }}" required value="{{ $student->phone_number }}">
                            <label for="phone_number">{{ __('Nomor Telepon') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="card">
                                 <img src=" {{ $student->image == Null ? url('images/orang.jpg') : Storage::url('profile/'. $student->image) }}" width="100px" height="100px">
                            </div>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <div class="form-floating mb-3">
                            <button class="btn btn-primary" type="submit">{{ __('Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
