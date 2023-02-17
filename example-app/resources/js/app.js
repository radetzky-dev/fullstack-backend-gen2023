import "./bootstrap";
import "../css/app.css";
import "../../node_modules/bootstrap/dist/css/bootstrap.min.css";
import "../../node_modules/bootstrap/dist/js/bootstrap.min.js";

//modo corretto di dichiarare funzioni con Vite
window.ciao = function () {
    console.log("Bottone premuto");
};

window.areyousure = function () {
  return confirm("Confermi la cancellazione?")
};
