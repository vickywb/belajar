@extends('layouts.home')

@section('content')
    {{-- @foreach ($articles->take('1') as $article) --}}
    <div class="card-body">
        <div class="card-header mb-3" style="text-align: center">
            {{-- <h3>{{ $article->title }}</h3> --}}
            <h3>INFO PENDAFTARAN</h3>
        </div>
            <ol>
                <li>
                    <p>Isi Form Pendaftaran Dibawah</p>
                </li>
                <li>
                    <p>Membawa FC Ijazah SMP, KK Misal</p>
                </li>
                <li>
                    <p>Membawa uang 250ribu untuk biaya pendaftaran</p>
                </li>
                <li>
                    <p>Screenshoot/print pendaftaran</p>
                </li>
            </ol>
            <a href="{{ url('/info-pendaftaran/create') }}">Link Pendaftaran</a>
    </div>
    {{-- @endforeach --}}

@endsection

@section('footer')

<p>
    SMK KAL 2 Lorem, ipsum dolor sit amet consectetur 
    adipisicing elit. Vel rerum numquam tempore nemo eaque error. 
    Ea perferendis dolores, neque culpa error hic provident reiciendis 
    repellat corporis soluta, omnis, tenetur repellendus.
</p>

@endsection
@section('content')
  
@endsection

@section('footer')

<p>
    SMK KAL 2 Lorem, ipsum dolor sit amet consectetur 
    adipisicing elit. Vel rerum numquam tempore nemo eaque error. 
    Ea perferendis dolores, neque culpa error hic provident reiciendis 
    repellat corporis soluta, omnis, tenetur repellendus.
</p>

@endsection

