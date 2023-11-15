<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function list_comment()
    {
        $comment = Comment::all();
        foreach ($comment as $key => $value) {
            $id_post = $value->id_post;
        }
        $post = Post::where('id', $id_post)->get();

        return view('admin.comment.list-comment', compact('comment', 'post',));
    }

    // luu comment

    public function saveComment(Request $request)
    {
        $data = $request->all();
        $comment = new Comment();
        $comment->id_post = $data['id_post'];
        $comment->id_major = $data['id_major'];

        $tukhoacam = ['code_ngu_qua', 'chó', 'cức', 'ngu', 'điên', 'khùng', 'cu'];
        $tukhoadaloc = false;

        foreach ($tukhoacam as $keyword) {
            if (stripos($data['content'], $keyword) !== false) {
                $tukhoadaloc = true;
                break;
            }
        }
        $data['hidden'] = $tukhoadaloc ? 0 : 1;
        $comment->content = $data['content'];
        $comment->name_user = $data['name_user'];
        $comment->email_user = $data['email_user'];
        $comment->hidden = $data['hidden'];
        $comment->save();
        // Chuyển hướng người dùng về trang trước hoặc trang bài viết
        return redirect()->back()->with('success', 'Bình luận đã được lưu thành công.');
    }

    // xóa comment
    public function xoa_comment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Xóa bình luận thành công.');
    }
    public function an_comment($id)
    {
        $comment = Comment::find($id);

        if ($comment) {
            $comment->hidden = 0;
            $comment->save();
            return redirect()->back()->with('success', 'Ẩn bình luận thành công.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy bình luận.');
        }
    }

    public function hien_comment($id)
    {
        $comment = Comment::find($id);

        if ($comment) {
            $comment->hidden = 1;
            $comment->save();
            return redirect()->back()->with('success', 'Hiện bình luận thành công.');
        } else {
            return redirect()->back()->with('error', 'Không tìm thấy bình luận.');
        }
    }
}
