@extends('layouts.admin')


@section('content')

<h1>Users</h1>



<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
        </tr>
    </thead>
    <tbody>

        @if($users)

        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? "Active" : "Not active" }}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>
        @endforeach

        @endif

    </tbody>
</table>



<div class="container">

    <div class="formbox">
        <span class="passlabel">Password</span>
        <input type="password" placeholder="Insert password" id="myPass">
        <span id="showPass" onclick="revealPassword()">
            <i class="fas fa-eye" onclick="myFunction(this)"></i>
        </span>
    </div>
    
</div>

<style>
    #showPass {
        cursor: pointer;
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');

    body, html{
        margin: 0;
        color: #34495e;
        font-family: 'Roboto', sans-serif;
        height: 100%;
    }

    input{
        border-radius: 5px;
        border: none;
        background: #f6f6f6;
        color: #666;
        padding: 15px;
        font-size: 1.3rem;
    }

    .passlabel{
        display: block;
        margin-bottom: 10px;
        font-size: 1.5rem;
    }

    .container{
        display: flex;
        align-items: center;
        justify-content: left;
        /*height: 100vh;*/
        background: #34495e;
        background-size: cover;
    }

    .formbox{
        background: white;
        padding: 40px 50px 50px;
        border-radius: 5px;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    #showPass{
        display: inline-block;
        margin-left: -40px;
    }

</style>

<script type="text/javascript">
var state = false;

function revealPassword(){
    if(state == true){
        // <input type="password">
        document.getElementById("myPass").setAttribute("type", "password");
        state = false;
    }else{
        // <input type="text">
        document.getElementById("myPass").setAttribute("type", "text");
        state = true;
    }
}

function myFunction(show){
    show.classList.toggle('fa-eye-slash');
}

</script>

@stop