let bereken = document.getElementById('bereken');
let lengte = document.getElementById('lengte');
let gewicht = document.getElementById('gewicht');
let resultaat = document.getElementById('resultaat');
let input = document.getElementById('input');
let bmi_tekst = document.getElementById('bmi_tekst');

bereken.addEventListener('click', ajax);

function ajax() {
  let xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      resultaat.innerHTML = this.responseText;
    }
  };

  let httpString = "bmi.php?gewicht=" + gewicht.value + "&lengte=" + lengte.value;

  console.log(httpString);

  xmlhttp.open("GET", httpString, true);
  xmlhttp.send();

  function clearResult() {

  }
}