

/* Set the width of the sidebar pour les tarifs to 250px (show it) */
function openNav2() {
  document.getElementById("mySidepanel2").style.width = "300px";
  document.getElementById("wrapper").style.opacity = "0.1";  
}

  function openNav() {
	document.getElementById("mySidepanel").style.width = "300px";
  document.getElementById("wrapper").style.opacity = "0.1";  
  }
  
  /* Set the width of the sidebar to 0 (hide it) */
  function closeNav() {
	document.getElementById("mySidepanel").style.width = "0px";
	document.getElementById("mySidepanel2").style.width = "0px";
  document.getElementById("wrapper").style.opacity = "1";

  } 