<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{

    public function index()
    {
        $students = User::where('role', 'student')->where('isadmin', false)->orderBy('point', 'desc')->paginate(10);
        return view('leaderboard.index', compact('students'));
    }

    // public function searchStudents(Request $request)
    // {
    //     $students = User::all();
    //     if ($request->keyword != '') {
    //         $students = User::where('fullname', 'LIKE', '%' . $request->keyword . '%')->get();
    //     }

    //     return response()->json([
    //         'students' => $students
    //     ]);
    // }

    public function search(Request $request)
    {
        $querySearch = $request->input('query');
        if ($querySearch == null) {
            $students = User::where('role', 'student')->orderBy('point', 'desc')->paginate(10);
        } else {
            $students = User::where('role', 'student')->where('fullname', 'like', '%' . $querySearch . '%')->orderBy('point', 'desc')->paginate(10);
        }

        return view('leaderboard.index', compact('students', 'querySearch'));
    }
}
