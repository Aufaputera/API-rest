@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header"></div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $students->name }}</h5>
        <p class="card-text">Divisi: {{ $students->address }}</p>
        <p class="card-text">Usia : {{ $students->mobile }}</p>
  </div>
    </hr>
  </div>
  <style>
    body{
      background : rgb(206, 100, 169);
    }
  </style>
</div>