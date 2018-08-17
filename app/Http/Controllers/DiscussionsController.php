<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class DiscussionsController extends Controller
{
    public function create()
    {
        return view('discuss');
    }
    public function store()
    {
        //validate
        $r = request();
        $this->validate($r, [
            'channel_id' => 'required',
            'title' => 'required',
            'contenido' => 'required',
        ]);

        // save data
        $discussion = Discussion::create([
            'title' => $r->title,
            'contenido' => $r->contenido,
            'channel_id' => $r->channel_id,
            'user_id' => Auth::id(),
            'slug' => str_slug($r->title),
        ]);
        Session::flash('success', 'Discussion succesfully created');

        return redirect()
            ->route('discussion', ['slug' => $discussion->slug ]);
    }
    public function show($slug)
    {
        return view('discussions.show')
            ->with('d',Discussion::where('slug', $slug)->first());
    }
}
