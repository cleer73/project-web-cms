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
        'content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing rhoncus fermentum. Donec ante libero, lobortis id volutpat a, mollis ac eros. Etiam vestibulum bibendum metus, sed rutrum turpis pellentesque in. Nam sed purus vel tellus bibendum cursus quis a leo. Nulla et blandit enim. Integer sagittis accumsan metus quis posuere. Donec eu sem leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Aenean at tristique lorem. Cras eget purus vel libero sodales congue sit amet a diam. Proin ultricies mollis velit non volutpat. Mauris in sem vitae erat malesuada ultricies. In non nisi aliquam, porttitor urna eu, iaculis urna. Curabitur a felis scelerisque magna sagittis volutpat. Suspendisse nibh nulla, auctor ut semper in, pulvinar vel orci. In vel semper est.

Nulla volutpat dignissim mi id bibendum. Aliquam erat volutpat. Cras vitae elementum ante. Sed leo erat, tincidunt consectetur venenatis ac, tincidunt et magna. Curabitur ultricies interdum feugiat. Phasellus laoreet, eros ut molestie rutrum, augue velit elementum felis, nec posuere tortor nisi mollis lacus. Duis in convallis eros. Vestibulum ultrices lorem nec neque feugiat, at euismod elit ultricies. Sed fermentum diam tincidunt interdum pulvinar. Pellentesque non felis ac tortor tincidunt luctus at quis lorem. Phasellus fringilla enim turpis, vel fringilla metus hendrerit quis. Fusce id congue lectus.

Maecenas convallis justo sed dui tempor, rhoncus tincidunt ante blandit. In pulvinar odio eu quam varius commodo. Nullam sodales eros tellus, eu cursus nunc posuere non. Etiam non magna non quam dignissim lobortis. Nulla non tincidunt quam, et consectetur odio. Curabitur iaculis, magna eu interdum vehicula, justo nunc commodo purus, eu tempus magna dolor mollis lacus. In hendrerit a velit nec feugiat. Curabitur placerat ipsum vel vestibulum tristique. Ut fermentum diam id arcu porta, non rhoncus diam suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet quam vel turpis convallis adipiscing. Praesent ornare nulla in varius vulputate. Vestibulum condimentum, ante a ullamcorper feugiat, ipsum erat lobortis eros, nec egestas enim leo sed leo.

Sed tincidunt bibendum ultricies. Quisque eget ante venenatis, aliquet dolor vehicula, lacinia nisl. Etiam porta arcu nec enim interdum, quis auctor quam vehicula. Nulla enim libero, porttitor varius ligula id, lacinia ullamcorper ipsum. Curabitur tristique neque urna, laoreet tempus metus ultricies in. Nulla ut porta dolor. Pellentesque mattis eros et ornare bibendum. Praesent odio nibh, fringilla vitae porta sit amet, pharetra et neque.',
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
        'content'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum adipiscing rhoncus fermentum. Donec ante libero, lobortis id volutpat a, mollis ac eros. Etiam vestibulum bibendum metus, sed rutrum turpis pellentesque in. Nam sed purus vel tellus bibendum cursus quis a leo. Nulla et blandit enim. Integer sagittis accumsan metus quis posuere. Donec eu sem leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

Aenean at tristique lorem. Cras eget purus vel libero sodales congue sit amet a diam. Proin ultricies mollis velit non volutpat. Mauris in sem vitae erat malesuada ultricies. In non nisi aliquam, porttitor urna eu, iaculis urna. Curabitur a felis scelerisque magna sagittis volutpat. Suspendisse nibh nulla, auctor ut semper in, pulvinar vel orci. In vel semper est.

Nulla volutpat dignissim mi id bibendum. Aliquam erat volutpat. Cras vitae elementum ante. Sed leo erat, tincidunt consectetur venenatis ac, tincidunt et magna. Curabitur ultricies interdum feugiat. Phasellus laoreet, eros ut molestie rutrum, augue velit elementum felis, nec posuere tortor nisi mollis lacus. Duis in convallis eros. Vestibulum ultrices lorem nec neque feugiat, at euismod elit ultricies. Sed fermentum diam tincidunt interdum pulvinar. Pellentesque non felis ac tortor tincidunt luctus at quis lorem. Phasellus fringilla enim turpis, vel fringilla metus hendrerit quis. Fusce id congue lectus.

Maecenas convallis justo sed dui tempor, rhoncus tincidunt ante blandit. In pulvinar odio eu quam varius commodo. Nullam sodales eros tellus, eu cursus nunc posuere non. Etiam non magna non quam dignissim lobortis. Nulla non tincidunt quam, et consectetur odio. Curabitur iaculis, magna eu interdum vehicula, justo nunc commodo purus, eu tempus magna dolor mollis lacus. In hendrerit a velit nec feugiat. Curabitur placerat ipsum vel vestibulum tristique. Ut fermentum diam id arcu porta, non rhoncus diam suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc sit amet quam vel turpis convallis adipiscing. Praesent ornare nulla in varius vulputate. Vestibulum condimentum, ante a ullamcorper feugiat, ipsum erat lobortis eros, nec egestas enim leo sed leo.

Sed tincidunt bibendum ultricies. Quisque eget ante venenatis, aliquet dolor vehicula, lacinia nisl. Etiam porta arcu nec enim interdum, quis auctor quam vehicula. Nulla enim libero, porttitor varius ligula id, lacinia ullamcorper ipsum. Curabitur tristique neque urna, laoreet tempus metus ultricies in. Nulla ut porta dolor. Pellentesque mattis eros et ornare bibendum. Praesent odio nibh, fringilla vitae porta sit amet, pharetra et neque.',
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

  