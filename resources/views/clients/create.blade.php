@extends('layouts.app')
@section('title')
    Add new clients to the system.
@stop

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success" id="success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('success') }}
        </div>
    @endif
    <h1>Fill in the form to save the data to CSV.</h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="well">
        {!! Form::open(['route' => 'clients.store', 'method' => 'post']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
            {!! Form::text('name', null , ['class' => 'form-control' , 'placeholder' => 'Your Full Name']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gender', 'Gender', ['class' => 'control-label']) !!} <br>
            {!! Form::radio('gender', 'Male', true)  !!} Male
            {!! Form::radio('gender', 'Female') !!} Female
        </div>

        <div class="form-group">
            {!! Form::label('phone', 'Phone', ['class' => 'control-label']) !!}
            {!! Form::number('phone', null , ['class' => 'form-control','required' => 'true' , 'placeholder' => 'Your Phone Number']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control' , 'required' => 'true' , 'placeholder' => 'Your Email Address']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('address', 'Address', ['class' => 'control-label']) !!}
            {!! Form::text('address', null , ['class' => 'form-control' , 'placeholder' => 'Your Address' , 'required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nationality', 'Nationality', ['class' => 'control-label']) !!}
            {!! Form::text('nationality', null , ['class' => 'form-control' , 'placeholder' => 'Your Nationality' , 'required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('date_of_birth', 'Date Of Birth', ['class' => 'control-label']) !!}
            {!! Form::date('date_of_birth' , null , ['class' => 'form-control' ,'required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('education', 'Educational Background', ['class' => 'control-label']) !!}
            {!! Form::text('education', null , ['class' => 'form-control' , 'placeholder' => 'Educational Background' , 'required' => 'true']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('contact_mode', 'Preferred mode of contact ', ['class' => 'control-label']) !!}
            {!! Form::select('contact_mode', ['None' => 'None' , 'Phone' => 'Phone' , 'Email' => 'Email'] , null , ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
@stop
