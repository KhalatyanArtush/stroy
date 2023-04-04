<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\VideoRequest;

use App\Models\Video;


class VideoController extends Controller
{

    public function delete(Video $video, VideoRequest $request)
    {

        $video = Video::find($request->image_id);
        $service = $video->ourservice_id;
        if (is_file("Services/video/".$request->name)){
            unlink("Services/video/".$request->name);
        }

        $video->delete();
        return redirect()->route('admin.service.show',$service);

    }
}
