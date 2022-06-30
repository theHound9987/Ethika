<?php

namespace App\Services\DB;

use App\Exceptions\DB\NoGamesException;
use App\Repositories\DB\Interfaces\GamesRepositoryInterface;
use Illuminate\Support\Collection;

class GamesService{

    private GamesRepositoryInterface $gamesRepository;

    public function __construct(GamesRepositoryInterface $gamesRepository){
        $this->gamesRepository = $gamesRepository;
    }

    public function all():Collection|NoGamesException{

        return $this->gamesRepository->all();

    }


}