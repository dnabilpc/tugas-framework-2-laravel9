<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game
{
    use HasFactory;

    private $listGame = [
        [
            'id' => '1',
            'name' => 'Valorant',
            'description' => 'Valorant adalah game fps atau first person shooter taktis multipemain gratis yang
        dikembangkan dan diterbitkan oleh Riot',
            'genre' => 'FPS, Action, Tactical Shooter, Multiplayer',
            'price' => '0',
            'img' => 'http://bakso-radja-image-host.vercel.app/img/UAP-Game-Store/Valorant.jpg'
        ],
        [
            'id' => '2',
            'name' => 'Hearts of Iron IV',
            'description' => 'Hearts of Iron IV adalah game Grand Strategy perang dunia ke 2  yang dikembangkan oleh Paradox Interactive,
                                Pemain dapat mengendalikan entitas politik mana pun di dunia pada tahun 1936 atau 1939 dan menuntun mereka ke kemenangan atau kekalahan melawan negara lainnya',
            'genre' => 'Singleplayer, Multiplayer, Grand Strategy, Historical, War',
            'price' => '300.000',
            'img' => 'http://bakso-radja-image-host.vercel.app/img/UAP-Game-Store/hoi4.jpg'
        ],
        [
            'id' => '3',
            'name' => 'Victoria 3',
            'description' => 'Victoria 3 adalah game Grand Strategy yang berfokus pada aspek ekonomi negara di era viktoria yang dikembangkan oleh Paradox Interactive',
            'genre' => 'Singleplayer, Multiplayer, Grand Strategy, Historical, War, Economy',
            'price' => '400.000',
            'img' => 'http://bakso-radja-image-host.vercel.app/img/UAP-Game-Store/victoria.jpg'
        ],
        [
            'id' => '4',
            'name' => 'Cyberpunk 2077',
            'description' => 'Cyberpunk 2077 adalah sebuah permainan video action RPG yang dikembangkan dan dipublikasikan oleh CD Projekt Red.
                                Berlatar di sebuah dunia terbuka bernama Night City, pemain berperan sebagai tentara bayaran bernama V dalam perspektif kamera orang pertama',
            'genre' => 'Singleplayer, Open World, Action, Shooting, RPG',
            'price' => '800.000',
            'img' => 'http://bakso-radja-image-host.vercel.app/img/UAP-Game-Store/cyberpunk.png'
        ],
        [
            'id' => '5',
            'name' => 'Stellaris',
            'description' => 'Stellaris adalah 4X Grand Strategy game yang memungkinkanmu untuk membangun kerajaan dan menguasai satu galaksi
                                 game ini merupakan game yang dikembangkan oleh Paradox Interactive',
            'genre' => 'Singleplayer, Multiplayer, Grand Strategy, Galaxy, War, Economy',
            'price' => '500.000',
            'img' => 'http://bakso-radja-image-host.vercel.app/img/UAP-Game-Store/stellaris.jpg'
        ]
    ];

    public function all()
    {
        return collect($this->listGame);
    }

    public function find($id)
    {
        $games = $this->all();
        return $games->firstWhere('id', $id);
    }
}
