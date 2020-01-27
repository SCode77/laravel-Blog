<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
//        $articles = DB::table('articles')->get();
        $articles = Article::paginate(4);
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
        Article::find($id)->update($request->all());
        Article::find($id)->categories()->sync($request->categories);
        return redirect('');
    }

    public function destroy($id)
    {
//        DB::table('articles')->delete($id);
        Article::destroy($id);
        return back();
    }

    public function storeComment(Request $request, $articleId)
    {
        $article = Article::find($articleId)->comments()->create($request->all());
        $article->save();
        return back();
    }
}
