@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Create a new channel</div>

        <div class="panel-body">
            <form action="{{ route('channels.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">
                        Save
                    </button>

                </div>



            </form>
        </div>
    </div>

@endsection