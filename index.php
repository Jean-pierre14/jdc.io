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
        <div class="tab-pane container active" id="home">...</div>
        <div class="tab-pane container fade" id="menu1">...</div>
        <div class="tab-pane container fade" id="menu2">...</div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-body shadow-sm">
                    <h3>Journal du <?php echo date('D, d:m:Y');?></h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="heure">Heures</label>
                            <input type="text" name="heures" id="heure" placeholder="Heure..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cours">cours</label>
                            <input type="text" name="cours" id="cours" placeholder="Cours..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lecon">Lecon</label>
                            <textarea name="lecon" id="lecon" placeholder="Lecon" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Communiquer">Communiquer</label>
                            <textarea name="Communiquer" id="Communiquer" placeholder="Communiquer"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-md">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/main.js"></script>
</body>

</html>