@extends('layouts.mainLayout')

@section('title')
    Dashboard
@endsection

@section('content')
<h1>Welcome, {{Auth::user()->username}}</h1>

<div class="row mt-5">
    <div class="col-lg-4">
        <div class="card-data">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-tools"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Barang
                    </div>
                    <div class="card-num">
                        {{$barang_count}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-journal"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Categories
                    </div>
                    <div class="card-num">
                        {{$category_count}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data">
            <div class="row">
                <div class="col-6">
                    <i class="bi bi-people"></i>
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">
                        Users
                    </div>
                    <div class="card-num">
                        {{$user_count}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5">
    <h2>Rent Log</h2>
    <table class="table">
        <thead>
            <tr>
                <th>
                    No
                </th>
                <th>User</th>
                <th>Book Title</th>
                <th>Rent date</th>
                <th>Return Date</th>
                <th>Actual Return Date</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7" style="text-align: center">
                    No Data
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection