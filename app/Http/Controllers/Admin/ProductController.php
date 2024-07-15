<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function table(){
        $this->setThisPageTitle('Table');
        $data['productTable']=Product::with('categories')->where('status','1')->paginate(4);
        $data['breadcrumb']=['Dashboard' => route('admin.dashboard'),'Table'=>''];
       
        return view('backend.admin.pages.product.index',$data);
    }
    public function create(){
        $this->setThisPageTitle('Create');
        $data['category']=Category::all();
        $data['breadcrumb']=['Dashboard' => route('admin.dashboard'),'Table'=>route('admin.product.table'),'Create'=>''];
        return view('backend.admin.pages.product.form',$data);
    }
    public function store(ProductRequest $request){
        $image=$this->file_upload('photo','product/',$request);
        Product::create([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'price'       => $request->price,
            'photo'       => $image,
            'status'      => $request->status,
        ]);
        return redirect()->back()->with('message','Product Create successfully');
    }
    public function edit($id) {
        $this->setThisPageTitle('Edit');
        $data['breadcrumb']=['Dashboard' => route('admin.dashboard'),'Table'=>route('admin.product.table'),'Edit'=>''];
        $data['category']=Category::all();
        $data['productedit']=Product::find($id);
        return view('backend.admin.pages.product.form',$data);
    }
    public function update(Request $request,$id){
        $productupdate=Product::find($id);
        if($request->hasfile('photo')){
            $image=$this->file_update('photo','product/',$productupdate->photo,$request);
        }
        $productupdate->update([
            'name'        => $request->name,
            'category_id' => $request->category_id,
            'price'       => $request->price,
            'photo'       => $image,
            'status'      => $request->status,
        ]);
        return redirect()->back()->with('message','Product Update successfully');
    }

    public function delete($id){
        $productdelete=Product::find($id);
        $this->file_remove('product/',$productdelete->photo);
        $productdelete->delete();
        return redirect()->back()->with('message','Product Delete successfully');
    }
}
