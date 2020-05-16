@extends('layouts.admin')

@section('content')


<h1>Create User</h1>

{!! Form::open(['method'=> 'POST', 'action'=>'AdminUsersController@store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name')!!}
    {!! Form::text('name', null, ['class'=>'form-control', 'autocomplete' => 'off', 'required'])!!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email')!!}
    {!! Form::email('email', null, ['class'=>'form-control', 'autocomplete' => 'off', 'required'])!!}
</div>

<div class="form-group">
    {!! Form::label('role_id', 'Role')!!}
    {!! Form::text('role_id', null, ['class'=>'form-control', 'autocomplete' => 'off', 'required'])!!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status')!!}
    {!! Form::select('status', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control'])!!}
</div>




<div class="form-group">
    {!! Form::submit('Create user', ['class'=>'btn btn-primary'])!!}
</div>


{!! Form::close()!!}
@stop