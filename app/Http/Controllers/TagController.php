<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Symfony\Component\HttpFoundation\Session\Session;
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

    public function delete_tag($id)
    {
        $tag = Tag::find($id);
        if ($tag) {
            $tag->delete();
            session(['status' => 'Xóa thành công', 'tieuDe' => 'Deleted']);
        }
        return redirect('admin/list-tag');
    }

    public function unactive_tag($id)
    {
        $tag = Tag::find($id);
        $tag->hidden = 1;
        $tag->save();
        session(['status' => 'Ẩn danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-tag');
    }
    public function active_tag($id)
    {
        $tag = Tag::find($id);
        $tag->hidden = 0;
        $tag->save();
        session(['status' => 'Hiện danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-tag');
    }
}
