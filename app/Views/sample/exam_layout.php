<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= (isset($title) ? $title . ' - ' : '') ?>Codeignit4 Sample</title>
    <!-- CSS files -->
    <link href="/assets/tabler/css/tabler.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="/assets/tabler/css/demo.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
  </head>
  <body style="background-color: white;">
        <?= $this->renderSection('content') ?>
  </body>
</html>