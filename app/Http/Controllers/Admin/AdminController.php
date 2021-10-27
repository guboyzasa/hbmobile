<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function show()
    {
    }

    public function store(Request $req)
    {
    }

    public function destroy(Request $req)
    {
    }

    public function changeStatus(Request $req)
    {
    }
}
