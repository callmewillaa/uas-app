@extends('layouts.master')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
            <a href="{{route('subkriteria.create')}}" class="btn btn-primary float-right"><i class="fas fa-fw fa-plus-circle"></i>Tambah Data</a>
        <h5 class="m-0 font-weight-bold text-primary">Sub Kriteria</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        @foreach ($kriteria as $item)
                        <th>{{$item->nama}}</th>
                        @endforeach
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach ($subkriteria as $key=>$item)

                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->C1}}</td>
                        <td>{{$item->C2}}</td>
                        <td>{{$item->C3}}</td>
                        <td>{{$item->C4}}</td>
                        <td>{{$item->C5}}</td>
                        <td>
                            <div class="ml-4">
                                <form action="{{ route('subkriteria.destroy', $item->id )}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('subkriteria.edit', $item->id ) }}" class="btn bg-gradient-success btn-sm text-white"><i class="fas fa-fw fa-edit"></i></a>
                                    <button type="submit" class="btn bg-gradient-danger btn-sm text-white" onclick="return confirm('Apakah kamu yakin data ini akan dihapus?')"><i class="fas fa-fw fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection