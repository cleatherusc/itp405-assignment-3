<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
  public function index(Request $request)
  {
    $dvds = \DB::table('dvds')
    ->join('genres', 'genres.id', '=', 'dvds.genre_id')
    ->join('ratings', 'ratings.id', '=', 'dvds.rating_id')
    ->where('title', 'like', '%'.$request->title.'%')
    ->orderBy('title', 'asc')->get();
    return view('results', compact('dvds'));
  }
}
