@extends('layouts.default')

@section('title', 'Forgot Password')

@section('content')

<h1>Forgot Password</h1>
<div class="well">
    {{ Form::open(array('url' => 'auth/forgot-password', 'method' => 'post', 'class' => 'form-horizontal')) }}
    {{ Form::token() }}
    <fieldset>
        <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
            <div class="col-lg-10">
                {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'admin@somewhere.com')) }}
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