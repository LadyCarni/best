<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehikl Best</title>
    <link rel="stylesheet" href="public/css/normalize.css">
    <link rel="stylesheet" href="public/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-2.2.0.js"></script>
    <script src="public/js/app.js"></script>
</head>
<body>

    <div class="container">
        <?php include("public/partials/sidebar.php"); ?>

        <div class="body-container">
            <div class="row">
                <div class="twelve-columns">
                    <div class="header-logo">
                        <?php echo file_get_contents("public/images/best.svg"); ?>
                        <p>Grid. Style Guide. No bullshit.</p>
                    </div>
                    <p>So you need a grid. And some basic design patterns and interactions. And you don't want to load in a ton of extra stuff. You're in luck!</p>
                    <p>Welcome to <span class="best-name">Best</span>!</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>