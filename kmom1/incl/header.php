<!DOCTYPE html>
<html lang="sv">

<head>
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/stylesheet.css">
    <link rel="alternate stylesheet" href="/css/debug.css" title="Debug stylesheet">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <title>
        <?php echo $title; ?>
    </title>

    <?php if(isset($pageStyle)) : ?>
    <style type="text/css">
        <?php echo $pageStyle;
        ?>
    </style>
    <?php endif; ?>

</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>

    <!-- Above header -->
    <header id="above">
        <!-- Relateted links -->
        <nav class="related">
            <a href="report.php#Kmom01">Kmom01</a>
            <a href="report.php#Kmom02">Kmom02</a>
        </nav>
    </header>

    <!-- Header with logo and main navigation -->
    <header id="top">
        <div>
            <img src="img/logo.svg" alt="Norrbjörk logo" width=300 height=100>
        </div>

        <!-- The body id helps with highlighting current menu choice -->
        <body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
            <nav class="navMenu">
                <ul>
                    <li><a id="me-" href="me.php">Me</a>
                    </li>
                    <li><a id="report-" href="report.php">Redovisning</a>
                        <ul>
                            <li><a href="report.php#Kmom01">Kmom01</a>
                            </li>
                            <li><a href="#">Kmom02</a>
                            </li>
                            <li><a href="#">Kmom03</a>
                            </li>
                            <li><a href="#">Kmom04</a>
                            </li>
                            <li><a href="#">Kmom05</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
    </header>