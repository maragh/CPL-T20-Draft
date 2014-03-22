var range = document.getElementById("range");
var result = document.getElementById("result");


if(result.innerHTML == ""){
	result.innerHTML = "ROUND 1";
}



range.addEventListener("input", function(){
	result.innerHTML = "ROUND " + range.value;
	setTimeout(function(){window.location.assign("round.php?page="+range.value)},3000);
	
});



