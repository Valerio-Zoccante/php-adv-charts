<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    </head>
    <body>
        <div class="container">
            <?php if ($_GET['level'] == "guest" || $_GET['level'] == "employee" || $_GET['level'] == "clevel") {?>
            <canvas id="line"></canvas>
            <?php } ?>
        </div>
        <div class="container">
            <?php if ($_GET['level'] == "employee" || $_GET['level'] == "clevel") {?>
            <canvas id="pie"></canvas>
            <?php } ?>
        </div>
        <div class="container">
            <?php if ($_GET['level'] == "clevel") {?>
            <canvas id="multi-line"></canvas>
            <?php } ?>
        </div>

        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
