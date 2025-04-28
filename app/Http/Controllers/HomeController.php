<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        $users = \DB::table('users')->get();

        foreach ($users as $user) {
            if ($user->status == 'active') {
                if ($user->age > 18) {
                    if ($user->country == 'Thailand') {
                        $data[] = [
                            'id' => $user->id,
                            'name' => strtoupper($user->name),
                            'email' => $user->email,
                            'country' => $user->country,
                        ];
                    } else {
                        if ($user->country == 'Japan') {
                            $data[] = [
                                'id' => $user->id,
                                'name' => strtolower($user->name),
                                'email' => $user->email,
                                'country' => $user->country,
                            ];
                        } else {
                        }
                    }
                }
            }
        }


        $longestName = '';
        foreach ($data as $u1) {
            foreach ($data as $u2) {
                if (strlen($u2['name']) > strlen($u1['name'])) {
                    $longestName = $u2['name'];
                }
            }
        }

        return response()->json([
            'users' => $data,
            'longest_name' => $longestName,
        ]);
    }
}
