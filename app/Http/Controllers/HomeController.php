<?php

namespace App\Http\Controllers;

use App\Models\DirputModel;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->DirputModel = new DirputModel();
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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
