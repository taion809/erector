@extends('layouts.default')

@section('title', 'Password Reset')

@section('content')

<h1>Password Reset</h1>
<div class="well">
    {{ Form::open(array('url' => 'auth/password-reset', 'method' => 'post', 'class' => 'form-horizontal')) }}
    {{ Form::token() }}
    <fieldset>
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
                {{ Form::submit('Reset', array('class' => 'btn btn-primary')) }}
                {{ HTML::link('/', 'Cancel', array('class' => 'btn btn-link')) }}
            </div>
        </div>
    </fieldset>
    {{ Form::close() }}
</div>

@stop