@extends("layout.master")

@section("content")

    <div class="container">

        {!! Form::model($owner, array('method' => 'put', 'route' => ['owner.store', $owner->id] )) !!}


        {{Form::label('phone', 'phone no.') }}
        {{Form::text('phone', null, array('class'=>'form-control'))}}

        {{Form::label('idno', 'id no:') }}
        {{Form::text('idno', null, array('class'=>'form-control'))}}

        {{Form::label('location', 'location:') }}
        {{Form::text('location', null, array('class'=>'form-control'))}}


        {{Form::submit('create a new owner record', array('class'=>'btn btn-success btn-lg btn-block '))}}
        {!! Form::close() !!}

    </div>

@endsection

