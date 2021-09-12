@extends('layouts.home')

@section('content')
    @foreach ($articles->take('1') as $article)
    <div class="card-body">
        <div class="card-header mb-3" style="text-align: center">
            <h3>{{ $article->title }}</h3>
        </div>
        <div class="row">
            <div class="col-6">
            <img src="{{ Storage::url('article/'. $article->image) }}" alt="" width="350px" height="300px">
            </div>
            <div class="col-6">
                <p>
                    {{ Str::limit($article->description, '550') }}
                </p>
                <a href="/articles/{{ $article->slug }}" class="btn btn-outline-success btn-lg mt-2">Baca Selengkapnya..</a>
            </div>
          </div>
    </div>
    @endforeach
    
@endsection

@section('counter')
    <div class="container" style="text-align: center">
        @foreach ($articles->take('1') as $article)
        {{ $article->views }}
        @endforeach
    </div>
@endsection

@section('footer')

<p>
    SMK KAL 2 Lorem, ipsum dolor sit amet consectetur 
    adipisicing elit. Vel rerum numquam tempore nemo eaque error. 
    Ea perferendis dolores, neque culpa error hic provident reiciendis 
    repellat corporis soluta, omnis, tenetur repellendus.
</p>

@endsection