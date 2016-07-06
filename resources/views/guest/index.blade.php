@extends("layout.master")

@section("content")

    <div class="container">

        <div class="jumbotron">
            <h1> Hellooo {{ Auth::user()->fname }}  {{ Auth::user()->lname }}</h1>
            thanks for being our owner number :: {{ Auth::user()->id + 1 }}
        </div>

    </div>

@endsection