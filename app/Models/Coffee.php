<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coffee extends Model
{
    use HasFactory;
    protected $table = 'coffees';
    protected $guarded = [];

    public static function getAllCoffees()
    {
        $query = DB::table('coffees');

        return $query;
    }

    public static function getDetailProduk($token)
    {
        $query = DB::table('coffees')->where('token_coffee', $token);

        return $query;
    }
}
