<div class="col-md-12">

    <div class="card card-body shadow-sm">
        <h3>Journal du <?php echo date('D, d:m:Y');?></h3>

        <form action="" method="post" id="myFormOne">
            <?php require_once("./config/indexConfig.php");?>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="jour">Jour</label>
                    <select name="jour" id="jour" class="form-control">
                        <option value="">-- Selection --</option>
                        <option value="Lundi">Lundi</option>
                        <option value="Mardi">Mardi</option>
                        <option value="Mercredi">Mercredi</option>
                        <option value="Jeudi">Jeudi</option>
                        <option value="Vendredi">Vendredi</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" placeholder="Fait a Gisenyi..." class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <div class="form-group">
                        <label for="teacher">Enseignant</label>
                        <input type="text" name="teacher" id="teacher" placeholder="Enseignant" class="form-control">
                    </div>
                </div>
                <div class="form-group col-md-10"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-md">Enregistrer</button>
            </div>
        </form>

    </div>


    <div class="card card-body my-3 shadow-sm">
        <form action="" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cours">cours</label>
                    <input type="text" name="cours" id="cours" placeholder="Cours..." class="form-control">
                </div>
                <div class="form-group col-md-4">
                    <label for="lecon">Lecon</label>
                    <input type="text" name="lecon" id="lecon" placeholder="Lecon" class="form-control" />
                </div>
                <div class="form-group col-md-4">
                    <label for="lecon">Heure</label>
                    <textarea name="lecon" id="lecon" placeholder="Lecon" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label for="Communiquer">Communiquer</label>
                <textarea name="Communiquer" id="Communiquer" placeholder="Communiquer" class="form-control"></textarea>
            </div>
            <div class="form-group col-md-3">
                <button class="btn btn-warning btn-lg">Ajouter</button>
            </div>
            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-success btn-lg btn-block">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

<script>
const myFormOne = document.querySelector("#myFormOne")

myFormOne.onsubmit = (event) => {
    event.preventDefault()

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./config/indexConfig.php", true)
    xhr.onload = () => {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data === 'success') {
                    myFormOne.reset()
                }
            }
        }
    }

    let formData = new FormData(myFormOne)
    xhr.send(formData)
}
</script>