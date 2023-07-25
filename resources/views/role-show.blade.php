@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>
            {{ $role -> name }}
            <a class="btn btn-primary" href="{{ route("role.edit", $role -> id)}}">
                EDIT
            </a>
        </h1>
        <p>{{ $role -> description }}</p>
        <ul>
            @foreach ($role -> users as $user)
                <li>
                    {{ $user -> name }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection
