var modal = document.getElementById("rules_modal");
var btn = document.getElementById("rules");
var span = document.getElementsByClassName("close_modal_window")[0];
var content = document.getElementsByClassName("rules_modal_content")[0];

btn.onclick = function () {
  modal.style.display = "block";
  modal.style.backgroundColor = "rgba(0, 0, 0, 0.6)";
  // content.style.opacity= "1";
}

span.onclick = function () {
  modal.style.display = "none";
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}