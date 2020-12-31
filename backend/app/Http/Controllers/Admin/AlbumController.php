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
    $albums = Album::all();
    return view('admin/album/index', compact('albums'));
  }

  public function create()
  {
    return view('admin/album/create');
  }

  public function store(Request $request)
  {
    $image = $request->file('image');
    // $path = Storage::disk('s3')->putFile('/', $image, 'public');
    $album = new Album;
    $album->user_id = 1;
    $album->title = $request->title;
    $album->body = $request->body;
    $album->save();
    return view('admin/album/create');
  }

  public function edit($id)
  {
    $album = Album::findOrFail($id);
    return view('admin/album/edit', compact('album'));
  }

  public function update(Request $request, $id)
  {
    $album = Album::findOrFail($id);
    $album->title = $request->title;
    $album->body = $request->body;
    $album->save();
    $albums = Album::all();
    return view('admin/album/index', compact('albums'));
  }

  public function destroy($id)
  {
    $album = Album::findOrFail($id);
    $album->delete();
    $albums = Album::all();
    return redirect('admin/albums');
  }

  // public function upload(Request $request)
  // {
  //   $image = $request->file('image');
  //   $path = Storage::disk('s3')->putFile('/', $image, 'public');
  //   return view('admin/event/create');
  // }
}
