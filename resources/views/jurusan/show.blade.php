@extends('layouts.home')

@section('content')
    <div class="card-body">
        <div class="card-header mb-3" style="text-align: center">
            <h3>
                {{ $major->category->name }} - {{ $major->name }}
            </h3>
        </div>
        <div class="card-text">
            <div class="row">
                <img src="{{ Storage::url('major/'. $major->image) }}" alt="" width="350px" height="300px">
                    <p class="py-3">
                        {{-- Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus asperiores officia perspiciatis, 
                        sunt dolores ipsam porro, amet ad totam veniam provident temporibus eveniet error iste aut laborum saepe id velit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora modi vero velit fugit magnam, ipsum nisi eligendi 
                        aliquam dolorem nihil nobis neque aliquid animi minus! A, dolorum veniam fugit ipsam soluta enim iusto sed saepe porro 
                        laborum iste. Fuga fugit ut dolor repudiandae? Odio nisi similique magnam eos animi ab, laborum repudiandae ipsam ut voluptates. 
                        Corrupti saepe inventore quibusdam iste vel aut temporibus id nulla aperiam deleniti, dolores quos voluptates voluptatum omnis sunt 
                        harum minima porro nam totam ea in ratione maxime amet. Architecto unde dicta quis voluptate consequatur ratione incidunt, quam ad facere omnis,
                        dolorem ipsam perferendis iste neque.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus asperiores officia perspiciatis, 
                        sunt dolores ipsam porro, amet ad totam veniam provident temporibus eveniet error iste aut laborum saepe id velit.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora modi vero velit fugit magnam, ipsum nisi eligendi 
                        aliquam dolorem nihil nobis neque aliquid animi minus! A, dolorum veniam fugit ipsam soluta enim iusto sed saepe porro 
                        laborum iste. Fuga fugit ut dolor repudiandae? Odio nisi similique magnam eos animi ab, laborum repudiandae ipsam ut voluptates. 
                        Corrupti saepe inventore quibusdam iste vel aut temporibus id nulla aperiam deleniti, dolores quos voluptates voluptatum omnis sunt 
                        harum minima porro nam totam ea in ratione maxime amet. Architecto unde dicta quis voluptate consequatur ratione incidunt, quam ad facere omnis,
                        dolorem ipsam perferendis iste neque. --}}
                        {{ $major->description }}
                    </p>
            </div>
        
        </div>
    </div>
        {{-- {{ $major->name }}
        <br>
        {{ $major->description }}
        <br>
        {{ $major->image }}
        <br>
        {{ $major->category->name }}
        <br>
        <br> --}}

    
@endsection

@section('footer')

<p>
    SMK KAL 2 Lorem, ipsum dolor sit amet consectetur 
    adipisicing elit. Vel rerum numquam tempore nemo eaque error. 
    Ea perferendis dolores, neque culpa error hic provident reiciendis 
    repellat corporis soluta, omnis, tenetur repellendus.
</p>

@endsection

