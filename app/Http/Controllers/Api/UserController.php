<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getUsers(Request $request)
    {
        $users=User::all();
        return response()->json(['users'=>$users],200);
    }
}
