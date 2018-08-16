@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Create a new discussion</div>

        <div class="panel-body">

            <form action="{{ route('discussions.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Title:</label>
                    <input name="title" type="text" class="form-control">

                </div>

                <div class="form-group">
                    <label for="">Pick a channel</label>

                    <select name="channel_id" id="channel_id" class="form-control">
                        @foreach($channels as $channel)
                            <option value="{{ $channel->id }}">{{$channel->title}}</option>
                        @endforeach

                    </select>

                    <div class="form-group">

                        <label for="">Ask a Question</label>
                        <textarea name="contenido" id="contenido" class="form-control" rows="10"></textarea>

                    </div>

                    <div class="form-group">

                        <button class="btn btn-success btn-xs pull-right" type="submit">Create</button>

                    </div>

                </div>


            </form>

        </div>
    </div>

@endsection