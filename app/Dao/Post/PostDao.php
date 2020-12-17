<?php

namespace App\Dao\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Post;

class PostDao implements PostDaoInterface
{
  /**
   * Get Operator List
   * @param Object
   * @return $operatorList
   */

  public function createPost($request)
  {
      $post = Post::get();
      $post->name = $request->name;
      return $post->save();
  }
}
