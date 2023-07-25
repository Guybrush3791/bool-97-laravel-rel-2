@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>
            Post
            <a class="btn btn-primary" href="{{ route('post.create')}}">+</a>
        </h1>
        <h1>
            Role
            <a class="btn btn-primary" href="{{ route('role.create')}}">+</a>
        </h1>
        <h1>Users</h1>
        <ul class="list-unstyled">
            @foreach ($users as $user)
                <li>
                    <h4>
                        {{ $user -> name }}
                    </h4>
                    <img src="{{ $user -> userDetail -> avatar }}">
                    <p>
                        Email: {{ $user -> email }}
                        <br>
                        Phone: {{ $user -> userDetail -> phone }}
                        <br>
                        Address: {{ $user -> userDetail -> address }}
                    </p>
                    <h5>Posts: {{ count($user -> posts) }}</h5>
                    <ul>
                        @foreach ($user -> posts as $post)
                            <li>
                                <a href="{{ route('post.show', $post -> id) }}">
                                    {{ $post -> title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <h5>Roles: {{ count($user -> roles) }}</h5>
                    <ul>
                        @foreach ($user -> roles as $role)
                            <li>
                                <a href="{{ route('role.show', $role -> id) }}">
                                    {{ $role -> name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
