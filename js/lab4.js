//ПАНАСЮК О.А.
function arrayB(massive){
	var arrB = [];
	var max = getMaxOfArray(massive);
	for(var i = 0; i<massive.length;i++ ){
		num = max * massive[i];
		arrB.push(num);
	}
return arrB;

}
function arrayA(len){
	var arrA = [];
	for ( var i = 0; i < len; i++ ) {
    	arrA.push( Math.round( Math.random()*100));
	}
	return arrA
}
function task3(){
	var len = document.getElementById('length').value;

	var arrA = arrayA(len);
	var arrB = arrayB(arrA);
	var message1 = "Вхідний Массив: " + arrA;
	var message2 = "Вихідний Массив: " + arrB;
	var message3 = "Відсортований Вихідний Массив: " + reverseInsertionSort(arrB);
	// var resultArrB = reverseInsertionSort(arrB);
	// alert("Вхідний Массив: " + arrA + "  |  Вхідний Массив: " + arrB + "  |  Відсортований Вхідний Массив: " + reverseInsertionSort(arrB));
	document.getElementById("output1").innerHTML = message1;
	document.getElementById("output2").innerHTML = message2;
	document.getElementById("output3").innerHTML = message3;
	// return resultArrB

}
function getMaxOfArray(numArray) {
  return Math.max.apply(null, numArray);
}

function reverseInsertionSort(arr) { 

    for(var i = arr.length-2; i>=0; i--) {

        var value = arr[i];
        var j;

        for(j = i; ((j < arr.length) && (arr[j+1] > value)); j++){ 
            arr[j] = arr[j+1]; 
        } 
        arr[j] = value;
    }
    return arr;
}

//test
// var len = 5;
// task3(len);
// console.log(task3(len)); //[23, 10, 5, 4, 3, 2, 1]