<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected $gameModel;

    public function __construct()
    {
        $this->gameModel = new Game;
    }

    public function index(){
        return view('game', [
            'games' => $this->gameModel->all()
        ]);
    }
    // method show untuk menampilkan detail dari game dengan id sesuai dengan parameter
    // method ini akan menampilkan view gamedetail.blade.php dan mempassing variable $gamedetails ke view tsb
    // isi dari $gamedetails adalah hasil return method find yang ada di model Game
    public function show($id){
        return view('gamedetail', [
            'gamedetails' => $this->gameModel->find($id)
        ]);
    }
}
