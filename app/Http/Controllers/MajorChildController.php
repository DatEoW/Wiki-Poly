<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MajorChildModel as MajorChild;
use App\Models\MajorModel as Major;
use App\Http\Requests\MajorChildRequest;
use Illuminate\Support\Facades\Session;


class MajorChildController extends Controller
{
    public function index()
    {
        $majorC = MajorChild::all();
        // $majorP = Major::all();
        return view('admin.majorchild.major_child_list',compact('majorC'));
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
        $majorP = Major::all();
        return view('admin.majorchild.major_child_create',compact('majorP'));
    }

    public function store(MajorChildRequest $request)
    {
        $arr = $request->all();
        $major = new MajorChild();
        $major->name = $arr['name'];
        $major->hidden = $arr['hidden'];
        $major->slug = ($request->has('slug'))? $arr['slug']:"";
        $major->id_major = ($request->has('majorP')) ?$arr['majorP']:"";
        $major->created_at = date('Y-m-d H:i:s');
        $major->save();
        Session::flash('iconMessage', 'success');
        return redirect(route('majorC.index'))->with('message', 'Thêm mới thành công!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Request $request,string $id)
    {
        $majorP = Major::all();
        $majorC = MajorChild::find($id);
        if ($majorC==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            return redirect(route('majorC.index'))->with('message', 'Không tồn tại ngành');
        }
        return view('admin.majorchild.major_child_edit', compact('majorC','majorP'));
    }

    public function update(Request $request, string $id)
    {
        $arr = $request->post();
        $name = ($request->has('name'))? $arr['name']:"";
        $slug = ($request->has('slug'))? $arr['slug']:"";
        $status = ($request->has('hidden'))? (int)$arr['hidden']:"0";
        $idMajorP = ($request->has('majorP'))? $arr['majorP'] : " ";
        $majorC = MajorChild::find($id);
        if ($majorC ==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            return redirect(route('majorC.index'))->with('message', 'Không tồn tại ngành');;
        }

        $majorC->name = $name;
        $majorC->hidden = $status;
        $majorC->slug = $slug;
        $majorC->id_major = $idMajorP;
        $majorC->save();
        Session::flash('iconMessage', 'success');
        return redirect(route('majorC.index'))->with('message', 'Chỉnh sửa thành công');
    }

    public function destroy(Request $request,string $id)
    {
        $majorC = MajorChild::find($id);
        if ($majorC==null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            redirect()->back()->with('message', 'Không tồn tại ngành học!');
        }
        $majorC->delete();
        Session::flash('iconMessage', 'success');
        return redirect(route('majorC.index'))->with('message', 'Xóa thành công');
    }

    public function softDelete($id){
        MajorChild::find($id)->delete();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Xóa thành công!');
    }
    
    public function trashed(){
        $perpages = 5;
        $majorCTrash = MajorChild::orderBy('deleted_at','desc')->onlyTrashed()->paginate($perpages)->withQueryString();
        return view("admin.majorchild.major_child_trash", compact('majorCTrash'));
    }

    public function restore($id){
        $majorC = MajorChild::withTrashed()->where('id', $id)->first();
        if ($majorC) {
            $majorC->restore();
            Session::flash('iconMessage', 'success');
            return back()->with('message', 'Hoàn tác thành công!');
        } else {
            return abort(404);
        }
    }

    public function restoreAll() {
        MajorChild::onlyTrashed()->restore();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Hoàn tác thành công!');
    }
    
    public function forceDelete($id){
        $majorC = MajorChild::withTrashed()->find($id); // Lấy bản ghi đã xóa mềm
        if ($majorC) {
            $majorC->forceDelete();
            Session::flash('iconMessage', 'success');
            return redirect()->back()->with('message', 'Xóa thành công!');
        } else {
            return abort(404); 
        }
    }
}
