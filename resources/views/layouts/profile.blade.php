<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://use.fontawesome.com/4acdae30cc.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SMK KAL 2</title>
  </head>
  <body>
    @include('partrials.navbar')
    @include('partrials.header')
    <div class="container mt-3">
      <div class="row">
          <div class="col-lg-8">
              <div class="card-header">
                  <h3>Profile Sekolah</h3>
              </div>
              <div class="card-body">
                <div class="card-text">
                  @yield('content')
                </div>
            </div>
          </div>
          <div class="col-lg-4">
                <form class="d-flex mb-3">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <div class="card-header">
                  Statistik Pengunjung
              </div>
              <div class="card-body">
                  <p> 
                      Contoh
                  </p>
              </div>
              <div class="card-header">
                    Jurusan
              </div>
              <div class="card-body">
                <div class="btn-group">
                    <button class="btn btn-outline-primary btn-md" style="width: 250px; height: 50px" type="button">
                    Pelayaran
                    </button>
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#"  style="width: 250px; height: 50px">   
                                <button class="btn btn-outline-primary btn-block"> Nautika Kapal Niaga</button>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#"  style="width: 250px; height: 50px">   
                                <button class="btn btn-outline-primary btn-block"> Teknik Kapal Niaga</button>
                            </a>
                        </li>
                    </div>
                </div>
                <br>
                <br>
                <div class="btn-group">
                    <button class="btn btn-outline-primary btn-md" style="width: 250px; height: 50px" type="button">
                    Otomotif
                    </button>
                    <button type="button" class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#"  style="width: 300px; height: 50px">   
                                <button class="btn btn-outline-primary btn-block"> Teknik Kendaraan Ringan Otomotif</button>
                            </a>
                        </li>
                    </div>
                </div>
                <br>
                <br>
                <div class="btn-group">
                    <button class="btn btn-outline-primary btn-md" style="width: 250px; height: 50px" type="button">
                    Perkapalan
                    </button>
                    <button type="button" class="btn btn-lg btn-outline-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#" >   
                                <button class="btn btn-outline-primary btn-block"> Teknik Kontruksi Kapal Baja</button>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" style="width: 300px; height: 50px" >   
                                <button class="btn btn-outline-primary btn-block"> Teknik Pemesinan Kapal</button>
                            </a>
                        </li>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>

    {{-- FOOTER --}}
  @include('partrials.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>