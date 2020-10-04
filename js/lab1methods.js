function mission_lab1(){
        document.getElementById("t1").innerHTML = "придбати практичні навички роботи  з html-документом, таблицями,формами, зображеннями, посиланнями";
    }
    function description(){
        var text = document.getElementById("t1");
        text.innerHTML = "";
        var pic1 = document.createElement("IMG");
        var pic2 = document.createElement("IMG");
        var pic3 = document.createElement("IMG");
        var pic4 = document.createElement("IMG");
        var pic5 = document.createElement("IMG");
        var pic6 = document.createElement("IMG");
        var pic7 = document.createElement("IMG");
        var pic8 = document.createElement("IMG");
        var pic9 = document.createElement("IMG");
        pic1.src = "images/description/Screenshot_1.jpg";
        pic2.src = "images/mission.jpg";
        pic3.src = "images/description/Screenshot_2.jpg";
        pic4.src = "images/description/Screenshot_3.jpg";
        pic5.src = "images/description/Screenshot_4.jpg";
        pic6.src = "images/description/Screenshot_5.jpg";
        pic7.src = "images/description/Screenshot_6.jpg";
        pic8.src = "images/description/Screenshot_7.jpg";
        pic9.src = "images/Diagram.jpg";
        text.appendChild(pic1);
        text.appendChild(pic2);
        text.appendChild(pic3);
        text.appendChild(pic4);
        text.appendChild(pic5);
        text.appendChild(pic6);
        text.appendChild(pic7);
        text.appendChild(pic8);
        text.appendChild(pic9);
    }
    function structure(){
        var text = document.getElementById("t1");
        text.innerHTML = "";
        var pic1 = document.createElement("IMG");
        var pic2 = document.createElement("IMG");
        pic1.src = "images/structure/Screenshot_1.jpg";
        pic2.src = "images/structure/Screenshot_2.jpg";
        text.appendChild(pic1);
        text.appendChild(pic2);
    }
    function table(){
        var text = document.getElementById("t1");
        text.innerHTML = "";
        var pic1 = document.createElement("IMG");
        pic1.src = "images/table.jpg";
        text.appendChild(pic1);
    }
    function formCode(){
        var text = document.getElementById("t1");
        text.innerHTML = "";
        var pic1 = document.createElement("IMG");
        pic1.src = "images/form.jpg";
        text.appendChild(pic1);
    }
    function picture(){
        var text = document.getElementById("t1");
        text.innerHTML = "";
        var pic1 = document.createElement("IMG");
        pic1.src = "images/picture.jpg";
        text.appendChild(pic1);
    }
    function mission(){
        var text = document.getElementById("t1");
        text.innerHTML = "Програма має надавати можливість користувачам обирати на інвестувати свої активи у відповідні інвестиційні плани. <br>Користувачі також можуть закривати плани для фіксації прибутків. <br>Адміністратор сервісу має можливість стоврювати, видаляти та редагувати інвестиційні плани через спеціальну адмін-панель. ";
    }