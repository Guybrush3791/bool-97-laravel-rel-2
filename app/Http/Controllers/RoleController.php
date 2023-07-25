<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{

    public function show($id) {

        $role = Role :: findOrFail($id);

        return view('role-show', compact('role'));
    }

    public function create() {

        $users = User :: all();

        return view('role-create', compact('users'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $role = Role :: create($data);
        $role -> users() -> attach($data['users']);

        return redirect() -> route('role.show', $role -> id);
    }

    public function edit($id) {

        $role = Role :: findOrFail($id);
        $users = User :: all();

        return view('role-edit', compact("role", "users"));
    }
    public function update(Request $request, $id) {

        $data = $request -> all();

        $role = Role :: findOrFail($id);
        $role -> update($data);
        if (array_key_exists('users', $data)) {

            $role -> users() -> sync($data['users']);
        } else {

            $role -> users() -> detach();
        }

        return redirect() -> route('role.show', $role -> id);
    }
}
