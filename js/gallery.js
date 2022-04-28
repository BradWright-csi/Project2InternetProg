let counter = 2;
document.getElementById("radio1").checked = true;
let stopIt = 0;
var myTime = setInterval(function () {
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 5) {
    counter = 1;
  }
}, 5000);

/* Stops auto navigating through slides */
function stopAuto() {
  clearInterval(myTime);
  console.log("STOPED");
}
