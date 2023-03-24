@extends('adminlte::page')  
@section('title', 'Detail Buku')  
@section('content_header')
    <h1>Detail Buku</h1>  
@stop  
@section('content')
{{-- Ini Konten Detail Data Buku --}}  
@foreach($ar_buku as $b)
    <div class="media">
        @php
            if(!empty($b->cover)){
            @endphp
                <img src="{{ asset('images') }}/{{ $b->cover }}" width="10%" class="mr-3"/>
            @php    
            }else{
            @endphp
                <img src="{{ asset('images') }}/nocover.gif" width="10%" class="mr-3"/>
            @php
            }
            @endphp
        <div class="media-body">
            <h3><u>{{ $b->judul }}</u></h3>
            <p>
                ISBN : {{ $b->isbn }}<br/>
                Tahun Cetak : {{ $b->tahun_cetak }}<br/>
                Stok : {{ $b->stok }}<br/>
                Pengarang : {{ $b->nama }}<br/>
                Penerbit : {{ $b->pen }}<br/>
                Kategori : {{ $b->kat }}
            </p>
            <hr/><a href="{{ url('/buku') }}" class="btn btn-info">Go Back</a>
        </div>    
    </div>
@endforeach
@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">  
@stop
@section('js')
    <script> console.log('Hi!'); </script>  
@stop