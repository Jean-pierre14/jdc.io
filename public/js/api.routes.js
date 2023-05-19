function Semaine() {
  let xhr = new XMLHttpRequest();

  xhr.open("GET", "./config/getSemaine.php", true);

  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        document.querySelector(".Semaine_id").innerHTML = data;
      }
    }
  };
  xhr.send();
}

function filter() {
  let xhr = new XMLHttpRequest();

  xhr.open("GET", "./config/getSemaine.php", true);

  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        document.querySelector("#Semaine_id").innerHTML = data;
      }
    }
  };
  xhr.send();
}

function Init() {
  filter();
  Semaine();
}

const ResultsFilter = document.querySelector("#ResultsFilter");

ResultsFilter.onchange = () => {
  let xhr = new XMLHttpRequest();

  xhr.open("POST", "./config/indexConfig.php", true);

  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        document.querySelector("#resultsData").innerHTML = data;
      }
    }
  };

  let formData = new FormData(ResultsFilter);
  xhr.send(formData);
};

Init();

const myFormOne = document.querySelector("#myFormOne");

myFormOne.onsubmit = (event) => {
  event.preventDefault();

  let xhr = new XMLHttpRequest();

  xhr.open("POST", "./config/indexConfig.php", true);

  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        if (data === "success") {
          myFormOne.reset();
          Init();
        } else {
          console.log(data);
        }
      }
    }
  };

  let formData = new FormData(myFormOne);
  xhr.send(formData);
};

const myFormTwo = document.querySelector("#myFormTwo");

myFormTwo.onsubmit = (event) => {
  event.preventDefault();
  let xhr = new XMLHttpRequest();

  xhr.open("POST", "./config/indexConfig.php", true);

  xhr.onload = () => {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        if (data === "success") {
          myFormTwo.reset();
          Init();
        } else {
          console.log(data);
        }
      }
    }
  };

  let formData = new FormData(myFormTwo);
  xhr.send(formData);
};

function Results() {
  let xhr = new XMLHttpRequest();

  xhr.open("POST", "./config/indexConfig.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        document.querySelector("#results").innerHTML = data;
      }
    }
  };
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.send(`action=${action}`);
}

Results();
