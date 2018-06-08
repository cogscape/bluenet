//	Javascript for index button workers
//
//	Version 0.0.4-alpha (05:00 08.06.2018)
//

// Handler for incomming POST (worker called from parent)
onmessage = function(e){	// Main worker function
//Worker called with e.data (requested action)

	// Initiate AJAX request to script with e.data
	// Create new HTTP Request object
	var xhr = new XMLHttpRequest();
	xhr.open("POST", "actions.php", true);
	xhr.send(e.data);

	/*
	WARNING - workers cannot directly access the DOM and
	the XhttpRequest methods onreadystatechange, onload
	*/

	close();	// Close worker
}