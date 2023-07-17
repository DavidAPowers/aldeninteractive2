<?php

namespace Tests\Unit;
use App\Models\Article;
use App\Http\Controllers\ArticleController;
use Illuminate\Http\Request;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testStore()
    {
        $controller = new ArticleController();
        $fakeArticle = Article::factory()->make();
        $request = Request::create('/store', 'POST',[
          'article_category' => $fakeArticle->category,
          'article_title' => $fakeArticle->title,
          'article_slug' => $fakeArticle->slug,
          'article_author' => $fakeArticle->author,
          'article_summary' => $fakeArticle->description,
          'article_fulltext' => $fakeArticle->fulltext,
        ]);
        $response = $controller->store($request);
        $this->assertEquals(302, $response->getStatusCode());
        $retrievedArticle=Article::where('slug', $fakeArticle->slug)->first();
        $this->assertEquals('blog', $retrievedArticle->category);
        $this->assertEquals($fakeArticle->title, $retrievedArticle->title);
        //$this->assertEquals($fakeArticle->author, $retrievedArticle->author);
        $this->assertEquals($fakeArticle->description, $retrievedArticle->description);
        $this->assertEquals($fakeArticle->fulltext, $retrievedArticle->fulltext);
        $this->assertEquals(1, $retrievedArticle->id);
        
        
    }
}
