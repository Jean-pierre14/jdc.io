<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bisimwa AI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css" />

</head>

<body>

    <?php require_once("./includes/navbar.php")?>

    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <?php require_once("./includes/HomeData.php");?>
        </div>
        <div class="tab-pane container fade" id="menu1">
            <?php require_once("./includes/registerJournal.php");?>
        </div>
        <div class="tab-pane container fade" id="menu2">
            table des eleves.
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>