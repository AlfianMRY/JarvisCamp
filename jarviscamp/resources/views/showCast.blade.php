@extends('layouts.master')
@php
    $title = 'Cast';
    $header = 'Detail Cast';
@endphp

@section('content')
<div class="card">
    {{-- @foreach ($data as $i) --}}
    <div class="card-header">
        {{ $data->nama }}
    </div>
    <div class="card-body">
      <h5 class="card-title">Umur : {{ $data->umur }}</h5>
      <p class="card-text">Bio : {{ $data->bio }}</p>
      <a href="/cast" class="btn btn-primary">Kembali</a>
    </div>
    {{-- @endforeach --}}
</div>
@endsection