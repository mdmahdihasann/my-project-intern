<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function table(Request $request){

        if ($request->ajax()) {
            $data = Category::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex align-items-center justify-content-end">';
                    $edit= route('admin.category.edit',$row->id);

                    $btn = '<a href="'.$edit.'"  id="studentmodal" class="edit mr-2 btn btn-primary update_btn btn-sm ms-2" data-id="' . $row->id . '"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn .= '<button type="button" class="btn btn-sm bg-danger delete_data text-white  border-0 ms-2" data-id="' . $row->id . '"><i class="fa-solid fa-trash"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $this->setThisPageTitle('Table');
        $data['breadcrumb']=['Dashboard' => '','Table'=>''];
        $data['Categorys']=Category::where('status',1)->get();

        return view('backend.admin.pages.category.index',$data);
    }
    public function create(){
        $data['breadcrumb']=['Dashboard' => '','Table'=> route('admin.category.table'),'Create'=>''];
        $this->setThisPageTitle('Create');
        return view('backend.admin.pages.category.form',$data);
    }
    public function store(Request $request) {
        $request->validate([
            'category_name'=>'required',
            'status'=>'required'
        ]);
        Category::create([
            'category_name' => $request->category_name,
            'status'        => $request->status,
        ]);
        return redirect()->back()->with('message','Category Has Created');

    }
    public function edit($id){
        $data['breadcrumb']=['Dashboard' => '','Table'=> route('admin.category.table'),'Edit'=>''];
        $data['category_edit']=Category::find($id);
        $this->setThisPageTitle('Edit');
        return view('backend.admin.pages.category.form',$data);
    }

    public function update(Request $request,$id){
        $category_update=Category::find($id);
        $category_update->update([
            'category_name' => $request->category_name,
            'status'        => $request->status,
        ]);
        return redirect()->back()->with('message','Category Has Update');
    }

    public function delete(Request $request){
        $category_delete=Category::findOrFail($request->delete_data);
        
        if($category_delete){
            $category_delete->delete();
            return response()->json(['status'=>200,'message'=>'student  delete success']);
        }else{
            return response()->json(['status'=>200,'message'=>'student not delete success']);
        }
    }
}
