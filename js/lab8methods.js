function mission_lab8(){
    var text = document.getElementById("t8");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab8/meta.png";
    text.appendChild(pic1);
}
function l8info(){
    var text = document.getElementById("t8");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab8/info.png";
    text.appendChild(pic1);
}





function l8data(){
    var text = document.getElementById("t8");
    text.innerHTML = "База данних уже є нормалізованою до 3НФ.";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab8/data.jpg";
    text.appendChild(pic1);
}

function l8sql(){
    var text = document.getElementById("t8");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    pic1.src = "images/lab8/sql.png";
    text.appendChild(pic1);
    var pic2 = document.createElement("IMG");
    pic2.src = "images/lab8/sql2.png";
    text.appendChild(pic2);
    var pic3 = document.createElement("IMG");
    pic3.src = "images/lab8/sql3.png";
    text.appendChild(pic3);
}
function l8login(){
    var text = document.getElementById("t8");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    var pic2 = document.createElement("IMG");
    pic1.src = "images/lab8/login.png";
    pic2.src = "images/lab8/login2.png";
    text.appendChild(pic1);
    text.appendChild(pic2);
}

function l8lang(){
    var text = document.getElementById("t8");
    text.innerHTML = "";
    var pic1 = document.createElement("IMG");
    var pic2 = document.createElement("IMG");
    var pic3 = document.createElement("IMG");
    var pic4 = document.createElement("IMG");
    var pic5 = document.createElement("IMG");
    var pic6 = document.createElement("IMG");
    var pic7 = document.createElement("IMG");
    pic1.src = "images/lab8/lang.png";
    pic2.src = "images/lab8/lang2.png";
    pic3.src = "images/lab8/lang3.png";
    pic4.src = "images/lab8/lang4.png";
    pic5.src = "images/lab8/lang5.png";
    pic6.src = "images/lab8/lang6.png";
    pic7.src = "images/lab8/lang7.png";
    text.appendChild(pic1);
    text.appendChild(pic2);
    text.appendChild(pic3);
    text.appendChild(pic4);
    text.appendChild(pic5);
    text.appendChild(pic6);
    text.appendChild(pic7);
}

function conclusion_l8(){
var text = document.getElementById("t8");
    text.innerHTML = "Придбали практичні навички роботи взаємодії WEB- застосувань з СКБД MySQL церез інтерфейс PHPMyAdmin, використання сесій і cookies  в сценаріях авторизації, розробки сценаріїв обробки даних з файлів. Розробили остаточну структуру бази данних. Написали скрипти php для внесення данних до БД, виведення даних на екран та пошуку данних в бд. Виконали авторизацію. На головній сторінці створили форму для логіну. Реалізували прийом даних цієї форми і їх запис у сесію. На головній сторінці додали іконки вибору мови. Реалізували обробник GET-запиту, записали обрану користувачем мову в кукі-змінну з часом життя 6 місяців.";
}