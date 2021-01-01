<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Album;

class ImageController extends Controller
{
  public function createImage(Request $request)
  {
    $id = $request['id'];
    $album = Album::findOrFail($id);
    $albumFolder = preg_replace('/\s+|-|:|/', '', $album->created_at);
    foreach ($request->file('files') as $image) {
      Storage::disk('s3')->putFile($albumFolder, $image, 'public');
    }
    return redirect("admin/albums/$id/edit")->with('success', '画像を追加保存しました。');
  }

  public function destroyImage(Request $request)
  {
    $id = $request['id'];
    $album = Album::findOrFail($id);
    $albumFolder = preg_replace('/\s+|-|:|/', '', $album->created_at);
    Storage::disk('s3')->delete($albumFolder, $request['image']);
    return redirect("admin/albums/$id/edit")->with('success', '画像を削除しました。');
  }
}
