<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
  <meta name="description" content="">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
<header>
  <nav>

  </nav>
  <form action="upload.php" method="post" enctype="multipart/form-data" id="uploadForm">
    Select XML file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br>
    <label for="title">Title:</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="description">Description:</label>
    <input type="text" id="description" name="description">
</form>
</header>
<main>
<div id=xmlUrl></div>
<div id="xmlData">
    <?php include 'upload.php'; ?>
</div>
  </main>
  <script src="js/app.js"></script>
  <script src="js/upload.js"></script>

</body>

</html>
