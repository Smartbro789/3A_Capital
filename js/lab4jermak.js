var arrpar = [];
var arrnepar = [];
function division(arr){
	for(i=0; i<arr.length; i++){
		if(i%2 == 0){
			arrpar.push(arr[i]);
		}else{
			arrnepar.push(arr[i]);
		}
	}

}
function task3(){
	var len = document.getElementById('length').value;
	array = arrayRandomizer(len);
	division(array);
	minPar=getMinOfArray(arrpar);
	maxPar=getMaxOfArray(arrpar);
	minNePar=getMinOfArray(arrnepar);
	maxNePar=getMaxOfArray(arrnepar);
	var message1 = "Массив парних: мінімальне значення:" + minPar + " максимальне значення:" + maxPar;
	var message2 = "Массив непарних: мінімальне значення:" + minNePar + " максимальне значення:" + maxNePar;
	document.getElementById("output1").innerHTML = message1;
	document.getElementById("output2").innerHTML = message2;
}
function arrayRandomizer(len){
	var arr = [];
	for ( var i = 0; i < len; i++ ) {
    	arr.push( Math.round( Math.random()*100));
	}
	return arr
}
function getMaxOfArray(numArray) {
  return Math.max.apply(null, numArray);
}
function getMinOfArray(numArray) {
  return Math.min.apply(null, numArray);
}