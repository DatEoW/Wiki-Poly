<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MajorModel as Major;
use App\Models\MajorChildModel as MajorChild;
use Illuminate\Support\Facades\Session;

class MajorController extends Controller
{
    public function index()
    {
        $major = Major::all();
        return view('admin.major_list',compact('major'));
    }

    public function create()
    {
        return view('admin.major_create');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        $major = new Major();
        $major->name = $arr['name'];
        $major->hidden = $arr['hidden'];
        $major->slug = ($request->has('slug'))? $arr['slug']:"";
        $major->created_at = date('Y-m-d H:i:s');
        $major->save();
        Session::flash('iconMessage', 'success');
        return redirect('admin.major_list')->with('message', 'Thêm mới thành công!');

    }

    public function show(string $id)
    {
        //
    }

    public function edit(Request $request, string $id)
    {
        $major = Major::find($id);
        if ($major==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            return redirect('admin.major_list')->with('message', 'Không tồn tại ngành này');
        }
        return view("admin.major_edit", compact('major'));
    }

    public function update(Request $request, string $id)
    {
        $arr = $request->post();
        $name = ($request->has('name'))? $arr['name']:"";
        $slug = ($request->has('slug'))? $arr['slug']:"";
        $status = ($request->has('hidden'))? (int)$arr['hidden']:"0";
        $major = Major::find($id);
        if ($major ==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            return redirect('admin.major_list')->with('message', 'Không tồn tại ngành học này!');;
        }
        $major->cate_slide_name = $name;
        $major->cate_slide_slug = $slug;
        $major->cate_slide_hidden = $status;
        $major->save();
        Session::flash('iconMessage', 'success');
        return redirect('admin.major_list')->with('message', 'Chỉnh sửa ngành thành công!');
    }

   
    public function destroy(Request $request,string $id)
    {
        $major = Major::find($id);
        if ($major==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            redirect()->back()->with('message', 'Không tồn tại ngành học!');
        }
        $major->delete();
        Session::flash('iconMessage', 'success');
        return redirect('admin.major_list')->with('message', 'Xóa thành công');
    }
}
