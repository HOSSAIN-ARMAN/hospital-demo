<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


trait FileSaver {

    // public function fileUpload ($file, $model, $database_field, $base_directory) {
    //     if ($file) {
    //         try {
    //             $imageName = time() . "_" . $file->getClientOriginalName();
    //             $directory = $base_directory;
    //             $file->move($directory, $imageName);
    //             $model->update([
    //                 $database_field => $directory . $imageName
    //             ]);
    //         } catch (\Exception $exception){

    //         }
    //     }
    // }

    public function storeImage(Request $request, $inputName = 'image', $folder = 'uploads')
    {
        if (!$request->hasFile($inputName)) {
            return null;
        }

        $file = $request->file($inputName);
        $filename = time() . '_' . Str::random(8) . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs($folder, $filename, 'public'); // storage/app/public/uploads

        return $path; // Returns path like "uploads/abc123.jpg"
    }

}

?>
