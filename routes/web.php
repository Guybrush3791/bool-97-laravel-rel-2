<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;

Route :: get('/', [UserController :: class, 'index'])
    -> name('index');

Route :: get('/posts/create', [PostController :: class, 'create'])
    -> name('post.create');
Route :: post('/posts/store', [PostController :: class, 'store'])
    -> name('post.store');

// UPDATE DEL POST

Route :: get('/posts/{id}', [PostController :: class, 'show'])
    -> name('post.show');

// CREATE/UPDATE ROLE
Route :: get('/roles/create', [RoleController :: class, 'create'])
    -> name('role.create');
Route :: post('/roles/store', [RoleController :: class, 'store'])
    -> name('role.store');

Route :: get('/roles/edit/{id}', [RoleController :: class, 'edit'])
    -> name('role.edit');
Route :: put('/roles/update/{id}', [RoleController :: class, 'update'])
    -> name('role.update');

Route :: get('/roles/{id}', [RoleController :: class, 'show'])
    -> name('role.show');
