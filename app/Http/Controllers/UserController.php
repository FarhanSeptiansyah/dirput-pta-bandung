<?php

namespace App\Http\Controllers;

use App\Models\DirputModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // Filter
    public function filter(Request $request)
    {
        $data = [
            'title' => 'Direktori Putusan',
        ];
        $start_date = $request->start_date;
        $end_date = $request->end_date;


        $dirput = DB::table('tb_dirput')->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->get();

        return view('/dirput_user/v_dirput_user', $data, compact('dirput'));
    }
}
