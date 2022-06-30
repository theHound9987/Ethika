<?php

namespace App\Repositories\DB\MariaDB;

use App\Exceptions\DB\NoGamesException;
use App\Repositories\DB\Interfaces\GamesRepositoryInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class GamesRepository implements GamesRepositoryInterface
{

    public function all(): Collection|NoGamesException
    {
        $results = DB::table('games')->get();

        if($results->isEmpty()){
            throw new NoGamesException("Game table Empty");
        }

        return $results;
    }
}