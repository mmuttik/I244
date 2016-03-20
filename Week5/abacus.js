window.onload = function() {

  var arrayOfBeads = document.getElementsByClassName("bead"); //Store the beads into variable and array

  for (i = 0; i < arrayOfBeads.length; i++) { //Loop through the array
    arrayOfBeads[i].onclick = moveBeads; //Declare a function
  }

  function moveBeads(move) { //Call the function
    if (this.style.cssFloat == "right") {
      this.style.cssFloat = "left";
    } else {
      this.style.cssFloat = "right";
    }
  }
}
