var options = {
	valueNames: ['question', 'answer']
  };
  var faqList = new List('faq-list', options);
  var noItems = $('<li id="Aucun résultat. Choisissez un mot clef."><h3 class="question">No items found</h3></li>');
  
  faqList.on('updated', function(list) {
	if (list.matchingItems.length == 0) {
	  $(list.list).append(noItems);
	} else {
	  noItems.detach();
	}
  });



/* Set the width of the sidebar pour les tarifs to 250px (show it) */
function openNav() {
	document.getElementById("mySidepanel").style.width = "300px";
  document.getElementById("mySidepanel2").style.width = "300px";
  document.getElementById("mySidepanel").style.outline = "1299px solid rgba(0, 0, 0, 0.3)";


  }
  
  /* Set the width of the sidebar to 0 (hide it) */
  function closeNav() {
	document.getElementById("mySidepanel").style.width = "0px";
	document.getElementById("mySidepanel2").style.width = "0px";
  document.getElementById("mySidepanel").style.outline = "0";

  } 