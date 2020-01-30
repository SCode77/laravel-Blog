<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
//        $articles = DB::table('articles')->get();
        $articles = Article::orderBy('id', 'DESC');
        if ($request->q)
            $articles = $articles->where('title','LIKE','%'.$request->q.'%');
        $articles = $articles->orderBy('id', 'DESC')->paginate(4)->appends('q',$request->q);
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
//        $article = DB::table('articles')->find($id);
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    public function store(Request $request)
    {
//        DB::table('articles')->insert([
//            'title' => $request->title,
//            'body' => $request->body,
//            'source' => $request->source
//        ]);
        $article = new Article($request->all());
        $article->save();
        $article->categories()->sync($request->categories);

        if ($request->file('image') != null) {
            $name = 'article-' . $article->id . '.' . $request->file('image')->getClientOriginalExtension();
            $path = public_path("images\\");
            if (is_file($path . $article->image))
                unlink($path . $article->image);
            $request->file('image')->move($path, $name);
            $article->image = $name;
            $article->save();
        }
        return redirect('');
    }

    public function edit($id)
    {
//        $article = DB::table('articles')->find($id);
        $article = Article::find($id);
        $categories = Category::all();
        return view('article.edit', compact('article', 'categories'));
    }

    public function update(Request $request, $id)
    {
//        DB::table('articles')->where('id', $id)->update(
//            [
//                'title' => $request->title,
//                'body' => $request->body,
//                'source' => $request->source
//            ]);
        $article = Article::find($id);
        $article->update($request->all());
        Article::find($id)->categories()->sync($request->categories);
        if ($request->file('image') != null) {
            $name = 'article-' . $article->id . '.' . $request->file('image')->getClientOriginalExtension();
            $path = public_path("images\\");
            if (is_file($path . $article->image))
                unlink($path . $article->image);
            $request->file('image')->move($path, $name);
            $article->image = $name;
            $article->save();
        }
        return redirect('');
    }

    public function destroy($id)
    {
//        DB::table('articles')->delete($id);
        $image = public_path("images\\");
        $image .= Article::find($id)->image;
        Article::destroy($id);
        if (is_file($image))
            unlink($image);
        return back();
    }

    public function storeComment(Request $request, $articleId)
    {
        $article = Article::find($articleId)->comments()->create($request->all());
        $article->save();
        return back();
    }
}
