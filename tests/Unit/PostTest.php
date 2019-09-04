<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Post;

class PostTest extends TestCase
{
   public function testAll()
       {
            $this->json("GET", "api/wp_posts")->assertStatus(200);
       }

       public function testFind()
       {
           $post = Post::all()->first();
           $nextID = $post->id - 1;

           $this->json("GET", "api/post/".$post->id)
                ->assertStatus(200);

           $this->json("GET", "api/post/$nextID")
                           ->assertStatus(404);
       }


        public function testPut(){
           $post = Post::all()->first()->toArray();
             $this->json("PUT", "api/post/", $post)
                           ->assertStatus(201);
        }


        public function testPatch(){
             $post = Post::all()->first()->toArray();
                         $this->json("PATCH", "api/post/".$post['id'], $post)
                                       ->assertStatus(200);
        }

        public function testDelete(){

            $post = Post::all()->first();
            $nextID = $post->id - 1;
            $this->json("DELETE", "api/post/".$post->id)
                 ->assertStatus(204);

            $this->json("DELETE", "api/post/$nextID")
                 ->assertStatus(504);
        }

}