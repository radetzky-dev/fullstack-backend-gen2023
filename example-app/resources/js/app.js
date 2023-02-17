import "./bootstrap";
import "../css/app.css";

//modo corretto di dichiarare funzioni con Vite
window.ciao = function () {
    console.log("Bottone premuto");
};

window.areyousure = function () {
  return confirm("Confermi la cancellazione?")
};
