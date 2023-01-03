<!DOCTYPE html>
<html>
<head>
    <title>Jordan Adelaide</title>
    <!-- Compiled and minified CSS from materializecss.com - from tutorial -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link rel="stylesheet" href="materialize.min.css">
    <link rel="stylesheet" href="custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Emblema+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Galindo&display=swap" rel="stylesheet">

<!-- Making some of the styles that are included below -->
<style type="text/css">
    .brand{
        background: rgb(34, 85, 119) !important;
        color: rgb(143, 254, 9) !important;
    }
    .brand-text{
        
    }
    /* Giving the form some styling */
    form{
        max-width: 460px;
        margin: 20px auto;
        padding: 20px;
    }
</style>

</head>

<a name="top"></a>

<?php $uName = $_COOKIE['uName'] ?? 'guest'; ?>

<body class="grey darken-4">
    <nav class="grey">
        <div class="container">
            <a href="https://jordan0adelaide.000webhostapp.com/" style="font-family: 'Emblema One', cursive; color: yellow; text-shadow: 4px 4px 10px rgb(220, 80, 42); font-size: 40px" title="Home page">Jordan Adelaide</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li style="font-weight: 500">Hello <?php echo htmlspecialchars($uName); ?></li>
                <li><a href="form.php" class="btn brand" alt="Button for form" title="See my example form">Form</a></li>
                <li><a href="https://jadelaide.github.io/JaBlog/" class="btn brand" target="_blank" alt="Button for blog" title="Open blog in new tab">¡JaBlog!</a></li>
            </ul>
        </div>
    </nav>
