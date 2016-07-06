@extends('layout.master')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                {{ $property->name }}  {{ $property->location()->locationName }}
            </div>
            <div class="panel-body">
                <h3>{{ $property->price }}</h3>
                <p>{{ $property->description }}</p>
            </div>
        </div>
    </div>
@endsection