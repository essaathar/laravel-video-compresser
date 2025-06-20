# Laravel Video Compresser

# Fixes for Errors:
- Frontend error: `The video failed to upload` and backend error: `422 Unprocessable Content`:
    - Removing `#[Validate('')]` property in `VideoUpload` component to avoid conflicts with params set in `config/livewire.php`.
    - Increasing `upload_max_filesize` and `post_max_size` sizes to `100M`, inside the `cli/php.ini` file (**NOT** apache's `php.ini` file since `php artisan serve` uses the cli's `.ini` file).
    - Making sure the `storage` directory is writeable:
    ```bash
        php artisan storage:link
        chmod -R 775 storage
    ```
- Credits: **ChatGPT**

# References
- Laravel Validation: https://laravel.com/docs/12.x/validation 
- Livewire File Upload: https://livewire.laravel.com/docs/uploads
