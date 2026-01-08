<?php
namespace App\Traits;


trait FileSaver {

    public function fileUpload ($file, $model, $database_field, $base_directory) {
        if ($file) {
            try {
                $imageName = time() . "_" . $file->getClientOriginalName();
                $directory = $base_directory;
                $file->move($directory, $imageName);
                $model->update([
                    $database_field => $directory . $imageName
                ]);
            } catch (\Exception $exception){

            }
        }
    }

}

?>
