<?php

namespace App\Livewire;

use FFMpeg\FFMpeg;
use FFMpeg\Format\Video\X264;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

// require 'vendor/autoload.php';

class VideoUpload extends Component
{
    use WithFileUploads;


    // #[Validate('file|mimes:mp4,avi|mimetypes:video/mp4,video/avi|max:10000')] // 1MB Max
    public $video;

    public function save()
    {
        // dd(storage_path());
        $this->video->storeAs(path: 'videos', name: 'my-video.mp4');
        // dd($this->video);

    }

    public function compress(): void
    {
        $path = storage_path() . "/app/private/videos/";

        $videoPath = $path . 'my-video.mp4';
        if (!file_exists($videoPath)) {
            dd("File not found: $videoPath");
        }

        $logger = Log::getLogger();

        $ffmpeg = FFMpeg::create(array(
            'ffmpeg.binaries' => '/usr/bin/ffmpeg',
            'ffprobe.binaries' => '/usr/bin/ffprobe',
            'temporary_directory' => $path
        ), $logger);

        $format = new X264();
        $format->on('progress', function ($video, $format, $percentage) {
            echo "$percentage % transcoded";
        });

        $video = $ffmpeg
            ->open($path . 'my-video.mp4')
            ->save($format, $path . "compressed.mp4");
    }

    public function render()
    {
        return view('livewire.video-upload');
    }
}
