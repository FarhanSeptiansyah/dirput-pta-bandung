<?php

namespace App\Http\Controllers;

use App\Models\DirputModel;

class UserController extends Controller
{
    public function __construct()
    {
        $this->DirputModel = new DirputModel();
        // $this->middleware('auth');
    }

    // Show Index
    public function index()
    {
        $data = [
            'title' => 'Direktori Putusan',
            'dirput' => $this->DirputModel->allData(),
        ];
        return view('/dirput_user/v_dirput_user', $data);
    }
}
