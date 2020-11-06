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

function selectionSort(arr){
    var n = arr.length;
    for(var i=0; i < n-1; i++)
    { var min=i;
        for(var j = i + 1; j<n; j++){
            if (arr[j] > arr[min]) 
            min = j;
        }
        var t = arr[min];
        arr[min] = arr[i];
        arr[i] = t;
    }
    return arr;
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
	var message3 = "Початковий масив: " + array;
	var message4 = "Відсортований масив: " + selectionSort(array);
	document.getElementById("output1").innerHTML = message1;
	document.getElementById("output2").innerHTML = message2;
	document.getElementById("output3").innerHTML = message3;
	document.getElementById("output4").innerHTML = message4;
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