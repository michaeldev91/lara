<?php

namespace Tests\Feature;

use \App\blogPost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{

    use RefreshDatabase;
   
    public function testNoBlogPosts()
    {
        $response = $this->get('/posts');
        $response->assertSeeText('No blogpost yet');   
    }
    public function testSeeOneBlogPost(){
        //arrange
        $post = new BlogPost();
        $post->title = 'New Blog';
        $post->content = 'The Content very long';
        $post->save();
        //act
        $response = $this->get('/posts');
        $response->assertSeeText("New Blog");
    }
    public function testStoreValid(){
        $params = [
            'title' => 'Valid title',
            'content' => 'at least 10 chars'
        ];
        $this->post('/posts', $params) 
             ->assertStatus(302)
             ->assertSessionHas('status');
        $this->assertEquals(session('status'), 'New Post Has Been Added');
    }
    public function testWrongValidation(){
        $params = [
            'title' => 'x',
            'content' => 'x'
        ];
        $this->post('/posts', $params) 
             ->assertStatus(302)
             ->assertSessionHas('errors');
        $messages = session('errors');
        
    }
}
