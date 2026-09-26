<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(ArticleRequest $request)
    {
        $path = null;
        
        // Controlliamo se nel form è stata passata l'immagine
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('articles', 'public');
        }

        Article::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'image' => $path, // Salva il percorso esatto
        ]);

        return redirect()->route('article.index')->with('success', 'Articolo e immagine inseriti con successo!');
    }
}
