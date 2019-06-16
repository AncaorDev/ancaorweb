<head>
<meta charset="UTF-8">
<title>Ancaor <?php if (isset($_GET['page'])) {echo $_GET['page']; } ?></title>
<!-- Metas -->
<base href="http://localhost/ancaor/views"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="Author" content="Ancaor/ancaor.com" />
<meta property='og:locale' content='es_ES'/>
<meta property='og:type' content='website'/>
<meta property='og:site_name' content='<?php echo TITLE  ?>'/>
<meta property='fb:app_id' content=''/>
<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="views/images/fav/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="views/images/fav/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="views/images/fav/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="views/images/fav/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="views/images/fav/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="views/images/fav/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="views/images/fav/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="views/images/fav/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="views/images/fav/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="views/images/fav/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="views/images/fav/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="views/images/fav/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="views/images/fav/favicon-16x16.png">
<link rel="manifest" href="views/images/fav/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- Estilos -->
<link href="views/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="views/css/default.css">
<link href="views/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Ancaor - Panel</title>
<!-- Custom CSS -->
<?php if (isset($_GET['page'])){ ?>
  <?php if ($_GET['page']=='panel'): ?>
    <link href="views/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="views/css/plugins/morris.css" rel="stylesheet">
  <?php endif; ?>
<?php } ?>
<!-- Custom Fonts -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
