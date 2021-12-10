@extends('layouts.master')
@php
    $title = 'Cast';
    $header = 'Form Tambah Cast';
@endphp

@section('content')
<form action="/cast" method="POST">
    @csrf
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Umur</label>
        <input type="number" name="umur" class="form-control" id="exampleFormControlInput2" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
        <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-success" type="submit">Save</button>
      <a class="btn btn-danger" type="button" href="/cast">Kembali</a>
</form>
@endsection