<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    public function index()
    {
        return view('channels.index')->with('channels', Channel::all());
    }

    public function create()
    {
        return view('channels.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);
        Channel::create([
            'title' => $request->title
        ]);
        Session::flash('success', 'Channel Created');
        return redirect()->route('channels.index');
    }

    public function edit($id)
    {
        return view('channels.edit')->with('channel', Channel::find($id));
    }


    public function update(Request $request, $id)
    {
        $channel = Channel::find($id);
        $channel->title = $request->title;
        $channel->save();
        Session::flash('success', 'Channel edited Successfully');
        return redirect()->route('channels.index');
    }

    public function destroy($id)
    {
        Channel::destroy($id);
        Session::flash('success', 'Channel Deleted Succesfully');
        return redirect()->route('channels.index');
    }
}
