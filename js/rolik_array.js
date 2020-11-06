function createArray(len) {    //функція для заповнення масиву
	var array = [];
	for (var i = 0; i < len; i++) {
    	array.push(Math.round(Math.random()*100));
	}
	return array
}

var arr_pair = [];
var arr_unpair = [];

function getPairUnpairArray(array) {     //функція для стоврення парного та непарного масивів 
	for(i = 0; i < array.length; i++) {
		if(i % 2 == 0){
			arr_pair.push(array[i]);
		} else {
			arr_unpair.push(array[i]);
		}
	}
}

function getMaxElem(numArray) {           //функція для пошуку максимального значення
    return Math.max.apply(null, numArray);
}

function getMinElem(numArray) {          //функція для пошуку мінімального значення
    return Math.min.apply(null, numArray);
}

function selectionSort(array){     //функція сортування
    var n = array.length;
    for(var i = 0; i < n-1; i++)
    { var min = i;
        for(var j = i + 1; j < n; j++){
            if (array[j] > array[min]) 
            min = j;
        }
        var t = array[min];
        array[min] = array[i];
        array[i] = t;
    }
    return array;
}

function main(){
    var length = document.getElementById('length').value;
    array = createArray(length);
    getPairUnpairArray(array);
    
	minPair = getMinElem(arr_pair);
    maxPair = getMaxElem(arr_pair);
    
	minUnpair = getMinElem(arr_unpair);
    maxUnpair = getMaxElem(arr_unpair);
    
    var result1 = "Створений масив: " + array;
    var result2 = "Відсортований масив: " + selectionSort(array);
    var result3 = "Максимальне серед парних: " + maxPair;
    var result4 = "Мінімальне серед парних: " + minPair;
	var result5 = "Максимальне серед непарниx: " + maxUnpair;
    var result6 = "Мінімальне серед непарних: " + minUnpair;
    
	document.getElementById("result1").innerHTML = result1;
	document.getElementById("result2").innerHTML = result2;
	document.getElementById("result3").innerHTML = result3;
    document.getElementById("result4").innerHTML = result4;
    document.getElementById("result5").innerHTML = result5;
    document.getElementById("result6").innerHTML = result6;
}