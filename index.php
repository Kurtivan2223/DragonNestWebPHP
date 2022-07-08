<?php
    if (version_compare(PHP_VERSION, '7.0', '<')) {
        echo "<p>You need to use PHP >= 7.0.0</p>";
        exit();
    }

    require_once './application/loader.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $antiXss->xss_clean(get_config("page_title")); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $antiXss->xss_clean("/library/css/bootstrap.min.css");?>">
        <script src="<?php echo $antiXss->xss_clean("/library/js/bootstrap.min.js"); ?>"></script>
    </head>
    <body>
        <div class="container">
            <!--
                Im lazy please help me
            -->
        </div>
    </body>
</html>