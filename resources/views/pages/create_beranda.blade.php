@extends('layouts.app')
@section('title', 'Create Data')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <form action="/beranda" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="major">Jurusan</label>
                  <input type="text" class="form-control  @error('major') is-invalid @enderror" id="major" name="major" autocomplete="off" autofocus placeholder="Input major" value="{{old('major')}}" >

                  @error('major')
                      <p class="alert alert-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="img">Image</label>
                    <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" accept="image/*">
               
                    @error('img')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Input Description" > {{old('description')}}</textarea>
                    
                    @error('description')
                        <p class="alert alert-danger">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Store</button>
            </form>
        </div>
    </div>
</div>

@endsection
