<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Carbon\Carbon;

class ArticleController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboardIndex()
    {
        
        $articles = Article::orderBy('published_on','desc')->get();
		return view('dashboard.articles.index', 
				['articles' => $articles, 
				'links'=>[],
				'page' => '']
		);
        
    }
    
    public function index()
    {
        
        $articles = Article::orderBy('published_on','desc')->get();
		return view('pages.articles', 
				['articles' => $articles, 
				'links'=>[],
				'page' => '']
		);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
		$article = Article::where('slug',$slug)->first();
		return view('pages.article',
			['article' => $article, 'page' => '']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 		$article = new Article();
		$url = "/dashboard/articles/create";
		return view('dashboard.articles.edit',['article' => $article,'formUrl' => $url, 'formTitle' => 'Create Article','page' => '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->published_on = Carbon::now();
        $article->title = $request->get('article_title');
        $article->slug = $request->get('article_slug');
        $article->author = "";
        $article->description = $request->get('article_summary');
		$article->img_url = $request->get('article_img_url');
		$article->thumb_url = $request->get('article_thumb_url');
        $article->fulltext = $request->get('article_fulltext');
        $article->save();
        return redirect('/dashboard/articles');       
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$article = Article::find($id);
		$url = "/dashboard/articles/{$id}";
		return view('dashboard.articles.edit',
			['article' => $article,'formUrl' => $url, 'formTitle' => 'Edit Article', 'page' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
		$article = Article::find($id);
		$article->slug = $request->get('article_slug');
		$article->title = $request->get('article_title');
		$article->published_on = $request->get('article_published_on');
		$article->description = $request->get('article_summary');
		$article->img_url = $request->get('article_img_url');
		$article->thumb_url = $request->get('article_thumb_url');
		$article->fulltext = $request->get('article_fulltext');
		$article->save();
		return redirect('/dashboard/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
