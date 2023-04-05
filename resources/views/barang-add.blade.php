@extends('layouts.mainLayout')

@section('title')
    Tambah Barang
@endsection

@section('content')
    <h1>Tambah Barang</h1>
    <div>
        <form action="barang-add" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="mt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nama Barang">
            </div>
            <div class="mt-3"> 
                <label for="quantity" class="form-label">Jumlah</label>
                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Masukan Jumlah">
            </div>
            <div class="mt-3">
                <label for="name" class="form-label">Status</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Tersedia/Dipinjam">
            </div>

            <div class="mt-3">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection