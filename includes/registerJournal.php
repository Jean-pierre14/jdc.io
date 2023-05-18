<div class="col-md-12">

    <div class="row">
        <div class="col-md-5">
            <div class="card card-body shadow-sm">
                <h3>Journal du <?php echo date('D, d:m:Y');?></h3>

                <form action="" method="post" id="myFormOne">
                    <input type="hidden" name="action" value="myFormOne" class="form-control">
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
                            <input type="date" name="date" id="date" placeholder="Fait a Gisenyi..."
                                class="form-control" />
                        </div>
                        <div class="form-group col-md-4">
                            <div class="form-group">
                                <label for="teacher">Enseignant</label>
                                <input type="text" name="teacher" id="teacher" placeholder="Enseignant"
                                    class="form-control">
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
                <h4 class="text-center">Journal de classe</h4>
                <form action="" method="post" id="myFormTwo">
                    <input type="hidden" name="action" value="myFormTwo" class="form-control">
                    <div class="form-group">
                        <label for="cours">cours</label>
                        <input type="text" name="cours" id="cours" placeholder="Cours..." class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lecon">Lecon</label>
                        <textarea name="lecon" id="lecon" placeholder="Lecon" class="form-control"></textarea>
                    </div>
                    <div class="form-group" id="Semaine_id">
                        <h4 class="display-5">Chargemet...</h4>
                    </div>
                    <div class="form-group">
                        <label for="heurer">Heure</label>
                        <input type="text" name="heure" id="heure" placeholder="Heure" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Communiquer">Communiquer</label>
                        <textarea name="communiquer" id="Communiquer" placeholder="Communiquer"
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-7">
            <div id="results" class="">
                <h2 class="display-2">Results</h2>
            </div>
        </div>
    </div>
</div>

<script>
function Semaine() {
    let xhr = new XMLHttpRequest();

    xhr.open("GET", "./config/getSemaine.php", true);

    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                document.querySelector("#Semaine_id").innerHTML = data;
            }
        }
    }
    xhr.send();
}

function Init() {
    Semaine();
}

function Cours() {
    return "Cours";
}

Init()

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
                    Init()
                } else {
                    console.log(data);
                }

            }
        }

    }

    let formData = new FormData(myFormOne)
    xhr.send(formData)
}

const myFormTwo = document.querySelector("#myFormTwo")

myFormTwo.onsubmit = (event) => {
    event.preventDefault()
    let xhr = new XMLHttpRequest();

    xhr.open("POST", "./config/indexConfig.php", true)

    xhr.onload = () => {

        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status === 200) {

                let data = xhr.response;

                if (data === 'success') {
                    myFormTwo.reset()
                    Init();
                } else {
                    console.log(data);
                }

            }
        }

    }

    let formData = new FormData(myFormTwo)
    xhr.send(formData)
}
</script>