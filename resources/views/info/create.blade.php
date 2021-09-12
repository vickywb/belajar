@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a>{{ __('Student Registrasion') }}</a>
                </div>
                <div class="card-body">
                    <form class="" action="{{ url('/info-pendaftaran/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="role_id" value="3">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="{{ __('Full Name') }}" required autocomplete="off">
                            <label for="name">{{ __('Nama Lengkap') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('Email') }}" required autocomplete="off">
                            <label for="email">{{ __('Email') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="L" required >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  {{ __('Laki-Laki') }}
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="P">
                                <label class="form-check-label" for="flexRadioDefault2">
                                  {{ __('Perempuan') }}
                                </label>
                              </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="born_place" id="born_place" placeholder="{{ __('Born Place') }}" required autocomplete="off">
                            <label for="born_place">{{ __('Tempat Lahir') }}</label>
                        </div>  
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="born_date" id="born_date" placeholder="{{ __('Born Date') }}" required autocomplete="off">
                            <label for="born_date">{{ __('Tanggal Lahir') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="school_origin" id="school_origin" placeholder="{{ __('Original School') }}" required autocomplete="off">
                            <label for="school_origin">{{ __('Sekolah Asal') }}</label>
                        </div>
                        <select class="form-select form-select-sm mb-3"  style="height: 50px" aria-label=".form-select-sm example" name="religion" required>
                            <option selected value="">{{ __('Pilih Agama') }}</option>
                            <option value="i" >{{ __('Islam') }}</option>
                            <option value="kr">{{ __('Kristen') }}</option>
                            <option value="kt">{{ __('Katolik') }}</option>
                            <option value="bd">{{ __('Buddha') }}</option>
                            <option value="hn">{{ __('Hindu') }}</option>
                            <option value="kc">{{ __('Konghuchu') }}</option>
                        </select>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" id="address" placeholder="{{ __('Address') }}" required autocomplete="off">
                            <label for="address">{{ __('Alamat') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="phone_number" id="phone_number" placeholder="{{ __('Phone Number') }}" value="Phone Number" required autocomplete="off">
                            <label for="phone_number">{{ __('Nomor Telepon') }}</label>
                        </div>
                        <div class="form-floating mb-3">
                            <div>
                                <label for="image">Upload Foto</label>
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
