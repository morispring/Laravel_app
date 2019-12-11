<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFolder;

class FolderController extends Controller

{
    public function create(CreateFolder $request)
    {
        $folder = new Folder();

        $folder->title = $request->title;

        Auth::user()->folders->save($folder);

        return redirect()->route('tasks.index', [
            'id' => $folder->id,
        ]);
    }

    public function showCreateForm()
    {
        return view('folders/create');
    }
}
