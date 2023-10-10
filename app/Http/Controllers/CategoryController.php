<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Symfony\Component\HttpFoundation\Session\Session;
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

    public function delete_category($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            session(['status' => 'Xóa thành công', 'tieuDe' => 'Deleted']);
        }
        return redirect('admin/list-category');
    }

    public function unactive_category($id)
    {
        $category = Category::find($id);
        $category->hidden = 1;
        $category->save();
        session(['status' => 'Ẩn danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-category');
    }
    public function active_category($id)
    {
        $category = Category::find($id);
        $category->hidden = 0;
        $category->save();
        session(['status' => 'Hiện danh mục thành công', 'tieuDe' => 'Success']);
        return redirect('admin/list-category');
    }
}
