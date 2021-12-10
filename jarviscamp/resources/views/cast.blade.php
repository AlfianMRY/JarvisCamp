@extends('layouts.master')
@php
    $title = 'Cast';
    $header = 'Cast';
@endphp
@section('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable Cast</h3>
          <a class="btn btn-outline-success" href="/cast/create">Tambah Data</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Nama</th>
              <th>Umur</th>
              <th>Bio</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $i) 
                <tr>
                  <td>{{ $i->nama }}</td>
                  <td>{{ $i->umur }}</td>
                  <td>{{ $i->bio }}</td>
                  <td>
                      <form action="/cast/{{ $i->id }}" method="post">
                        @csrf
                        @method('DELETE')
                          <a href="/cast/{{ $i->id }}" class="btn btn-primary">Detail</a>
                          <a href="/cast/{{ $i->id }}/edit" class="btn btn-warning">Edit</a>
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
    </div>
@endsection