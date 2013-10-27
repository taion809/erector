@extends('layouts.default')

@section('title', 'Register')

@section('content')

<h1>Register</h1>
<div class="well">
    {{ Form::open(array('url' => 'auth/register', 'method' => 'post', 'class' => 'form-horizontal')) }}
    {{ Form::token() }}
    <fieldset>
        <div class="form-group">
            {{ Form::label('name', 'Name', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
                {{ Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Marty McFly')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
                {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'admin@somewhere.com')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('password_confirm', 'Password Confirm', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
                {{ Form::password('password_confirm', array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {{ Form::submit('Register', array('class' => 'btn btn-primary')) }}
                {{ HTML::link('/', 'Cancel', array('class' => 'btn btn-link')) }}
            </div>
        </div>
    </fieldset>
    {{ Form::close() }}
</div>

@stop