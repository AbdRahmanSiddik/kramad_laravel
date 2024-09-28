<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';
    protected $guarded = [];

    public static function getAllTeams()
    {
        $query = DB::table('teams');
        return $query;
    }

    public static function getDetailTeam($token)
    {
        $query = DB::table('teams')->where('token_team', $token);
        return $query;
    }
}
