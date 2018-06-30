
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php foreach($css_files as $file): ?>
    <link rel="stylesheet" href="<?=$file; ?>" />
    <?php endforeach; ?>
</head>
<body>
<?=$output;?>

 <?php foreach($js_files as $file): ?>
    <script src="<?=$file;?>"></script>
<?php endforeach; ?>

</body>
</html>