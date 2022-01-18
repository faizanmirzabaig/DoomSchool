let sidenav = document.getElementsByClassName('links');
let mainheader = document.getElementById('main-header')
mainheader.style.visibility = "hidden";

function closebtn() {
if (mainheader.style.visibility == "hidden") {
mainheader.style.visibility = "visible";
mainheader.style.clipPath = "circle(100%)";
} else {
mainheader.style.visibility = "hidden";
mainheader.style.clipPath =
  "circle(25px at calc(100% - 55px) calc(0% + 50px))";
}
}