const stars = document.getElementsByClassName('star')
const output = document.getElementById('output')
const input = document.getElementById('input')


function rate(n){
	remove()
	for (let index = 0; index < n; index++) {
		if(n == 1) cls = "one"
		else if(n == 2) cls = "two"
		else if(n == 3) cls = "three"
		else if(n == 4) cls = "four"
		else if(n == 5) cls = "five"
		stars[index].className = 'star ' + cls
		
	}
	output.innerHTML = `<span>Rating:</span> ${n}`
	input.value = n
	console.log(input.value)
}

function remove(){
	let i = 0
	while (i < 5){
		stars[i].className = "star"; 
		i++;
	}
}