//Mobile menu change:
function myFunction3() {
  var x = document.getElementById("mMenu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

//Prevent reposting of forms:
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }