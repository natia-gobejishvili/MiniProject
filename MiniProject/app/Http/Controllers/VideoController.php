<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function showVideos() {
        $videos = Video::all();
        return view("videos", [
            "videos" => $videos
        ]);
    }

    public function video($id) {
        $videos = Video::find($id);
        return view("video", [
            "video" => $videos
        ]);
    }
}
