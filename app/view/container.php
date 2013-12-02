<!DOCTYPE HTML>
<html><head>
  <title><?= $title ?> &mdash; <?= $site ?></title>

  <meta name="description" content="<?= $description ?>">
  <meta name="viewport" content="initial-scale=1, user-scalable=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <link rel="stylesheet" href="/style.css">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  
    // ga('create', 'UA-40909446-1', 'cleer.net');
    ga('create', '<?= $analyticsId ?>', '<?= $analyticsDomain ?>');
    ga('send', 'pageview');
  </script>

</head><body id="<?= $slug ?>">

  <?= $content ?>

</body></html>
