@extends('layouts.master')

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Bobot</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>{{ $widget1['kriterias'] }}</th>
                    <th>{{ $widget2['kriterias'] }}</th>
                    <th>{{ $widget3['kriterias'] }}</th>
                    <th>{{ $widget4['kriterias'] }}</th>
                    <th>{{ $widget5['kriterias'] }}</th>
                </tr>
            </thead>

        </table>

    </div>
</div>


@include('admin.spk.normalisasi')

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Hasil SPK</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Hasil</th> <!--Hasil => (Bobot x Hasil Normalisasi)-->
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                <tbody>
                    <tr>
                        <td>{{$item->nama}}</td>
                            {{-- Hasil --}}
                            <td>
                                {{(($item->C1 / $C1max['subkriterias'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['subkriterias'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['subkriterias'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['subkriterias'])*$widget4['kriterias'])+
                                (($item->C5 / $C5max['subkriterias'])*$widget5['kriterias'])}}
                            </td>
                            {{-- WPM --}}
                            {{-- <td>
                                {{(($item->C1 / $C1max['subkriterias'])**$widget1['kriterias'])*
                                (($item->C2 / $C2max['subkriterias'])**$widget2['kriterias'])*
                                (($item->C3 / $C3max['subkriterias'])**$widget3['kriterias'])*
                                (($item->C4 / $C4max['subkriterias'])**$widget4['kriterias'])*
                                (($item->C5 / $C5max['subkriterias'])**$widget5['kriterias'])}}
                            </td> --}}
                            {{-- Qi --}}
                            {{-- <td>
                                {{
                                (((($item->C1 / $C1max['subkriterias'])*$widget1['kriterias'])+
                                (($item->C2 / $C2max['subkriterias'])*$widget2['kriterias'])+
                                (($item->C3 / $C3max['subkriterias'])*$widget3['kriterias'])+
                                (($item->C4 / $C4max['subkriterias'])*$widget4['kriterias'])+
                                (($item->C5 / $C5max['subkriterias'])*$widget5['kriterias']))*0.5)
                                    +
                                ((($item->C1 / $C1max['subkriterias'])**$widget1['kriterias'])*
                                (($item->C2 / $C2max['subkriterias'])**$widget2['kriterias'])*
                                (($item->C3 / $C3max['subkriterias'])**$widget3['kriterias'])*
                                (($item->C4 / $C4max['subkriterias'])**$widget4['kriterias'])*
                                (($item->C5 / $C5max['subkriterias'])**$widget5['kriterias'])*0.5)
                                }}
                            </td> --}}
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
        {{-- <a class="btn btn-primary float-right" href="{{route('normalisasi.create')}}">Save Data</a> --}}
    </div>
</div>
@endsection