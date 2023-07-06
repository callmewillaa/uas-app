<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Normalisasi</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tbody>
                    <tr>
                        {{-- @if ($item->kriteria->atribut = "benefit" != "benefit" ) --}}

                            {{-- <td>{{$item->nama }}</td>
                            <td>{{$C1min['subkriterias'] }}</td>
                            <td>{{$C2min['subkriterias'] }}</td>
                            <td>{{$C3min['subkriterias'] }}</td>
                            <td>{{$C4min['subkriterias'] }}</td>
                            <td>{{$C5min['subkriterias'] }}</td> --}}
                        {{-- @else --}}
                            <td>{{$item->nama }}</td>
                            <td>{{$item->C1 / $C1max['subkriterias']}}</td>
                            <td>{{$item->C2 / $C2max['subkriterias']}}</td>
                            <td>{{$item->C3 / $C3max['subkriterias']}}</td>
                            <td>{{$item->C4 / $C4max['subkriterias']}}</td>
                            <td>{{$item->C5 / $C5max['subkriterias']}}</td>
                        {{-- @endif --}}
                    </tr>
                </tbody>
                @endforeach
            </tbody>
        </table>
    </div>
</div>