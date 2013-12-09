<!DOCTYPE HTML>
<html><head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title><?= $title ?> &mdash; <?= $site ?></title>

  <meta name="description" content="<?= $description ?>">
  <meta name="author" content="<?= $author ?>">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS -->
  <link rel="stylesheet" href="/admin/style/base.css">
  <link rel="stylesheet" href="/admin/style/skeleton.css">
  <link rel="stylesheet" href="/admin/style/layout.css">
  <link rel="stylesheet" href="/admin/style/app.css">

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Favicons -->
  <link rel="shortcut icon" href="/admin/img/favicon.ico">
  <link rel="apple-touch-icon" href="/admin/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/admin/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/admin/img/apple-touch-icon-114x114.png">

  <?php if(!empty($ga)): ?>
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
      // ga('create', 'UA-40909446-1', 'cleer.net');
    ga('create', '<?= $analyticsId ?>', '<?= $analyticsDomain ?>');
    ga('send', 'pageview');
  </script>
  <?php endif; ?>

</head><body id="<?= $slug ?>">

  <div class="container">
    <?= $content ?>
  </div>

</body></html>
