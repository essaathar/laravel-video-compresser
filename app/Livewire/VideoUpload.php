<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class VideoUpload extends Component
{
    use WithFileUploads;


    // #[Validate('file|mimes:mp4,avi|mimetypes:video/mp4,video/avi|max:10000')] // 1MB Max
    public $video;

    public function save()
    {
        $this->video->store(path: 'tmp-videos');
        dd($this->video->getClientOriginalName());
    }

    public function render()
    {
        return view('livewire.video-upload');
    }
}
