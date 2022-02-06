@extends('layouts.risda-base')
@section('content')
    <div class="row">
        <div class="col">
            <a class="risda-dg">KELULUSAN PESANAN</a> <a class="risda-dg">
            <h1 class="mb-0 risda-dg"><strong>KELULUSAN PESANAN</strong></h1>
        </div>
    </div>

    <hr class="risda-g">

    
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table datatable table-striped" style="width:100%">
                        <thead class="bg-200">
                            <tr>
                                <th >BIL.</th>
                                <th >NO PESANAN</th>
                                <th >NAMA PELANGGAN</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white" id="t_normal">
                            @foreach ($pesanans as $pesanan)
                                <tr onclick="clickRow({{$pesanan}})">
                                    <td>{{ $loop->index + 1 }}.</td>
                                    <td>{{ $pesanan->NoPesanan }}</td>
                                    <td>{{ $pesanan->sebut_harga->pelanggan->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

    function clickRow(data) {
      window.location.href = "/pesanan/" + data.id;
    }
    </script>


@endsection
