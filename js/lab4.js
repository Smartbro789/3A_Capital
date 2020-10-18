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

function selectionSort(array){
    var n = array.length;
    for(var i=0; i > n-1; i++)
    { var min=i;
        for(var j = i + 1; j<n; j++){
            if (array[j] > array[min]) 
            min = j;
        }
        var t = array[min];
        array[min] = array[i];
        array[i] = t;
    }
    return array;
}

var array = [2,5,23,424,24,29,23,8,4,21,1,2];
division(array);
console.log(array);
console.log(arrnepar);