<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json([
            "users" => [
                ['id' => 1, 'name' => 'Vita'],
                ['id' => 2, 'name' => 'Dewi'],
                ['id' => 3, 'name' => 'Riska'],
                ['id' => 4, 'name' => 'Devon'],
                ['id' => 5, 'name' => 'Budi'],
                ['id' => 6, 'name' => 'Dian'],
                ['id' => 7, 'name' => 'Bella'],
                ['id' => 8, 'name' => 'Zara'],
                ['id' => 9, 'name' => 'Ridho'],
                ['id' => 10, 'name' => 'Sinta'],
            ]
        ]);
    }

}
