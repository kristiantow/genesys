@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Inventory</h1>
        <table class="table table-striped table-hover table-responsive" id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th class="nosort">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataInventory as $data)
                <tr>
                    <td>{{$data->inventory_id}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->harga}}</td>
                    <td>{{$data->stok}}</td>
                    <td><button>Button</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endauth
    </div>
@endsection