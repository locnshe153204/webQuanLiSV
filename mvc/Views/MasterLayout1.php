<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Documents</title>
  </head>
  <body>
    <div id="header"></div>
    <div id="content">
        <?php require_once "./mvc/Views/pages/".$data["Page"].".php"?>
    </div>
    <div id="footer"></div>
  </body>
</html>
