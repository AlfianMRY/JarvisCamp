@extends('layouts.master')
@php
    $title = 'Cast';
    $header = 'Form Edit Cast';
@endphp

@section('content')
{{-- @foreach ($data as $i) --}}
    <form action="/cast/{{ $data->id }}" method="POST">
    @method('PUT')
    @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Umur</label>
        <input type="number" name="umur" class="form-control" id="exampleFormControlInput2" value="{{ $data->umur }}">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label">Bio</label>
        <input type="text" name="bio" class="form-control" id="exampleFormControlInput3" value="{{ $data->bio }}">
        </div>
        <button class="btn btn-success" type="submit">Save</button>
        <a class="btn btn-danger" type="button" href="/cast">Kembali</a>
    </form>
{{-- @endforeach --}}
@endsection