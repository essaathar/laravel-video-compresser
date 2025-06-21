<?php

return [
    // 'temporary_file_upload' => [
    //     // 'rules' => 'file|mimes:png,jpg,pdf|max:102400', // (100MB max, and only accept PNGs, JPEGs, and PDFs)
    //     'rules' => 'file|mimes:mp4,avi|mimetypes:video/mp4,video/avi|max:102400',
    //     'directory' => 'tmp-videos',
    // ],
    'temporary_file_upload' => [
        'rules' => 'file|mimes:mp4,avi|max:102400', // 100MB
        'directory' => 'videos',
    ],

];
