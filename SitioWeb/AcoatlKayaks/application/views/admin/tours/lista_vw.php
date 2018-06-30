<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php foreach($css_files as $fil): ?>
    <link rel="stylesheet" href="<?=$fil; ?>" />
    <?php endforeach; ?>
</head>
<body>
<?=$output;?>

 <?php foreach($js_files as $fil): ?>
    <script src="<?=$fil;?>"></script>
<?php endforeach; ?>

</body>
</html>