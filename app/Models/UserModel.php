<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    public function allData()
    {
        return DB::table('tb_dirput')
            ->latest()
            ->get();
    }
}
