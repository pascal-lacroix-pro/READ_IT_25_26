<?php

// Route par défaut: 
// PATTERN: /
// CTRL: postsController
// ACTION: index
include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($conn);
