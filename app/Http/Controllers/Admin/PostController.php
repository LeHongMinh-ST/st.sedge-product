<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $query = request('q');

        $posts = Post::with('user');

        if ($query) {
            $posts = $posts->where('title', 'like', '%' . $query . '%')
                ->orWhere('content', 'like', '%' . $query . '%');
        }

        $posts = $posts->orderBy('id', 'desc')
            ->paginate(10);

        return view('admin.pages.posts.index', compact('posts', 'query'));
    }

    public function create()
    {
        return view('admin.pages.posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $this->processContent($request->input('content'));
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Bài viết đã được tạo thành công.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.pages.posts.update', compact('post'));
    }


    public function update(PostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $this->processContent($request->input('content'));
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Bài viết đã được cập nhật thành công.');
    }

    public function delete(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.post.index')->with('success', 'Bài viết đã được xóa thành công.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.pages.posts.detail', compact('post'));
    }

    public function uploadImage(PostRequest $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $fileName = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $folder = 'admin/images/postimg';

            $filePath = $file->storeAs($folder, $fileName);

            $url = Storage::url($filePath);

            return response()->json([
                'url' => $url,
                'uploaded' => true,
                'fileName' => $fileName
            ]);
        }

        return response()->json([
            'uploaded' => false,
            'error' => [
                'message' => 'Không thể tải lên tệp tin'
            ]
        ], 400);
    }

    private function processContent($content)
    {
        $dom = new DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();

        $xpath = new DOMXPath($dom);
        $images = $xpath->query('//img');

        foreach ($images as $img) {
            $img->removeAttribute('style');
            $img->removeAttribute('class');
            $img->setAttribute('width', '100%');
            $img->setAttribute('height', 'auto');
            $img->setAttribute('class', 'img-responsive');
        }

        return $dom->saveHTML();
    }
}
