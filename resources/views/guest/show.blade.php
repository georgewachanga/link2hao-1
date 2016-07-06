@extends('layout.master')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ Auth::user()->fname }}  {{ Auth::user()->lname }}
            </div>
            <div class="panel-body">
                {{ $guest->hometown }}
                {{ $guest->phone }}
            </div>
        </div>
    </div>

@endsection