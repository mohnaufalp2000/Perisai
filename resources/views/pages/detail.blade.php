@extends('layouts.app')


@section('title')

Detail Page

@endsection

@section('content')

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container">
      <a class="navbar-brand" style="color: white" href="#"><img src="{{ url('frontend/img/perisai.png') }}" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">PERISAI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link"style="color: white" href="{{ route ('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color: white" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"style="color: white" href="#galeri">Galeri</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
    </nav>
    
    <!--Jumbotron-->

    

    <div class="jumbotron jumbotron-fluid">

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{Storage::url($item->galleries->first()->image)}}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="display-4 font-weight-bold text-light" style="margin-top:-450px; text-shadow: 6px 6px #000000;">{{ $item->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
    
    </div>

  
    <!-- Info -->

    <div class="container">

      <!-- about -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div id="About">
            <div class="container">
              <div class="row">
                <div class="col text-center">
                  <h2 id="about">Tentang Wisata</h2>
                </div>
              </div>
              <div class="row">
                <div class="col justify" style="text-align: justify;">
                  <p>{{ $item->about }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col justify text-center" style="text-align: justify;">
                  <h2 class="mb-3">Harga Tiket</h2>
                  <p>Rp {{ $item->price }}</p>
                </div>
                <div class="col justify text-center" style="text-align: justify;">
                  <h2 class="mb-3">Jam Buka</h2>
                  <p>{{ $item->schedule }}</p>
                </div>
              </div>
            
        </div>
      </div>
      


    </div>

    <!-- galeri -->

    <div class="container">
      <div class="teks-galeri text-center">
        <h2 id="galeri">GALERI</h2>
      </div>
      @if($item->galleries->count())
        <div class="row justify-content-center text-center">
        
          <div class="col-md-8">             
              <div class="row mb-4">
              @foreach($item->galleries as $gallery)
                  <a href="{{Storage::url($gallery->image)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                      <img src="{{Storage::url($gallery->image)}}" class="img-fluid mb-3">
                  </a>
                  @endforeach     
              </div>
          </div>
          
      </div>
      @endif


     


    </div>


    <!-- Maps -->

    <div id="maps">
      <div class="container">
          <div class="col text-center">
            <h2>MAPS</h2>
          </div>
        <div style="width: 100%"><iframe width="600" height="600" frameborder="0" scrolling="no" marginheight="0" 
        marginwidth="0" src="{{ $item->maps }}"></iframe></div>
      </div>
    </div>

    <!-- Komentar -->
    <div id="komen">
    <div class="container">
    <h2 class="text-center">KOMENTAR PENGUNJUNG</h2>
      <div class="row">
      
        <div class="col-md-12 mb-5">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-4">
                    <div class="single_box">
                      <div class="img-area"><img src="img/naufal.jpg" alt="">
                        <div class="img-teks mb-3">
                          <h2>John Doe</h2>
                          <p>Tempatnya bagus sekali! Lain waktu saya akan datang kesini lagi.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="single_box">
                      <div class="img-area"><img src="img/naufal.jpg" alt="">
                        <div class="img-teks mb-3">
                          <h2>Jane Doe</h2>
                          <p>Amazing, wonderful.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="single_box">
                      <div class="img-area"><img src="img/naufal.jpg" alt="">
                        <div class="img-teks mb-3">
                          <h2>Michael Doe</h2>
                          <p>Mantap Azikk Zeruuu.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-4">
                    <div class="single_box">
                      <div class="img-area"><img src="img/naufal.jpg"  alt="">
                        <div class="img-teks mb-3">
                          <h2>Jessica Doe</h2>
                          <p>Subhanallah, tempatnya indah sekali.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="single_box">
                      <div class="img-area"><img src="img/naufal.jpg" alt="">
                        <div class="img-teks mb-3">
                          <h2>James Doe</h2>
                          <p>Tempatnya bagus, akan tetapi lebih baik jika diberi petunjuk jalan agar wisatawan tidak tersesat.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="single_box">
                      <div class="img-area"><img src="img/naufal.jpg" alt="">
                        <div class="img-teks">
                          <h2>Anna Doe</h2>
                          <p>Tempatnya ga asik, bosenin. Mending rebahan di kasur.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>
    </div> 

    <!-- footer -->
    <div class="container">
      
    </div>

@endsection
