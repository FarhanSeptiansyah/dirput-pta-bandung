<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DirputModel extends Model
{
    public function allData()
    {
        return DB::table('tb_dirput')
            ->latest('created_at')
            ->get();
    }

    public function detailData($id_dirput)
    {
        return DB::table('tb_dirput')->where('id_dirput', $id_dirput)->first();
    }

    public function addData($data)
    {
        DB::table('tb_dirput')->insert($data);
    }

    public function editData($id_dirput, $data)
    {
        DB::table('tb_dirput')->where('id_dirput', $id_dirput)->update($data);
    }

    public function deleteData($id_dirput)
    {
        DB::table('tb_dirput')->where('id_dirput', $id_dirput)->delete();
    }
}
