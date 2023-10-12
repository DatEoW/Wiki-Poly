<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MajorChildModel as MajorChild;
use App\Models\MajorModel as Major;
use Illuminate\Support\Facades\Session;

class MajorChildController extends Controller
{
    public function index()
    {
        $majorC = MajorChild::all();
        return view('admin.major_child_list',compact('majorC'));
    }

    public function majorP($id){
        $major = Major::find($id);
        if($major){
            return $major->name;
        }
        return false;
    }

    public function create()
    {
        return view('admin.major_child_create');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        $major = new MajorChild();
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

    public function edit(Request $request,string $id)
    {
        $majorC = MajorChild::find($id);
        if ($majorC==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            return redirect('admin.major_child_list')->with('message', 'Không tồn tại ngành');
        }
        return view("admin.major_child_edit", compact('majorC'));
    }

    public function update(Request $request, string $id)
    {
        $arr = $request->post();
        $name = ($request->has('name'))? $arr['name']:"";
        $slug = ($request->has('slug'))? $arr['slug']:"";
        $status = ($request->has('status'))? (int)$arr['status']:"0";
        $idMajorP = ($request->has('major'))? $arr['major'] : " ";
        $majorC = MajorChild::find($id);
        if ($majorC ==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            return redirect('admin.major_child_list')->with('message', 'Không tồn tại ngành');;
        }

        $majorC->name = $name;
        $majorC->hidden = $status;
        $majorC->slug = $slug;
        $majorC->id_major = $idMajorP;
        $majorC->save();
        Session::flash('iconMessage', 'success');
        return redirect('admin.major_child_list')->with('message', 'Chỉnh sửa thành công');
    }

    public function destroy(Request $request,string $id)
    {
        $majorC = Major::find($id);
        if ($majorC==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            redirect()->back()->with('message', 'Không tồn tại ngành học!');
        }
        $majorC->delete();
        Session::flash('iconMessage', 'success');
        return redirect('admin.major_list')->with('message', 'Xóa thành công');
    }
}
