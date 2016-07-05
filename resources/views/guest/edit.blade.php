@extends("layout.master")

@section("content")

    {!! Form::model($guest, array('method' => 'put', 'route' => ['guest.update', $guest->id ])) !!}


    {{Form::label('phone', 'phone no.') }}
    {{Form::text('phone', null, array('class'=>'form-control'))}}

    {{Form::label('idno', 'id no:') }}
    {{Form::text('idno', null, array('class'=>'form-control'))}}

    {{Form::label('hometown', 'hometown') }}
    {{Form::text('hometown', null, array('class'=>'form-control'))}}


    {{Form::submit('create a new guest record', array('class'=>'btn btn-success btn-lg btn-block '))}}
    {!! Form::close() !!}

@endsection

