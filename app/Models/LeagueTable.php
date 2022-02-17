<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LeagueTable extends Model
{
    use HasFactory;

    protected $fillable = ['team_name', 'pts', 'p', 'w', 'v', 'gd'];

    protected $table = 'LeagueTable';

    public function win($teamid)
    {
        DB::table('LeagueTable')->where('id', $teamid)->increment('pts',3);
        DB::table('LeagueTable')->where('id', $teamid)->increment('p',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('w',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('d',0);
        DB::table('LeagueTable')->where('id', $teamid)->increment('l',0);
        DB::table('LeagueTable')->where('id', $teamid)->increment('gd',1);

    }


    public function draw($teamid)
    {
        DB::table('LeagueTable')->where('id', $teamid)->increment('pts',2);
        DB::table('LeagueTable')->where('id', $teamid)->increment('p',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('w',0);
        DB::table('LeagueTable')->where('id', $teamid)->increment('d',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('l',0);
        DB::table('LeagueTable')->where('id', $teamid)->increment('gd',1);
    }

    public function loose($teamid)
    {
        DB::table('LeagueTable')->where('id', $teamid)->increment('pts',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('p',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('w',0);
        DB::table('LeagueTable')->where('id', $teamid)->increment('d',0);
        DB::table('LeagueTable')->where('id', $teamid)->increment('l',1);
        DB::table('LeagueTable')->where('id', $teamid)->increment('gd',1);

    }

    public function percentcalcsummary()
    {

    }
}