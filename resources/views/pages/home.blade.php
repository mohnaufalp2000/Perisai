@extends('layouts.app')

@section('title')

Perisai

@endsection


@section('content')
<header class="text-center">
    <h1 class="text-white font-weight-bold">Perisai Vacation</h1>
    <p class="text-white">Just click the button below <br> to start your journey</p>
    <a href="#wisataKu">
        <button type="button"  class="btn btn-primary btn-start mt-5">Mulai Sekarang</button>
    </a>
</header>


    <main>
    <div class="row">
        <div class="maps mx-auto mt-5">
            <button class="btn btn-secondary btn-location" id="get_location">Cek Lokasi Anda Sekarang</button>
            <div id="map">
                <iframe id="google_map" width="0" height="0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div> 
        </div>    

         <!-- Searchbox -->
         <div class="row">
            <div class="search-box mx-auto mt-4">
                <form action="/search" class="form-inline">
                    <div class="search-btn">
                        <button class="btn" type="submit">
                            <i class="fa fa-search text-light" aria-hidden="true"></i>
                        </button>    
                    </div>
                    <input type="text" name="query" class="search-box input-search" placeholder="Mau Kemana?">
                </form>
            </div>
        </div>
   
        <section class="section-popular" id="wisataKu">
            <div class="container">
                <div class="row text-light">
                    <h5 style="color:#0c0f16;">ALL DESTINATIONS</h5>
                </div>
                <div class="popular-detail row justify-content-center mt-5">
                    

                        @foreach($items as $item)
                        <div class="col-sm">
                        <a href="{{ route ('detail', $item->slug)}}">
                        <div class="card shadow mx-auto" style="width: 18rem;">
                            <img src="{{url($item->galleries->count() ? Storage::url($item->galleries->first()->image) : '')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p>{{$item->title}}</p>
                                <small>{{$item->location}}</small>
                            </div>
                        </div>
                        </a>
                    </div>
                        @endforeach

                   
                </div>    

            </div>
        </section>
       
    </main>
    @endsection