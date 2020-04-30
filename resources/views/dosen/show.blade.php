@extends('layout/app')

@section('title','Detail Dosen')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Detail Dosenr</h1>
            <div class="row no-gutters">
    
  
    <div class="col-md-8">
            <div class="card-body">
              <h4 class="card-title"><b>{{ $dosen->nik }}</b></h4>
              <p class="card-text">{{ $dosen->nama }}</p>
              <p class="card-text">{{ $dosen->alamat }}</p>
              <p class="card-text">{{ $dosen->matakuliah }}</p>
              <p class="card-text">{{ $dosen->sks }}</p>
              <p class="card-text">{{ $dosen->email }}</p>


              <a href="{{ $dosen->id }}/edit" class="btn btn-primary">Edit</a>
              
              <form action="{{ $dosen->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="/dosen" class="card-link">back<<</a>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
   