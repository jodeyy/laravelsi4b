@extends('layout.main')

@section('title','mahasiswa')

@section('content')

<div class="row">
    {{-- formulir tambah fakultas --}}
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    Formulir Tambah Mahasiswa
                  </p>
                  <form method="POST" action="{{ route('mahasiswa.store')}}"class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Npm</label>
                      <input type="text" class="form-control" name="npm" 
                      value="{{old('npm')}}" 
                      placeholder= "npm">
                      @error('npm')
                      <span class="text-danger"> {{$message}} </span>   
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="singkatan">Nama</label>
                      <input type="text" class="form-control" name="nama" value="{{old('singkatan')}}" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="nama">Tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" 
                        value="{{old('palembang')}}" 
                        placeholder= "palembang ---">
                        @error('tempat_lahir')
                        <span class="text-danger"> {{$message}} </span>   
                        @enderror

                        <div class="form-group">
                            <label for="nama">Tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" 
                            value="{{old('tanggal lahir')}}" 
                            placeholder= "Date">
                            @error('Date')
                            <span class="text-danger"> {{$message}} </span>   
                            @enderror
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <input type="text" class="form-control" name="alamat" 
                                value="{{old('alamat')}}" 
                                placeholder= "Jalan">
                                @error('alamat')
                                <span class="text-danger"> {{$message}} </span>   
                                @enderror
                    
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{url('fakultas')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection