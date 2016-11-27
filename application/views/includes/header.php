<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <!--    Bootstrap Paper theme link-->
    <?= link_tag('https://bootswatch.com/paper/bootstrap.min.css'); ?>
    <!-- Fontawesome -->
   <?= link_tag('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
        <!--    Main Css File-->
        <?= link_tag('includes/css/main.css'); ?>
</head>

<body class="<?= $page_class ?>">