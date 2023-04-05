<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $barangCount = Barang::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('dashboard', ['barang_count'=>$barangCount, 'category_count'=>$categoryCount, 'user_count'=>$userCount]);
    }
}
