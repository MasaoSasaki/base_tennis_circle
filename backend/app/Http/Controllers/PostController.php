<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
  public function index()
  {
    $images = Storage::disk('s3')->files('');
    return view('post/index', compact('images'));
  }

  public function create()
  {
    return view('post/create');
  }

  public function upload(Request $request)
  {
    logger('$request');
    $file = $request->file('file');
    // 第一引数はディレクトリの指定
    // 第二引数はファイル
    // 第三引数はpublicを指定することで、URLによるアクセスが可能となる
    $path = Storage::disk('s3')->putFile('/', $file, 'public');
    // hogeディレクトリにアップロード
    // $path = Storage::disk('s3')->putFile('/hoge', $file, 'public');
    // ファイル名を指定する場合はputFileAsを利用する
    // $path = Storage::disk('s3')->putFileAs('/', $file, 'hoge.jpg', 'public');
    return view('post/create');
  }
}
