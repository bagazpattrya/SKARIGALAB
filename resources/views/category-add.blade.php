@extends('layouts.mainLayout')

@section('title')
    Category
@endsection

@section('content')
    <h1>Tambah Kategori</h1>
    <div class="mt-5 w-50">
        
        <form action="category-add" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-controls" placeholder="Nama Kategori">
            </div>

            <div class="mt-3">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection