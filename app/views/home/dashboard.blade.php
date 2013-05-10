@extends('layouts.master')

@section('title')
    Home
@stop

@section('content')
    <div class="row">
        <div class="offset1 span4">
            @if(count($user->teams) > 0)
                <h4> My Teams </h4>
                <ul>
                    @foreach($user->teams as $team)
                        <li><a href="/team/{{ $team->id }}">{{ $team->name }}</a></li>
                    @endforeach
                </ul>
            @endif

            @if(count($user->members_to) > 0)
                <h1> Subscribed Teams </h1>
                <ul>
                    @foreach($user->members_to as $team)
                        <li><a href="/team/{{ $team->id }}">{{ $team->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="span4">
                <h4> Add Team </h4>
                <form action="" method="POST">
                    <strong>Title:</strong><br/>
                    <input type="text" value="{{ $title }}" name="title"><br/>
                    <input class="btn" type="submit" value="Add Team">
                </form>
        </div>


    </div>
@stop