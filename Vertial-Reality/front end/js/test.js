// JavaScript source code













function myfunction1() {
    x = document.getElementById("p1");
    if (x.innerHTML == "JavaScript") {
        x.innerHTML = "Hello!";
    }
    else {
        x.innerHTML = "JavaScript"
    }

}
function changeImg1() {
    Element = document.getElementById('img1')
    if (Element.src.match("102187")) {
        Element.src = "../image/101695.jpg";
    }
    else {
        Element.src = "../image/102187.jpg";
    }
}
function myfunction2() {
    x = document.getElementById("p2");
    x.style.color = "#ff0000";
}
function myfunction3() {
    var x = document.getElementById("in1").value;
    if (x == "" || isNaN(x)) {
        alert("Not Numberic");
    }
}
