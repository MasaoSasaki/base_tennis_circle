<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
  public function index()
  {
    $images = Storage::disk('s3')->files('');
    return view('event/index', compact('images'));
  }

  public function create()
  {
    return view('event/create');
  }

  public function upload(Request $request)
  {
    logger('$request');
    $file = $request->file('file');
    $path = Storage::disk('s3')->putFile('/', $file, 'public');
    return view('event/create');
  }
}
