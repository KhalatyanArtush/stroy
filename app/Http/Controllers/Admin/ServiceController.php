<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OurService\StoreRequest;
use App\Http\Requests\Admin\OurService\UpdateRequest;
use App\Models\File;
use App\Models\Ourservice;
use App\Models\Video;
use App\Services\Admin\OurService\Service;
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller

{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $services = Ourservice::all();
        $files = File::first();
        $video = Video::first();
        return view('admin.services.index', compact('services', 'files', 'video'));
    }

    public function creat()
    {
        $service =  DB::table('ourservices')->latest('id')->first();

        return view('admin.services.create', compact('service'));
    }


    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('Services/images/'), $name);
                // nayel urish tarberak ka service_id vercnelu
                $ourservice_id = $request->ourservice_id + 1;

                $insert[$key]['name'] = $name;
                $insert[$key]['ourservice_id'] = $ourservice_id;

            }
            File::insert($insert);
        }

        if ($request->hasfile('video')) {
            foreach ($request->file('video') as $key => $video) {

                $name_video = $video->getClientOriginalName();
                $video->move(public_path('Services/video/'), $name_video);
                $ourservice_id = $request->ourservice_id + 1;

                $insert_video[$key]['name'] = $name_video;
                $insert_video[$key]['ourservice_id'] = $ourservice_id;
            }

            Video::insert($insert_video);
        }
        if (isset($data['img'])) {
            $newImageName = $data['img']->getClientOriginalName();
            $data['img']->move(public_path('ServiceHome/images'), $newImageName);
        } else {
            $newImageName = null;
        }
        $this->service->store([
            'image_path' => $newImageName,
            'header_title' => $data['header_title'],
            'title' => $data['title'],
            'text' => $data['text'],
            'image_title' => $data['image_title'],
            'image_text' => $data['image_text'],
        ]);

        return redirect()->route('admin.services.index');
    }


    public function update(UpdateRequest $request, Ourservice $service)
    {
        if ($request->hasfile('files')) {

            foreach ($request->file('files') as $key => $file) {

                $name = $file->getClientOriginalName();
                $file->move(public_path('Services/images/'), $name);
                // nayel urish tarberak ka service_id vercnelu
                $ourservice_id = $request->ourservice_id;

                $insert[$key]['name'] = $name;
                $insert[$key]['ourservice_id'] = $ourservice_id;

            }
            File::insert($insert);
        }

        if ($request->hasfile('video')) {
            foreach ($request->file('video') as $key => $video) {

                $name_video = $video->getClientOriginalName();
                $video->move(public_path('Services/video/'), $name_video);
                $ourservice_id = $request->ourservice_id;

                $insert_video[$key]['name'] = $name_video;
                $insert_video[$key]['ourservice_id'] = $ourservice_id;
            }

            Video::insert($insert_video);
        }


        $data= $request->validated();
        $this->service->update($service, $data);

        return redirect()->route('admin.service.show',$service->id);

    }

    public function show(Ourservice $service)
    {

        $files = File::all();
        $videos = Video::all();

        return view('admin.services.show',compact('service', 'files', 'videos'));

    }

    public function edit(Ourservice $service)
    {
        return view('admin.services.show',compact('service'));

    }

    public function delete(Ourservice $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index');
    }
}

