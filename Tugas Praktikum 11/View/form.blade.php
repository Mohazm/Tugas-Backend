@extends('adminlte::page')  
@section('title', 'Form Buku')  
@section('content_header')
<h1>Input Data Buku</h1><br/>
<a class="btn btn-secondary btn-md" href="{{ '/buku' }}" role="button">Back</a><br/><br/>
<table class="table table-striped">
@stop  
@section('content')
{{-- Ini Konten Form Input Buku --}} 
{{-- Panggil master data pengarang, penerbit dan kategori untuk
ditampilkan di element form --}}
@php
$rs1 = App\Models\Pengarang::all();
$rs2 = App\Models\Penerbit::all();
$rs3 = App\Models\Kategori::all();
@endphp
<form method="POST" action="{{ route('buku.store') }}">
@csrf {{-- security untuk menghindari dari serangan pada saat input form --}}

<div class="form-group">
<label>ISBN</label>
<input type="text" name="isbn" class="form-control" required/>
<label>Judul</label>
<input type="text" name="judul" class="form-control" required/>
<label>Tahun Cetak</label>
<input type="text" name="tahun_cetak" class="form-control" required/>
<label>Stok</label>
<input type="text" name="stok" class="form-control" required/>
</div>
{{-- Panggil master data pengarang untuk ditampilkan di element form select --}}

<div class="form-group">
<label>Pengarang</label>
<select class="form-control" required name="idpengarang">
<option value="">-- Pilih Pengarang --</option>
@foreach($rs1 as $p)
<option value="{{ $p->id }}">{{ $p->nama }}</option>
@endforeach
</select>
</div>
{{-- Panggil master data penerbit untuk ditampilkan di element form select --}}

<div class="form-group">
<label>Penerbit</label>
<select class="form-control" required name="idpenerbit">
<option value="">-- Pilih Penerbit --</option>
@foreach($rs2 as $pen)
<option value="{{ $pen->id }}">{{ $pen->nama }}</option>  
@endforeach
</select>
</div>
{{-- Panggil master data kategori untuk ditampilkan
di element radio button--}}

<div class="form-group">
<label>Kategori</label><br/>  @foreach($rs3 as $k)
<input type="radio" name="idkategori"
value="{{ $k->id }}"/>{{ $k->nama }} &nbsp; &nbsp;
@endforeach
</div>
<label>Cover</label>
<input type="text" name="cover" class="form-control" required/>
<button type="submit" class="btn btn-primary"
name="proses">Simpan</button>

<button type="reset" class="btn btn-warning"
name="unproses">Batal</button>

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">  
@stop
@section('js')
<script> console.log('Hi!'); </script>  
@stop

