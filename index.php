<?php
  if($_GET['js'] === '' || empty($_GET['js']))
    $test_js = '';
  else
    $test_js = $_GET['js'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>QUnit sample</title>
  <script src="qunit-1.14.0.js"></script>
  <link rel="stylesheet" href="qunit-1.14.0.css">
  <script src="test_js/test<?php echo $test_js; ?>.js"></script>
</head>
<body>
  <div id="qunit"></div>
  <div id="qunit-fixture"></div>
</body>
</html>
