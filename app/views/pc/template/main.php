<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php  echo $page_title?></title>
    <link rel="stylesheet" href="<?php echo URL::base();?>public/css/bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo URL::base();?>public/css/bootstrap-theme.css"/>
</head>
<body>

<header>
<?php echo $header?>
</header>


<?php echo $content?>


<footer>
    www.putsoft.com All right
</footer>
<script src="<?php echo URL::base();?>public/js/jquery-1.11.3.min.js"></script>
<script src="<?php echo URL::base();?>public/js/bootstrap.js"></script>
</body>
</html>