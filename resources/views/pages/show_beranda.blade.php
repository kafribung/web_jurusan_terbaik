@extends('layouts.app')
@section('title', 'Jurusan Populer | Indonesia')
@section('content')
<div class="container">

    <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$data->major}}</h5>
              <p class="card-text">{{$data->description}}</p>
              <p class="card-text"><small class="text-muted">Ditulis Oleh : {{$data->user->name}} Tgl: {{$data->created_at->format('d M Y' )}}</small></p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{url($data->img)}}" alt="Gambar " class="card-img">
          </div>
        </div>
    </div>

</div>
@endsection
