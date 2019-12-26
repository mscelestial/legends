@extends('layouts.app')

@section('title', 'Mobile Legends Heroes')

@section('content')
    <h1 class="formTitle">Hero Details</h1>
    <div class="heroForm">
        <form method="POST" action="{{ action('HeroesController@store') }}">
            @csrf

            <label>Hero Name</label>
            <input type="text" name="name" value="">

            <label>Hero Role</label>
            <select name="roleName" id="" value="">
                @foreach ($roles as $role)
                <option>{{$role->name}}</option>
                @endforeach
            </select>

            <label>Hero Type</label>
            <select name="typeName" id="" value="">
                @foreach ($types as $type)
                <option>{{$type->name}}</option>
                @endforeach
            </select>

            <button type="submit" name="save">Next</button>
        </form>
    </div>

@endsection