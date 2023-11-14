<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


session_start();
class CategoryController extends Controller
{
    public function list_category()
    {
        $category = Category::all();
        return view('admin.category.show_category', compact('category'));
    }

    public function add_category()
    {
        return view('admin.category.add_category');
    }

    public function save_category(Request $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->name = $data['category_name'];
        $category->slug = $data['category_slug'];
        $category->hidden = $data['category_hidden'];
        $category->created_at = date('Y-m-d H:i:s');
        $category->save();
        session(['status' => 'Thêm danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-category');
    }

    public function edit_category($id)
    {
        $category = Category::find($id);

        return view('admin.category.edit_category', compact('category'));
    }

    public function update_category(Request $request, $id)
    {
        $data = $request->all();
        $category = Category::find($id);
        $category->name = $data['category_name'];
        $category->slug = $data['category_slug'];
        $category->hidden = $data['category_hidden'];
        $category->updated_at = date('Y-m-d H:i:s');
        $category->save();
        session(['status' => 'Cập nhật danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-category');
    }

    // public function delete_category($id)
    // {
    //     $category = Category::find($id);
    //     if ($category) {
    //         $category->delete();
    //         session(['status' => 'Xóa thành công', 'tieuDe' => 'Deleted']);
    //     }
    //     return redirect('admin/list-category');
    // }

    public function destroy(Request $request,string $id)
    {
        $category = Category::find($id);
        if ($category == null) {
            $request->session();
            Session::flash('iconMessage', 'info');
            redirect()->back()->with('message', 'Không tồn tại danh mục!');
        }
        $category->delete();
        Session::flash('iconMessage', 'success');
        return redirect('admin/list-category')->with('message', 'Xóa thành công');
    }

    public function unactive_category($id)
    {
        $category = Category::find($id);
        $category->hidden = 0;
        $category->save();
        session(['status' => 'Ẩn danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-category');
    }
    public function active_category($id)
    {
        $category = Category::find($id);
        $category->hidden = 1;
        $category->save();
session(['status' => 'Hiện danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-category');
    }
// xóa mềm
    public function softDelete($id){
        Category::find($id)->delete();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Xóa thành công!');
    }

    public function trashed(){
        $perpages = 5;
        $categoryTrash = Category::orderBy('deleted_at','desc')->onlyTrashed()->paginate($perpages)->withQueryString();
        return view("admin.category.trash_category", compact('categoryTrash'));
    }

    public function restore($id){
        $category = Category::withTrashed()->where('id', $id)->first();
        if ($category) {
            $category->restore();
            Session::flash('iconMessage', 'success');
            return back()->with('message', 'Hoàn tác thành công!');
        } else {
            return abort(404);
        }
    }

    public function restoreAll() {
        Category::onlyTrashed()->restore();
        Session::flash('iconMessage', 'success');
        return back()->with('message', 'Hoàn tác thành công!');
    }

    public function forceDelete($id){
        $category = Category::withTrashed()->find($id); // Lấy bản ghi đã xóa mềm
        if ($category) {
            $category->forceDelete();
            Session::flash('iconMessage', 'success');
            return redirect()->back()->with('message', 'Xóa thành công!');
        } else {
            return abort(404);
        }
    }
}
