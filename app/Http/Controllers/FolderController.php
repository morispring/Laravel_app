<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller

{
    public function create(Request $request)
    {
        $folder = new Folder();

        $folder->title = $request->title;

        $folder->save();

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }

    public function showCreateForm()
    {
        return view('folders/create');
    }
}
