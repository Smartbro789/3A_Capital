function mission_lab3(){
    var text = document.getElementById("t3");
    text.innerHTML = "придбати практичні навички роботи  верстки сторінок засобами CSS, верстки на основі плаваючих елементів, з’ясувати переваги та недоліки типів макетів веб-сторінок";
}
function frontMaket(){
    var text = document.getElementById("t3");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab3/maket.jpg";
    text.appendChild(pic1);
}
function tableMarkup(){
    var text = document.getElementById("t3");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab3/table.jpg";
    var pic2 = document.createElement("IMG");
    pic2.src = "images/lab3/table2.jpg";
    text.appendChild(pic1);
    text.appendChild(pic2);
}
function floatMarkup(){
    var text = document.getElementById("t3");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab3/page.jpg";
    var pic2 = document.createElement("IMG");
    pic2.src = "images/lab3/pageCSS.jpg";
    var pic3 = document.createElement("IMG");
    pic3.src = "images/lab3/page2.jpg";
    text.appendChild(pic1);
    text.appendChild(pic2);
    text.appendChild(pic3);
}