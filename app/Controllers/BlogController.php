<?php

namespace App\Controllers;

class BlogController {

  public function index()
  {
    return $this->view('blog.index');
  }

  public function show(int $id)
  {
    echo 'Je suis le post' . $id;
  }
}
