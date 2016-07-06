@extends("layout.master")

@section('content')
    <div class="container">

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ Auth::user()->fname }} {{ Auth::user()->lname }}
                </div>
                <div class="panel-body">
                    {{ $owner->location }}
                    {{ $owner->phone }}
                </div>
            </div>
        </div>

    </div>


@endsection