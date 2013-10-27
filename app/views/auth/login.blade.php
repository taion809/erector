@extends('layouts.default')

@section('title', 'Login')

@section('content')

<h1>Login</h1>
<div class="well">
    {{ Form::open(array('url' => 'auth/login', 'method' => 'post', 'class' => 'form-horizontal')) }}
    {{ Form::token() }}
    <fieldset>
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
            <div class="col-lg-10 col-lg-offset-2">
                {{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
                {{ HTML::link('auth/register', 'Register', array('class' => 'btn btn-default')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 pull-right">
                {{ HTML::link('auth/forgot-password', 'Password Reset', array('class' => 'btn btn-link')) }}
            </div>
        </div>
    </fieldset>
    {{ Form::close() }}
</div>

@stop