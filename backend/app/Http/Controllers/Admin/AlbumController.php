<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
  public function index()
  {
    logger('index');
    $albums = Album::all();
    return view('admin/album/index', compact('albums'));
  }

  public function create()
  {
    logger('create');
    return view('admin/album/create');
  }

  public function store(Request $request)
  {
    logger($request);
    $image = $request->file('image');
    // $path = Storage::disk('s3')->putFile('/', $image, 'public');
    $album = new Album;
    $album->user_id = 1;
    $album->title = $request->title;
    $album->body = $request->body;
    $album->save();
    logger($album);
    return view('admin/album/create');
  }

  // public function upload(Request $request)
  // {
  //   logger('$request');
  //   $image = $request->file('image');
  //   $path = Storage::disk('s3')->putFile('/', $image, 'public');
  //   return view('admin/event/create');
  // }
}
