<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Pest\Laravel\get;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return $users;
    }
}
