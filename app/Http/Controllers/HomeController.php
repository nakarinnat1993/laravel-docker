<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function xx(Request $r)
    {
        $d = \DB::table('users')->select('id', 'name', 'email')->get();

        return response()->json([
            'u' => $d,
        ]);
    }
}
