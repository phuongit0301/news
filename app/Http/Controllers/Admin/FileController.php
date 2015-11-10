<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Models\File;
use Carbon\Carbon;
use Storage;

class FileController extends Controller
{
    public function fileList()
    {
        echo 123;
    }

    public function fileUpload(Request $request)
    {
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $destinationPath = 'uploads/'.$year.'/'.$month;

        $file = $request->file('upload');
        $filename = md5(microtime() . $file->getClientOriginalName()) . "." . $file->getClientOriginalExtension();

        $fileStore = new File();
        $fileStore->name = $filename;
        $fileStore->original_name = $file->getClientOriginalName();
        $fileStore->mime = $file->getClientMimeType();
        $fileStore->path = $destinationPath;
        $fileStore->save();

        $file->move($destinationPath, $filename);

        return redirect('/admin/files/list')->with('message', 'You just add uploaded image!');
    }
}
