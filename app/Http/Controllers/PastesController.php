<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PastesController extends Controller
{
    public function homePage() {
        $data = DB::table('pastes')
            ->orderBy('id', 'desc')
            ->get();
        return view('homePage', ['data' => $data]);
    }

    public function addPaste(Request $request) {
        DB::table('pastes')->insertGetId([
            'title' => $request->input('title'),
            'code' => $request->input('code')
        ]);
        return redirect('/');
    }

    public function showPaste($id) {
        $data = DB::table('pastes')
            ->select('title', 'code', 'id')
            ->where('id', '=', $id)
            ->get();
        return view('viewPaste', ['data' => $data]);
    }

    public function updatePaste($id, Request $request) {
        DB::table('pastes')
              ->where('id', '=', $id)
              ->update([
                  'title' => $request->input('title'),
                  'code' => $request->input('code')
              ]);
        return redirect('/');
    }

    public function deletePaste($id) {
        DB::table('pastes')->where('id', '=', $id)->delete();
        return redirect('/');
    }
}
