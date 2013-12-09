<?php

$app->group('/admin', function () use ($app) {
  $app->group('/article', function () use ($app) {
    $app->get('/create', function () use ($app) {
      $app->render('article/form', [
        'context' => 'admin',
        'container' => [
          'title' => 'Create an Article',
          'site' => 'test.net',
          'author' => '',
          'description' => '',
          'slug' => 'admin-home',
        ],
        'view' => [
          'type' => 'create',
          'title' => 'Create an Article',
          'action' => '/admin/article/create',
          'article' => []
        ]
      ]);
    });

    $app->post('/create', function() use ($app) {
      printf('<pre>%s</pre>', print_r($app->request->post(), true));
      die;
    });

    $app->get('/update/:id', function ($id) use ($app) {
      $nowPACIFIC = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
      $nowGMT = new DateTime('now', new DateTimeZone('GMT'));

      $article = [
        'id' => 1,
        'author' => 'jake@cleer.net',
        'created_on' => $nowPACIFIC->format('Y-m-d H:m:s'),
        'created_on_gmt'  => $nowGMT->format('Y-m-d H:m:s'),
        'modified_on'  => $nowPACIFIC->format('Y-m-d H:m:s'),
        'modified_on_gmt'  => $nowGMT->format('Y-m-d H:m:s'),
        'name'  => '',
        'title'  => 'Vivamus molestie consectetur feugiat.',
        'excerpt'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis sed nisi ac cursus. Suspendisse potenti. Morbi non sapien ultrices, porta neque sed, accumsan nunc. Fusce varius tristique sollicitudin. Vivamus tincidunt tristique bibendum. Ut varius faucibus quam, nec ultricies ante malesuada sed. Cras id nunc viverra, mollis magna a, pharetra mauris. Vestibulum sollicitudin eros at ultrices semper. Sed pulvinar felis sapien, eu bibendum ipsum porta eu. Suspendisse potenti.',
        'type'  => 'post',
        'status'  => 'publish',
        'content'  => '',
        'parent_article_id'  => '0',
      ];

      $app->render('article/form', [
        'context' => 'admin',
        'container' => [
          'title' => 'Create an Article',
          'site' => 'test.net',
          'author' => '',
          'description' => '',
          'slug' => 'admin-home',
        ],
        'view' => [
          'type' => 'update',
          'title' => "Editing: {$article['title']}",
          'action' => "/admin/article/update/{$id}",
          'article' => $article,
        ]
      ]);
    });

  });

  $app->get('/', function() use ($app) {
    $nowPACIFIC = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
    $nowGMT = new DateTime('now', new DateTimeZone('GMT'));

    $articles = [
      [
        'id' => 1,
        'author' => 'jake@cleer.net',
        'created_on' => $nowPACIFIC->format('Y-m-d H:m:s'),
        'created_on_gmt'  => $nowGMT->format('Y-m-d H:m:s'),
        'modified_on'  => $nowPACIFIC->format('Y-m-d H:m:s'),
        'modified_on_gmt'  => $nowGMT->format('Y-m-d H:m:s'),
        'name'  => '',
        'title'  => 'Vivamus molestie consectetur feugiat.',
        'excerpt'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis sed nisi ac cursus. Suspendisse potenti. Morbi non sapien ultrices, porta neque sed, accumsan nunc. Fusce varius tristique sollicitudin. Vivamus tincidunt tristique bibendum. Ut varius faucibus quam, nec ultricies ante malesuada sed. Cras id nunc viverra, mollis magna a, pharetra mauris. Vestibulum sollicitudin eros at ultrices semper. Sed pulvinar felis sapien, eu bibendum ipsum porta eu. Suspendisse potenti.',
        'type'  => 'post',
        'status'  => 'publish',
        'content'  => '',
        'parent_article_id'  => '0',
      ]
    ];

    $app->render('home', [
      'context' => 'admin',
      'container' => [
        'title' => 'Admin Home',
        'site' => 'localhost',
        'author' => '',
        'description' => '',
        'slug' => 'admin-home',
      ],
      'view' => [
        'foo' => 'bar',
        'articles' => $articles
      ]
    ]);
  });
});

  