<?php

namespace App\Http\Controllers\api;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->get();
        return response()->json($articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $this->getValidationFactory()->make($request->all(), [
            'body' => 'required',
            'source' => 'required',
            'image' => 'required|mimes:jpeg,png'
        ]);
        if ($validation->fails())
            return response()->json(['message' => 'Invalid Data'], 400);
        $article = new Article($request->all());
        if ($article->save()) {
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
            return response()->json(['message' => 'Saved Successfully'],200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        if (!$article)
            return response()->json(['message' => 'No Article was found with your ID']);
        $data =[
            'id' => $article->id,
            'title' => $article->title,
            'source' => $article->source,
            'categories' => $article->categories,
            'comments' => $article->comments,
            'image' => $article->image,
            'body' => $article->body
        ];

        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $this->getValidationFactory()->make($request->all(), [
            'body' => 'required',
            'source' => 'required',
            'image' => 'mimes:jpeg,png'
        ]);
        if ($validation->fails())
            return response()->json(['message' => 'Invalid Data'], 400);

        $article = Article::find($id);
        if ($article->update($request->all())) {
            Article::find($id)->categories()->sync($request->categories);
            if ($request->file('image') != null) {
                $name = 'article-' . $article->id . '.' . $request->file('image')->getClientOriginalExtension();
                $path = public_path("images\\");
                if (is_file($path . $article->image))
                    unlink($path . $article->image);
                $request->file('image')->move($path, $name);
                $article->image = $name;
                return $article->save() ? response()->json(['message' => 'Updated Successfully'], 200) :
                      response()->json(['message' => 'error'], 400);
            }else{
                return response()->json(['message' => 'Updated Successfully'], 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = public_path("images\\");
        $image .= Article::find($id)->image;
        Article::destroy($id);
        if (is_file($image))
            unlink($image);
        return response()->json(['message' => 'Deleted Successfully'],200);
    }

    public function storeComment(Request $request, $articleId)
    {
        $article = Article::find($articleId)->comments()->create($request->all());
        $article->save();
        return response()->json(['message' => 'Commented Successfully'],200);
    }
}
