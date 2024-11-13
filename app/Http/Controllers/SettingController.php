<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Upload;
class SettingController extends Controller
{

    public function index(){

        $descriptionsettings = Setting::where('type', 'like', 'description_%')->get();
        $titlesettings = Setting::where('type', 'like', 'title_%')->get();
        $keywordsettings = Setting::where('type', 'like', 'keyword_%')->get();

        $sett = Setting::where('type', 'like', 'fields%')
                            ->orWhere('type', 'like', 'links%')
                            ->get();
        // dd($sett);
        return view("admin.setting.index", compact('descriptionsettings', 'titlesettings', 'keywordsettings', 'sett'));
    }

    protected function handleImage($file)
    {
        // dd($file);
        $arr = explode('.', $file->getClientOriginalName());

        $upload = new Upload();
        $upload->file_original_name = $arr[0];
        $upload->file_name = $file->store('images', 'public');
        $upload->user_id = auth()->id();
        $upload->extension = $file->getClientOriginalExtension();
        $upload->type = 'image';
        $upload->file_size = $file->getSize();
        $upload->save();

        return $upload->id;
    }

    protected function isImageField($fieldName, $request)
    {
        // Define the list of fields that represent image uploads
        $imageFields = ['header_logo', 'footer_logo', 'user_image', 'profile_image', 'testimonial_image'];
        // dd($imageFields);
        // Check if the given field is in the list of image fields
        return in_array($fieldName, $imageFields) && $request->hasFile($fieldName);
    }


    //
    public function update(Request $request){

        // dd($_FILES);
        foreach ($request->types as $key => $type) {
            

            if($type == 'site_name'){
 
                 $this->overWriteEnvFile('APP_NAME', $request[$type]);
             }
 
             if($type == 'timezone'){
 
                 $this->overWriteEnvFile('APP_TIMEZONE', $request[$type]);
             }
 
             else{

                 if ($this->isImageField($type, $request)) {
                     $file = $request->file($type);

                     $uploadId = handleImage($file);
                     $request[$type] = $uploadId;
                } 
                
                
                $settings = Setting::where('type', $type)->first();
               

                if($request->hasFile($type) == true && $request->hasFile($type) !== ''){

                    if($settings != null){
                    
                        if(gettype($request[$type]) == 'array'){
    
                            $settings->value = json_encode($uploadId);
                        }
                        else{
                            $settings->value = $uploadId;
                        }
    
                        $settings->save();

                    }else{
 
                        $settings = new Setting;
                        $settings->type = $type;
    
                        if(gettype($request[$type]) == 'array'){
    
                            $settings->value = json_encode($request[$uploadId]);
                        }
                        else{
    
                            $settings->value = $uploadId;
                        }
                        $settings->save();
    
                    }

                }else{
                    
                
                 if($settings != null){
                    
                     if(gettype($request[$type]) == 'array'){
 
                         $settings->value = json_encode($request[$type]);
                     }
                     else{
                         $settings->value = $request[$type];
                     }
 
                     $settings->save();
                 }
                 else{
 
                     $settings = new Setting;
                     $settings->type = $type;
 
                     if(gettype($request[$type]) == 'array'){
 
                         $settings->value = json_encode($request[$type]);
                     }
                     else{
 
                         $settings->value = $request[$type];
                     }
                     $settings->save();
 
                 }
                }
             }
 
         }
        
        return back()->with('success','Settings updated successfully');

    }



    // Setting Insert

    // public function new_meta_add(Request $request)
    // {
    
    //     $request->validate([
    //         'metaselect' => 'string|in:description_,title_,keyword_',
    //         'type' => 'string',
    //         'value' => 'string',
    //     ]);
       
    //     $prefix = $request->input('metaselect');

    //     $name = str_replace(' ', '_', $request->type);

    //     $prefixedName = $prefix . $name;

    //     $file_value = $request->value;

    //     $settings = new Setting;
    //     $settings->type = $prefixedName;
    //     $settings->value = $file_value;
    //     $settings->save();
       
    //     return redirect()->back()->with('success', 'Setting added successfully.');
    // }

    public function new_meta_add(Request $request)
    {
    // Define validation rules
    $request->validate([
        'metaselect' => 'string|in:description_,title_,keyword_',
        'type' => 'string',
        'value' => 'string|max:160', // Set max length for value
    ]);

    // Extract the prefix and prepare the name
    $prefix = $request->input('metaselect');
    $name = str_replace(' ', '_', $request->type);
    $prefixedName = $prefix . $name;

    // Get the value from the request
    $file_value = $request->value;

    // Apply specific length limits based on the prefix
    if ($prefix === 'title_' && strlen($file_value) > 60) {
        return redirect()->back()->withErrors(['value' => 'Title cannot exceed 60 characters.']);
    }

    if ($prefix === 'description_' && strlen($file_value) > 160) {
        return redirect()->back()->withErrors(['value' => 'Description cannot exceed 160 characters.']);
    }

    // Save the settings
    $settings = new Setting;
    $settings->type = $prefixedName;
    $settings->value = $file_value;
    $settings->save();

    return redirect()->back()->with('success', 'Setting added successfully.');
    }



    public function editSettingForm($id)
{
    $setting = Setting:: find($id);

    return view('admin.setting.admin_editsetting', compact('setting'));
}


public function updateSettingForm(Request $request, $id){
    $setting_value = $request->value;

    $settings = Setting::findOrFail($id);


    $settings->value = $setting_value;
    $settings->save();
    return redirect()->route('setting.index')->with('success', 'Setting updated successfully');

}


public function deleteSettingForm($id){
        $setting = Setting::findOrFail($id);
        $setting->delete();
        return redirect()->back()->with('success', 'Setting has been deleted');
}




public function set_footer(Request $request){



    // $required = [
    //     'fields.field_one' => 'required',
    //     'links.field_one' => 'required_if:fields.field_one,!=,',

    //     'fields.field_two' => 'required',
    //     'links.field_two' => 'required_if:fields.field_two,!=,',

    //     'fields.field_three' => 'required',
    //     'links.field_three' => 'required_if:fields.field_three,!=,',

    //     'fields.field_four' => 'required',
    //     'links.field_four' => 'required_if:fields.field_four,!=,',

    //     'fields.field_five' => 'required',
    //     'links.field_five' => 'required_if:fields.field_five,!=,',

    //     'fields.field_six' => 'required',
    //     'links.field_six' => 'required_if:fields.field_six,!=,',

    //     'fields.field_seven' => 'required_if:links.field_seven,!=,',
    //     'links.field_seven' => 'required',
    // ];

    // $validator = Validator::make($request->all(), $required);
   
   
    // if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }


    $fields = $request->input('fields');
    $links = $request->input('links');

    // dd($links , $fields);

    foreach ($fields as $key => $value) {
        //  dd($fields);
        Setting::updateOrCreate(
            ['type' => "fields[$key]"],
            ['value' => $value]
        );
    }

    foreach ($links as $key => $value) {
        // dd($links);
        Setting::updateOrCreate(
            ['type' => "links[$key]"],
            ['value' => $value]
        );
    }
    

    return redirect()->route('setting.index')->with('success', 'Footer updated successfully');

}


}
