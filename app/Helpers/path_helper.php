<?php

use Illuminate\Support\Facades\File;

if (! function_exists('afc_base_path')) {
    function afc_base_path(string $append = ''): string
    {
        // Adjust to your real structure if needed
        $root = rtrim(base_path('../public_html/afc_bharat'), '/');
        // $root = rtrim(public_path(), '/');

        return $append ? $root . '/' . ltrim($append, '/') : $root;
    }
}
if (! function_exists('afc_base_url')) {
    function afc_base_url(string $append = ''): string
    {
        $base = rtrim(config('app.url'), '/') . '/afc_bharat';
        // $base = rtrim(url('/'), '/');
        return $append ? $base . '/' . ltrim($append, '/') : $base;
    }
}
if (! function_exists('ensure_dir')) {
    function ensure_dir(string $path, int $mode = 0775): void
    {
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, $mode, true, true);
        }
    }
}
