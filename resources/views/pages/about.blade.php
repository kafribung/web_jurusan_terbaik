@extends('layouts.app')
@section('title', 'About Me')
@section('content')
<div class="container">

    <div class="row">
        
        <div class="col-sm-8">
            <div class="card border-primary">
                <div class="card-body">
                  <p class="card-text">
                    Nama saya A. Muh. Taufiqurahman orang biasa memanggil saya Oppi, Saya merupakan mahasiswa jurusan sistem informasi UIN Alauddin Makassar, saya lahir di Sinjai 20 tahun yang lalu, saya mempunyai hobi nonton , saya tertarik dengan dunia desain dan multimedia sekarang.
                  </p>
                    <p class="font-weight-bold">
                        Gw Masih Jomblo :') 
                    </p>
                </div>
              </div>
        </div>

        <div class="col-sm-4 border-blue">
            <img src="{{ asset('images/opik.jpeg') }}" width="200" height="400" class="card-img-top" alt="Taufik">
        </div>
    </div>
</div>
@endsection
