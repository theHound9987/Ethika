<?php

namespace App\Http\Controllers\Games;

use App\Http\Controllers\Controller;
use App\Services\DB\GamesService;
use Exception;
use Illuminate\Http\Request;

class GetGamesController extends Controller{
    private GamesService $gamesServices;

    public function __construct(GamesService $gamesService){
        $this->gamesServices = $gamesService;
    }

    public function __invoke(Request $request){
        try {
            return response()->json($this->gamesServices->all());
        } catch (Exception $e) {
            return response()->json($e)->status(404);
        }
    }


}