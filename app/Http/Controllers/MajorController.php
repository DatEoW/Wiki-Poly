<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MajorModel as Major;
use App\Models\MajorChildModel as MajorChild;
use App\Http\Requests\MajorRequest;
use Illuminate\Support\Facades\Session;

class MajorController extends Controller
{
    public function index()
    {
        $major = Major::all();
        return view('admin.major.major_list',compact('major'));
    }

    public function create()
    {
        return view('admin.major.major_create');
    }

    public function store(MajorRequest $request)
    {
        $arr = $request->all();
        $major = new Major();
        $major->name = $arr['name'];
        $major->hidden = $arr['hidden'];
        $major->slug = ($request->has('slug'))? $arr['slug']:"";
        $major->created_at = date('Y-m-d H:i:s');
        $major->save();
        Session::flash('iconMessage', 'success');
        return redirect(route('major.index'))->with('message', 'Thêm mới thành công!');

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
            return redirect(route('major.index'))->with('message', 'Không tồn tại ngành này');
        }
        return view('admin.major.major_edit', compact('major'));
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
            return redirect(route('major.index'))->with('message', 'Không tồn tại ngành học này!');;
        }
        $major->name = $name;
        $major->slug = $slug;
        $major->hidden = $status;
        $major->save();
        Session::flash('iconMessage', 'success');
        return redirect(route('major.index'))->with('message', 'Chỉnh sửa ngành thành công!');
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
        return redirect(route('major.index'))->with('message', 'Xóa thành công');
    }

    public function softDelete($id){
        Major::find($id)->delete();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Xóa thành công!');
    }
    
    public function trashed(){
        $perpages = 5;
        $majorTrash = Major::orderBy('deleted_at','desc')->onlyTrashed()->paginate($perpages)->withQueryString();
        return view("admin.major.major_trash", compact('majorTrash'));
    }

    public function restore($id){
        $major = Major::withTrashed()->where('id', $id)->first();
        if ($major) {
            $major->restore();
            Session::flash('iconMessage', 'success');
            return back()->with('message', 'Hoàn tác thành công!');
        } else {
            return abort(404);
        }
    }

    public function restoreAll() {
        Major::onlyTrashed()->restore();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Hoàn tác thành công!');
    }
    
    public function forceDelete($id){
        $major = Major::withTrashed()->find($id); // Lấy bản ghi đã xóa mềm
        if ($major) {
            $major->forceDelete();
            Session::flash('iconMessage', 'success');
            return redirect()->back()->with('message', 'Xóa thành công!');
        } else {
            return abort(404); 
        }
    }
}
