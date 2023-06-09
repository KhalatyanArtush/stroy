<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\File\FileRequest;
use Illuminate\Http\Request;

use App\Models\File;


class FileUploadController extends Controller
{
    public function index()
    {
        return view('file-upload');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'files' => 'required',
            'files.*' => 'mimes:jpg.png,jpeg'
        ]);


        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $key => $file)
            {
                $path = $file->store('public/Services/images');
                $name = $file->getClientOriginalName();

                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;

            }
        }

        File::insert($insert);

        return redirect('files-upload')->with('status', 'Multiple File has been uploaded Successfully');

    }

    public function delete(File $file, FileRequest $request)
    {

        $file = File::find($request->image_id);
        $service = $file->ourservice_id;
        if (is_file("Services/images/".$request->name)){
            unlink("Services/images/".$request->name);
        }
        $file->delete();
        return redirect()->route('admin.service.show',$service);

    }
}
