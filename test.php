<?php
/*sanitize*/
$trim = trim(" hello world");
$htmlentities = htmlentities("<script>alert('hacked by clone');</script>");
$htmlspecialchars = htmlspecialchars("<script>alert('hacked by clone');</script>");
$strip = strip_tags("<script>alert('hacked by clone');</script>");
echo $trim;
echo '<br>';
echo $htmlentities;
echo '<br>';
echo $htmlspecialchars;
echo '<br>';
echo $strip;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>