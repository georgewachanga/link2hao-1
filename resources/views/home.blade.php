@extends('layout.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard<div class="pull-right"><h4>{{ Auth::user()->fname }}</h4></div> </div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">
                    <a href="/guest"><h4>do you want to rent a house?</h4></a>
                    <a href="/owner">Do you have a property to advertise?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
