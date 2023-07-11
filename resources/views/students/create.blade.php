@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">MURID BARU</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Divisi</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Usia</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Simpan" class="btn btn-success"></br>
    </form>
     
  </div>
</div>
  <style>
    body{
      background : rgb(206, 100, 169);
    }
  </style>
@stop