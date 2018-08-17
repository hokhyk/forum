@extends('layouts.app')

@section('content')

    @foreach($discussions as $d)

        <div class="panel panel-default">
            <div class="panel-heading">

                <img src="{{ $d->user->avatar }}" alt="" width="70px" height="70px">

            </div>
            <div class="panel panel-body">
                {{ $d->contenido }}
            </div>

        </div>

    @endforeach

    <div class="text-center">

        {{ $discussions->links() }}

    </div>

@endsection