@extends('layouts.master')

@section('content')
@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">
  {{ $error }}
</div>
@endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session('success') }}
</div>

@endif
<div class="col-lg-12 order-lg-1">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Sub Kriteria</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('subkriteria.update' , $subkriteria->id ) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ $subkriteria->nama }}">
        </div>
        <div class="form-group">
            <label>Usia</label>
            <input type="number" class="form-control" name="C1" value="{{ $subkriteria->C1 }}">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="number" class="form-control" name="C2" value="{{ $subkriteria->C2 }}">
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <input type="number" class="form-control" name="C3" value="{{ $subkriteria->C3 }}">
        </div>
        <div class="form-group">
            <label>Pendapatan</label>
            <input type="number" class="form-control" name="C4" value="{{ $subkriteria->C4 }}">
        </div>
        <div class="form-group">
            <label>Tinggi & Berat Badan (Dalam IMT)</label>
            <input type="number" class="form-control" name="C5" value="{{ $subkriteria->C5 }}">
        </div>

        <div class="form-group">
            <button class="btn btn-primary btn-block">Update Sub Kriteria</button>
            <a href="{{route('subkriteria.index')}}" class="btn btn-primary btn-block"> Kembali </a>
        </div>
        </form>
    </div>
</div>
</div>
@endsection