<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Product;
use App\Photo;

class MyApp extends Controller
{

    public function staffCreatePhoto($staff_id, $photo_path)
    {
        $staff = Staff::findOrFail($staff_id);

        $staff->photos()->create(['path' => $photo_path]);

        return $staff->photos;
    }

    public function productCreatePhoto($product_id, $photo_path)
    {
        $product = Product::findOrFail($product_id);

        $product->photos()->create(['path' => $photo_path]);

        return $product->photos;
    }

    public function showStaffPhotos($staff_id)
    {
        $staff = Staff::findOrFail($staff_id);

        dd($staff->photos);
    }

    public function showProductPhoto($product_id)
    {
        $product = Product::findOrFail($product_id);

        dd($product->photos);
    }

    public function updateProductPhoto($product_id, $photo_id, $newPhotoPath)
    {
        $product = Product::findOrFail($product_id);

        $photo = $product->photos()->whereId($photo_id)->first();

        $photo->path = $newPhotoPath;

        $photo->save();
    }

    public function deleteProductPhoto($product_id)
    {
        $product = Product::findOrFail($product_id);

        $product->photos;

        $product->photos()->whereId(5)->delete();

        dd($product->photos);
    }
}
