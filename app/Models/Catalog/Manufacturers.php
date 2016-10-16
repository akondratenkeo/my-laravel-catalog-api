<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class Manufacturers extends Model
{
    public static $_public_attributes = [
        'name',
        'description',
        'sort_order',
        'meta_title',
        'meta_description',
    ];

    public function loadModel(array $request)
    {
        foreach (self::$_public_attributes as $field) {
            if (array_key_exists($field, $request)) {
                $this->{$field} = $request[$field];
            }
        }

        if (isset($request['image'])) {
            $this->image = $this->saveImageAsBase64($request['image']);
        }
    }

    public function saveImageAsBase64(UploadedFile $image)
    {
        $storage = \Storage::disk('public');
        $storage_path = $storage->getDriver()->getAdapter()->getPathPrefix();

        $file_name = $this->name != null ? str_replace([' ', '+'], '-', $this->name) : 'brand-';
        $file_name .=  '-'. time() .'-'. md5($image->getClientOriginalName()) .'.'. $image->getClientOriginalExtension();

        if (!$path = $image->storeAs('brands', $file_name, 'public')) {
            return null;
        }

        $img = Image::make($storage_path.$path);
        $data_base64 = (string)$img->resize(200, 200)->encode('data-url', 75);

        if (empty($data_base64)) {
            $data_base64 = null;
        }

        $img->destroy();
        $storage->delete($path);

        return $data_base64;
    }
}
