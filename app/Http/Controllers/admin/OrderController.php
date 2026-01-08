<?php


namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function index(){
        return view('admin.order.index');
    }
    public function create(){
        return view('admin.order.create');
    }
}
