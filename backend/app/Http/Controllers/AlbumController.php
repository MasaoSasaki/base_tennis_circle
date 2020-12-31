<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
  public function index()
  {
    $images = Storage::disk('s3')->files('');
    $albums = Album::all();
    return view('album/index', compact('images', 'albums'));
  }

  public function show($id)
  {
    $album = Album::findOrFail($id);
    $images = Storage::disk('s3')->files('');
    return view('album/show', compact('images', 'album'));
  }
}
