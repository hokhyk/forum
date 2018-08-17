<?php

namespace App\Http\Controllers;

use App\Discussion;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function index()
    {
        //llamamos a todos los post y los ordenamos con una paginacion
        $discussions = Discussion::orderBy('created_at','desc')
            ->paginate(3);
        //y toodo esto le pasamos en un array
        return view('forum',['discussions' => $discussions]);
    }
}
