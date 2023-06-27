<!-- app/views/templates/default.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Royal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <link rel="stylesheet" href="assets/css/main.css">
  <script src="assets/js/main.js" defer></script>
</head>
<body>
  <!-- Include common header and navigation here -->
  <?php include 'header.php'; ?>

  <!-- Include the specific page content here -->
  <?php include $page; ?>

  <!-- Include common footer here -->
  <?php include 'footer.php'; ?>
</body>
</html>