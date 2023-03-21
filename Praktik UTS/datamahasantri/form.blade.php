@extends('adminlte::page')
@section('title','Data datamahasantri')
@section('content_header')
    <h1>Form Data Mahasantri</h1>
@stop
@section('content') 
{{-- Isi Konten Form datamahasantri --}}
    @if($errors->any())
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>  @endforeach
    </ul>
    </div>
    @endif
    <form action="{{ route('datamahasantri.store') }}" method="POST">
        @csrf
        {{-- cross-site request forgery (CSRF) = pencegahan serangan yang dilakukan oleh pengguna yang tidak terautentikasi --}}
        <div class="form-group">
            <label>NIM</label><input type="text" name="nim" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Nama</label><input type="text" name="nama" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Jurusan</label><input type="text" name="jurusan" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Alamat</label><textarea name="alamat" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Kota</label><input type="text" name="kota" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Provinsi</label><input type="text" name="provinsi" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Email</label><input type="email" name="email" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a class="btn btn-secondary btn-md" href="{{ '/datamahasantri' }}" role="button">Back</a>
    </form>
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
    <script> console.log('Hi!'); </script>


