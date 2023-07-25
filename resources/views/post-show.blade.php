@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>{{ $post -> title }}</h1>
        <p>
            {{ $post -> body }}
        </p>
        <div>
            <span>
                Author:
                {{ $post -> user -> name }} -
                {{ $post -> user -> userDetail -> phone }}
            </span>
        </div>
    </div>

@endsection
