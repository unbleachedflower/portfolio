//SHOW MESSAGE

showAllGames();

function showAllGames(){
    var allGames = document.getElementById("allGames");
    allGames.innerHTML = '';

	var xhr = new XMLHttpRequest();
	
  xhr.onreadystatechange = function (e) {
		console.log(xhr.readyState);
		if (xhr.readyState === 4) { //stage 4 READY 
			//receive the response and convert to JavaScript Object 
			var responseJSON = JSON.parse(xhr.responseText);

			for (var i = 0; i < responseJSON.length; i++) {
				var rowDiv = document.createElement("div");
				rowDiv.setAttribute("class", "display");
				var rowDivText = document.createTextNode(responseJSON[i]["name"]);
				var rowDivText1 = document.createTextNode(responseJSON[i]["email"]);
				var rowDivText2 = document.createTextNode(responseJSON[i]["message"]);
				rowDiv.appendChild(rowDivText);
				rowDiv.appendChild(rowDivText1);
				rowDiv.appendChild(rowDivText2);
				allGames.appendChild(rowDiv);
			}
		}
	};
    
	xhr.open("GET", "js/show-ajax.php", true); //true means it is asynchronous // Send variables through the url
	xhr.send();
};



//SAVE NEW MESSAGE

var saveGameBtn = document.getElementById("saveGame");
saveGameBtn.addEventListener("click", saveGame, false);

function saveGame(e){
	//takes all variables and sends it to the php script
    var xhr = new XMLHttpRequest();
    
	
	xhr.onreadystatechange = function(e){     
		console.log(xhr.readyState);     
		if(xhr.readyState === 4){        
			console.log(xhr.responseText);// modify or populate html elements based on response.
			var responseJSON = JSON.parse(xhr.responseText);
			console.log(responseJSON);
			console.log(responseJSON.success);

			if(responseJSON.success == "true"){
                document.getElementById("confirmation").innerHTML = "Message sent!";
                // showAllGames();
			}
		}
  };
  
  

	//alternative targeting
	var name = document.forms[0]["name"];
	var email = document.forms[0]["email"];
  var message = document.forms[0]["message"];
  
	//console.log(nom.value, esrb.value, rating.value);

	xhr.open("POST", "js/save-ajax.php", true); //true means it is asynchronous // Send variables through the url
	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
  xhr.send("name="+name.value+"&email="+email.value+"&message="+message.value);
  
  console.log("passed");
};

