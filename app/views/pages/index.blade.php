@extends('layouts.default')

@section('content')
    
    
    <div class="row">
    {{ Form::open( array('class' => '') ) }}
        <div class="col-sm-2 col-xs-0"></div>
        <div class="col-sm-7 col-xs-9">
        {{ Form::text('search', null, array('class' => 'form-control', 'placeholder' => 'Search for any product on the planet...')) }}
        </div>
        <div class="col-sm-1 col-xs-2">
        {{ Form::button('<i class="glyphicon glyphicon-search"></i>', array('type' => 'submit', 'class' => 'btn btn-default btn-lg')) }}
        </div>
        <div class="col-sm-2 col-xs-0"></div>
    {{ Form::close() }}
    </div>
@stop