<?php

use App\Models\Setting;
use App\Models\Upload;


if (!function_exists('static_asset')) {
    function static_asset($path, $secure = null)
    {
        if (env('FILESYSTEM_DRIVER') == 's3') {
            return Storage::disk('s3')->url($path);
        } else {
            return app('url')->asset('uploads/' . $path, $secure);
        }
    }
}

if (!function_exists('uploaded_asset')) {
    function uploaded_asset($id)
    {
        if (($asset = Upload::find($id)) != null) {
            return ($asset->file_name);
        }
        return null;
    }
  }


  if (!function_exists('get_setting')) {
    function get_setting($key, $default = null)
    {

        $settings = Setting::all();
        $setting = $settings->where('type', $key)->first();

        return $setting == null ? $default : $setting->value;
    }
}


// file upload function
if (!function_exists('handleImage')) {
    function handleImage($file){
        
        $getSize = $file->getSize();
        $arr = explode('.', $file->getClientOriginalName());

        $imageName = time().'.'.$file->getClientOriginalExtension();  
        $file->move(public_path('uploads'), $imageName);

        $upload = new Upload();
        
        $upload->file_original_name = $arr[0];
        $upload->file_name = $imageName;
        $upload->user_id = auth()->id();
        $upload->extension = $file->getClientOriginalExtension();
        $upload->type = 'image';
        
        $upload->file_size = $getSize;
        $upload->save();

        return $upload->id;
    }


}


if (!function_exists('custom_asset')) {

    function custom_asset($path, $secure = null)
    {
        return app('url')->asset('public/' . $path, $secure);
    }

}



