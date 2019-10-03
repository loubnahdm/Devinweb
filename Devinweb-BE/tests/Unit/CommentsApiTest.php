<?php

// namespace Tests\Unit;
use Tests\TestCase;
use App\Comments;
use Illuminate\Foundation\Testing\RefreshDatabase;
class CommentsApiTest extends TestCase{

     public function setUp(){
          parent::setUp();
          \Illuminate\Support\Facades\Artisan::call('migrate');
     }
     public function testGetComments(){
            $comment = Comments::create(['content' => 'salut']);
            $this->assertEquals(1,Comments::count());
     }


}