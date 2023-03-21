@extends('adminlte::page') 
@section('title', 'Dashboard') 
@section('content_header')
<h1>About Us</h1> 
@stop 
@section('content')
<div class="accordion" id="accordionExample">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Pengembangan Perangkat Lunak (PPL)
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <ol>
          <li>1.Aplikasi office</li>
          <li>2.HTML & CSS</li>
          <li>3.Database MySQL</li>
          <li>4.Javascript</li>
          <li>5.PHP Laravel</li>
          <li>6.React Native</li>
        </ol>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Digital Marketing (DM)
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
     <ol>
        <li>1.Copywriting</li>
        <li>2.Inkscape</li>
        <li>3.Content Creator</li>
        <li>4.Search Engine Optimization (SEO)</li>
        <li>5.Search Engine Marketing (SEM)</li>
        <li>6.Multimedia</li>
    </ol>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Pengelolaan Sistem Jaringan (PSJ)
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
     <ol>
        <li>1.Linux Fundamental</li>
        <li>2.Mikrotic</li>
        <li>3.Otomatisasi Administrasi Server</li>
        <li>4.Keamanan Sistem dan Jaringan</li>
        <li>5.Komputasi Awan</li>
        <li>6.Administrasi Jaringan Linux</li>
    </ol>
    </div>
  </div>
</div>
</div>

@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css"> 
@stop
@section('js')
<script> console.log('Hi!'); </script> 
@stop
