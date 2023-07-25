@extends('layouts.main-layout')

@section('content')

    <div class="text-center">
        <h1>NEW ROLE</h1>
        <form
            method="POST"
            action="{{ route('role.update', $role -> id) }}"
        >

            @csrf
            @method("PUT")

            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name" value="{{ $role -> name }}">
            <br>
            <label for="description">Description</label>
            <br>
            <input type="text" name="description" id="description" value="{{ $role -> description }}">
            <br>
            <h4 class="mt-3">Users</h4>
            @foreach ($users as $user)
                <div class="form-check mx-auto" style="width: 200px">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault" name="users[]" value="{{ $user -> id }}"
                    @foreach ($role -> users as $roleUser)
                        @if ($roleUser -> id === $user -> id)
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $user -> name }}
                    </label>
                </div>
            @endforeach

            <br>
            <input class="my-3" type="submit" value="UPDATE">
        </form>
    </div>

@endsection
