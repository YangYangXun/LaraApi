<?php

namespace Tests\Feature\Article;

use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testArticleApi()
    {
        $response = $this->get('http://localhost/LaraApi/public/api/articles');

        $response->assertStatus(200);
    }
}
