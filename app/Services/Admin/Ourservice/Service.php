<?php

namespace App\Services\Admin\OurService;

use App\Models\Ourservice;

class Service
{
    public function store($data){

       Ourservice::create($data);

//        public function __invoke(StoreRequest $request)
//        {
//            $data = $request->validated();
//            if ($request->hasfile('files')) {
//                foreach ($request->file('files') as $key => $file) {
//                    $name = $file->getClientOriginalName();
//                    $file->move(public_path('Post/img/'), $name);
//                    $post_id = $request->post_id + 1;
//
//                    $insert[$key]['name'] = $name;
//                    $insert[$key]['post_id'] = $post_id;
//
//                }
//                File::insert($insert);
//            }
//
//            if ($request->hasfile('video')) {
//                foreach ($request->file('video') as $key => $video) {
//
//                    $name_video = $video->getClientOriginalName();
//                    $video->move(public_path('Post/video/'), $name_video);
//                    $post_id = $request->post_id + 1;
//
//                    $insert_video[$key]['name'] = $name_video;
//                    $insert_video[$key]['post_id'] = $post_id;
//                }
//
//                Video::insert($insert_video);
//            }
//            $this->service->store($data);
//
//            return redirect()->route('admin.post.index');
//        }

    }


    public function update($service, $data){

        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('ServiceHome/images'), $newImageName);
            $service->update([
                'image_path' => $newImageName,
                'header_title' => $data['header_title'],
                'title' => $data['title'],
                'text' => $data['text'],
                'image_title' => $data['image_title'],
                'image_text' => $data['image_text'],
            ]);
        } else {
            $service->update($data);
        }

    }
}
