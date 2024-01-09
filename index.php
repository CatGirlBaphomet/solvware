<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Slider Example</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header>
    <div class="slider-container">
      <div class="arrow-left">&lt;</div>
      <div class="slider-track">
        <div class="slide" style="background-color: #FF5733;">Slide 1</div>
        <div class="slide" style="background-color: #33FF57;">Slide 2</div>
        <div class="slide" style="background-color: #5733FF;">Slide 3</div>
      </div>
      <div class="arrow-right">&gt;</div>
    </div>
    <nav>
      <a href="">Item 1</a>
      <a href="">Item 2</a>
      <a href="">Item 3</a>
      <a href="">Item 4</a>
      <a href="">Item 5</a>
      <a href="">Item 6</a>
    </nav>
    <div class="grid">
      <div class="grid1">
        <form action="upload.php" method="post" enctype="multipart/form-data" id="uploadForm">
          <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;">
          <button type="button" id="filePickerBtn">Pick File</button>
          <br>
      </div>
      <div class="grid2">
        <label for="title"></label>
        <input type="text" id="title" name="title" placeholder="Title">
        <br>
        <label for="description"></label>
        <textarea id="description" name="description" rows="4" cols="50" placeholder="Description"></textarea>
        <button type="button" id="saveBtn">Save</button>
        </form>
      </div>
    </div>
  </header>
  <main>
    <div id="xmlUrl"></div>
    <div id="xmlData">
      <?php include 'upload.php'; ?>
    </div>
  <script src="js/app.js"></script>
  <script src="js/upload.js"></script>
  <script src="js/save.js"></script>
  <script src="js/slider.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var slider = new Slider('.slider-container');
    });
  </script>
</body>

</html>
