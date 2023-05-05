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
                <textarea name="Communiquer" id="Communiquer" placeholder="Communiquer" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-md">Enregistrer</button>
            </div>
        </form>
    </div>
</div>