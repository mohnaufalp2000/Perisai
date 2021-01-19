@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/">>>Kembali</a>
        <div class="col-sm-4 mx-auto section-search popular-search">
                <h4>Hasil Pencarian</h4>
                @foreach($items as $item)
                <a href="{{ route ('detail', $item->slug)}}">
                <div class="card shadow mx-auto" style="width: 18rem;">
                    <img src="{{url($item->galleries->count() ? Storage::url($item->galleries->first()->image) : '')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p>{{$item->title}}</p>
                            <small>{{$item->location}}</small>
                        </div>
                </div>
                </a>
                @endforeach
        </div>
    </div>
@endsection