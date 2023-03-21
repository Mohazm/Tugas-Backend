@extends('adminlte::page') 
@section('title', 'Data datamahasantri') 
@section('content_header')
    <h1>Data Data Mahasantri</h1>
@stop
@section('content') {{-- Isi Konten Data datamahasantri --}} 
@php 
$ar_judul = ['No','NIM','Nama','Jurusan','Alamat','Kota','Provinsi','Email'];
$no = 1; 
@endphp
<a class="btn btn-primary btn-md"
href="{{ route('datamahasantri.create') }}" role="button">Tambah datamahasantri</a><br/><br/>
<table class="table table-striped">
<thead>
<tr>
@foreach($ar_judul as $jdl)
<th>{{ $jdl }}</th>
@endforeach
</tr>
</thead>
<tbody>
@foreach($ar_datamahasantri as $peg)
<tr>
<td>{{ $no++ }}</td>
<td>{{ $peg->nim }}</td>
<td>{{ $peg->nama }}</td>
<td>{{ $peg->jurusan }}</td>
<td>{{ $peg->alamat }}</td>
<td>{{ $peg->kota }}</td>
<td>{{ $peg->provinsi }}</td>
<td>{{ $peg->email }}</td>
</tr>
@endforeach
</tbody>
</table>
@stop
