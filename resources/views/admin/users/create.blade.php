@extends('layouts.admin')

@section('content')


 <h1>Create User</h1>

 {!! Form::open(['method'=> 'POST', 'action'=>'AdminUsersController@store']) !!}

 <div class="form-group">
     {!! Form::label('firstName', 'First Name')!!}
     {!! Form::text('firstName', null, ['class'=>'form-control'])!!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Create user', ['class'=>'btn btn-primary'])!!}

    </div>
 

 {!! Form::close()!!}
@stop