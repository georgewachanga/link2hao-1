@extends('layout.master')

@section('content')
    <div class="container">

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Houses available
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>name</th>
                            <th>price</th>
                            <th>location</th>
                        </tr>
                        </thead>
                        @foreach($properties as $property)
                            <tr><td>{{ $property->name }}</td><td> {{ $property->price }}</td><td> {{ $property->location()->locationName }}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection