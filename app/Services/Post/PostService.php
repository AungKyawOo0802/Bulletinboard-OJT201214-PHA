<?php

namespace App\Services\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Contracts\Services\Post\PostServiceInterface;

class PostService implements PostServiceInterface
{
  private $postDao;

  /**
   * Class Constructor
   * @param OperatorPostDaoInterface
   * @return
   */
  public function __construct(PostDaoInterface $postDao)
  {
    $this->postDao = $postDao;
  }

  
  public function createPost($request)
  {
    return $this->postDao->createPost($request);
  }
}
