<?php

declare(strict_types=1);

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ShopController extends BaseController
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Product::query();
        if ($request->has('categories')) {
            $query->whereIn('category_id', $request->categories);
        }
        $products = $query->paginate(9);

        return view('client.pages.collection', compact('products', 'categories'));
    }

    public function show($slug)
    {
        $id = (int) mb_substr(mb_strrchr($slug, '-'), 1);
        $product = Product::with('galeries')->findOrFail($id);
        return view('client.pages.product_template', compact('product'));
    }

    public function quickView($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'price' => number_format($product->price, 0, ',', '.'),
            'thumbnail' => asset($product->thumbnail),
            'description' => $product->description,
        ]);
    }

    public function home()
    {
        $latestProducts = Product::latest()->take(10)->get();
        $categories = Category::all();

        return view('client.pages.index', compact('latestProducts', 'categories'));
    }

    public function blog()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(6);
        $recentPosts = $this->getRecentPosts();
        foreach ($posts as $post) {
            $post->formatted_month = $this->getVietnameseMonth($post->created_at->format('M'));
        }
        return view('client.pages.blog', compact('posts', 'recentPosts'));
    }

    public function detailBlog($slug)
    {
        $id = (int) mb_substr(mb_strrchr($slug, '-'), 1);
        $post = Post::findOrFail($id);
        $monthInVietnamese = $this->getVietnameseMonth($post->created_at->format('M'));
        $formattedDate = $post->created_at->format('d') . ' ' . $monthInVietnamese . ' ' . $post->created_at->format('Y');

        $otherPosts = Post::where('id', '!=', $id)->latest()->take(10)->get();
        foreach ($otherPosts as $otherPost) {
            $otherPost->formatted_month = $this->getVietnameseMonth($otherPost->created_at->format('M'));
        }

        $recentPosts = $this->getRecentPosts();

        return view('client.pages.article', compact('post', 'formattedDate', 'otherPosts', 'recentPosts'));
    }

    public function getRecentPosts($limit = 3)
    {
        $posts = Post::orderBy('created_at', 'desc')->take($limit)->get();
        foreach ($posts as $post) {
            $post->formatted_date = $post->created_at->format('d') . ' ' .
                $this->getVietnameseMonth($post->created_at->format('M')) . ' ' .
                $post->created_at->format('Y');
        }

        return $posts;
    }

    private function getVietnameseMonth($month)
    {
        $months = [
            'Jan' => 'Tháng 1',
            'Feb' => 'Tháng 2',
            'Mar' => 'Tháng 3',
            'Apr' => 'Tháng 4',
            'May' => 'Tháng 5',
            'Jun' => 'Tháng 6',
            'Jul' => 'Tháng 7',
            'Aug' => 'Tháng 8',
            'Sep' => 'Tháng 9',
            'Oct' => 'Tháng 10',
            'Nov' => 'Tháng 11',
            'Dec' => 'Tháng 12',
        ];

        return $months[$month] ?? $month;
    }
}
