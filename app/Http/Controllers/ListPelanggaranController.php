<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CommentReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;

class ListPelanggaranController extends Controller
{
    public function listpelanggaran()
    {
        $user = Auth::user();
        $reports = CommentReport::where('user_id', $user->id)->paginate(10);

        // dd($reports);
        return view('dosen_asrama.listpelanggaran', compact('reports'));
    }
}
