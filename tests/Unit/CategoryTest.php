<?php
namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Category;

class CategoryTest extends TestCase
{
   public function testAll()
       {
            $this->json("GET", "api/wp_terms")->assertStatus(200);
       }

       public function testFind()
       {
           $category = Category::all()->first();
           $nextID = $category->id - 1;

           $this->json("GET", "api/category/".$category->id)
                ->assertStatus(200);

           $this->json("GET", "api/category/$nextID")
                           ->assertStatus(404);
       }


        public function testPut(){
           $category = Category::all()->first()->toArray();
             $this->json("PUT", "api/category/", $category)
                           ->assertStatus(201);
        }


        public function testPatch(){
             $category = Category::all()->first()->toArray();
                         $this->json("PATCH", "api/category/".$category['id'], $category)
                                       ->assertStatus(200);
        }

        public function testDelete(){

            $category = Category::all()->first();
            $nextID = $category->id - 1;
            $this->json("DELETE", "api/category/".$category->id)
                 ->assertStatus(204);

            $this->json("DELETE", "api/category/$nextID")
                 ->assertStatus(504);
        }

}