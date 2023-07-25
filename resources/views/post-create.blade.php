@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>NEW POST</h1>
        <form
            method="POST"
            action="{{ route('post.store') }}"
        >

            @csrf
            @method("POST")

            <label for="title">Title</label>
            <br>
            <input type="text" name="title" id="title">
            <br>
            <label for="body">Body</label>
            <br>
            <input type="text" name="body" id="body">
            <br>
            <label for="user_id">User</label>
            <br>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user -> id }}">{{ $user -> name }}</option>
                @endforeach
            </select>
            <br>
            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>

@endsection
