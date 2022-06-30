<?php

namespace App\Repositories\DB\Interfaces;

use App\Exceptions\DB\NoGamesException;
use Illuminate\Support\Collection;

interface GamesRepositoryInterface{

    public function all():Collection|NoGamesException;
}