<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return response()->json(['message' => 'resource not exist']);
        }
        // return $article;
        return response()->json(['auther' => 'me', 'attribute' => $article]);
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $result = $article->update($request->all());

        if (!$result) {
            return response()->json(['status' => 'update fail', 'message' => 'Atricle not found'], 404);
        }

        return response()->json(['status' => 'update success', 'attribute' => $article]);

    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}
