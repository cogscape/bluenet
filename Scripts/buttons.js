//	Javascript for index buttons
//
//	Version 0.0.4-alpha (05:00 08.06.20188)
//

var w;
var statusElement;
var caller;

function action(caller){
// Main function called.
	w = new Worker('Scripts/worker.js');

	// Pass corresponding action to worker
	if(caller.id == 'column-1-3'){
	//Action 1 identified...
		statusElement = 'status-1-1';
		w.postMessage('action-1')
	}
	else if(caller.id == 'column-2-3'){
		statusElement = 'status-1-2';
		w.postMessage('action-2');
	}
	else if(caller.id == 'column-3-3'){
		statusElement = 'status-1-3';
		w.postMessage('action-3');
	}
	else{
	//No action identified...
		w.postMessage('ERR');
	}

	//handler for POST from child threads (workers)
	w.onmessage = function(e){
			//Main thread received '+e.data+' from worker.
		// if retun = ok, then check adequate cookie and update
		// the adequate field with its value (cookie contains 
		// the response code of php script
		console.log(e.data);
	}
}

// Listener for responses from php script
var es = new EventSource('Scripts/actions.php');

es.addEventListener(
	'message', 
	function(e) {
		console.log('smth');
  		console.log(e.data);
	}, 
	false
);
es.addEventListener(
	'open', 
	function(e) {
  		// Connection was opened.
  		console.log('Connection open.');
	}, 
	false
);
es.addEventListener(
	'error', 
	function(e) {
  		if (e.readyState == EventSource.CLOSED) {
    		// Connection was closed.
    		console.log('Connection closed');
 	 	}
	}, 
	false
);