@extends('layouts.mainLayout')

@section('title')
    Barang
@endsection

@section('content')
    <h1>List Barang</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="barang-add" class="btn btn-primary">Tambah Barang</a>
    </div>

    <div class="mt-5">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
    
    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <a href="#">edit</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection