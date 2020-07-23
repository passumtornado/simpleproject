$(document).ready(function()){
	function checked(){
		if(document.getElementById('password1').value==document.getElementById(password2)){
			document.getElementById('message').style.color='green';
			document.getElementById('message').innerHTML = 'password match';
			return true;
		}
		else{
			document.getElementById('message').style.color='red';
			document.getElementById('message').innerHTML = 'password do not match';

			return false;
		}
	}
}
var empty = [];
var primes = [1,2,3,5,7,11];
let sayHello = function(){
	console.log('greetings message for my users');
}