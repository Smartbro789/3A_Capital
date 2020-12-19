function mission_lab6(){
    var text = document.getElementById("t6");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab6/meta.jpg";
    text.appendChild(pic1);
}
function pageView(){
    var text = document.getElementById("t6");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    var pic2 = document.createElement("IMG");
    var pic3 = document.createElement("IMG");
    pic1.src = "images/lab6/page.png";
    pic2.src = "images/lab6/code.jpg";
    pic3.src = "images/lab6/code2.jpg";
    text.appendChild(pic1);
    text.appendChild(pic2);
    text.appendChild(pic3);
}
function phpView(){
    var text = document.getElementById("t6");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    var pic2 = document.createElement("IMG");
    var pic3 = document.createElement("IMG");
    var pic4 = document.createElement("IMG");
    pic1.src = "images/lab6/php.png";
    pic2.src = "images/lab6/php1.jpg";
    pic3.src = "images/lab6/php2.jpg";
    pic4.src = "images/lab6/php3.jpg";
    text.appendChild(pic1);
    text.appendChild(pic2);
    text.appendChild(pic3);
    text.appendChild(pic4);
}

function localDomen(){
    var text = document.getElementById("t6");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    var pic2 = document.createElement("IMG");
    var pic3 = document.createElement("IMG");
    var pic4 = document.createElement("IMG");
    pic1.src = "images/lab6/setup1.jpg";
    pic2.src = "images/lab6/setup2.jpg";
    pic3.src = "images/lab6/setup3.jpg";
    pic4.src = "images/lab6/setup4.jpg";
    text.appendChild(pic1);
    text.appendChild(pic2);
    text.appendChild(pic3);
    text.appendChild(pic4);
}
function conclusion_l6(){
var text = document.getElementById("t6");
    text.innerHTML = "Висновок: в цій роботі ми придбали практичні навички встановлення та конфігурування програмного продукту OpenServer, який містить web-сервер Apache, PHP та СУБД MySQL. Вдосконалили навички роботи з JQuery. Створили спінер, тултіп і випадаючий список на власному сайті. Навчились запускати сайт через web-сервер.";
}