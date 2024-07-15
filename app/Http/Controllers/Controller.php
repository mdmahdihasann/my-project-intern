<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
   
    function setThisPageTitle($title = '')
    {
        view()->share(['title' => $title]);
    }
    
    protected function file_upload($file,$location, Request $request) {
        $fileon=$request->$file;
        $image_file = $fileon;
        $file_extension = $fileon->getClientOriginalExtension();
        $image_rename = time().rand().'.'.$file_extension;
        $image_file->move($location,$image_rename);
        return $image_rename;
    }
    
    protected function file_update($file,$folder,$old_file, Request $request)
    {
        // previous file delete from resource
        if ($old_file != null) {
            file_exists($folder.$old_file) ? unlink($folder.$old_file) : false;
        }

        $fileon=$request->$file;
        $file_extension = $fileon->getClientOriginalExtension();
        $product_image_name =  time().rand().'.'.$file_extension;
        $fileon->move($folder,$product_image_name);
        return $product_image_name;
    }

    protected function file_remove($folder,$old_file){
        file_exists($folder.$old_file) ? unlink($folder.$old_file):false;
    }
}
