<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function show(string $id): View
    {
        return view('user', [
            'user' => User::findOrFail($id)
        ]);
    }
}
