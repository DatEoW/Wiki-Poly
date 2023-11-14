<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

session_start();
class TagController extends Controller
{
    public function list_tag()
    {
        $tag = Tag::all();
        return view('admin.tag.show_tag', compact('tag'));
    }

    public function add_tag()
    {
        return view('admin.tag.add_tag');
    }

    public function save_tag(Request $request)
    {
        $data = $request->all();
        $tag = new Tag();
        $tag->name = $data['tag_name'];
        $tag->slug = $data['tag_slug'];
        $tag->hidden = $data['tag_hidden'];
        $tag->created_at = date('Y-m-d H:i:s');
        $tag->save();
        session(['status' => 'Thêm danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-tag');
    }

    public function edit_tag($id)
    {
        $tag = Tag::find($id);

        return view('admin.tag.edit_tag', compact('tag'));
    }

    public function update_tag(Request $request, $id)
    {
        $data = $request->all();
        $tag = Tag::find($id);
        $tag->name = $data['tag_name'];
        $tag->slug = $data['tag_slug'];
        $tag->hidden = $data['tag_hidden'];
        $tag->updated_at = date('Y-m-d H:i:s');
        $tag->save();
        session(['status' => 'Cập nhật danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-tag');
    }

    // public function delete_tag($id)
    // {
    //     $tag = Tag::find($id);
    //     if ($tag) {
    //         $tag->delete();
    //         session(['status' => 'Xóa thành công', 'tieuDe' => 'Deleted']);
    //     }
    //     return redirect('admin/list-tag');
    // }

    public function destroy(Request $request,string $id)
    {
        $tag = Tag::find($id);
        if ($tag == null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            redirect()->back()->with('message', 'Không tồn tại danh mục!');
        }
        $tag->delete();
        Session::flash('iconMessage', 'success');
        return redirect('admin/list-tag')->with('message', 'Xóa thành công');
    }

    public function unactive_tag($id)
    {
        $tag = Tag::find($id);
        $tag->hidden = 0;
        $tag->save();
        session(['status' => 'Ẩn danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-tag');
    }
    public function active_tag($id)
    {
        $tag = Tag::find($id);
        $tag->hidden = 1;
        $tag->save();
        session(['status' => 'Hiện danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-tag');
    }

// xóa mềm
    public function softDelete($id){
        Tag::find($id)->delete();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Xóa thành công!');
    }

    public function trashed(){
        $perpages = 5;
        $tagTrash = Tag::orderBy('deleted_at','desc')->onlyTrashed()->paginate($perpages)->withQueryString();
        return view("admin.tag.trash_tag", compact('tagTrash'));
    }

    public function restore($id){
        $tag = Tag::withTrashed()->where('id', $id)->first();
        if ($tag) {
            $tag->restore();
            Session::flash('iconMessage', 'success');
            return back()->with('message', 'Hoàn tác thành công!');
        } else {
            return abort(404);
        }
    }

    public function restoreAll() {
        Tag::onlyTrashed()->restore();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Hoàn tác thành công!');
    }

    public function forceDelete($id){
        $tag = Tag::withTrashed()->find($id); // Lấy bản ghi đã xóa mềm
        if ($tag) {
            $tag->forceDelete();
            Session::flash('iconMessage', 'success');
            return redirect()->back()->with('message', 'Xóa thành công!');
        } else {
            return abort(404);
        }
    }
}
