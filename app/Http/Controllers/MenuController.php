<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categoriesWithMenuItems = Category::with('menuItems')->get();

        return view('Menu', compact('categoriesWithMenuItems'));
    }
}
