window.onload = function () {
    showDataBases();
    var clientHeight = document.documentElement.clientHeight;
    document.getElementById("server").style.height = clientHeight + "px";
    document.getElementById("table").style.height = clientHeight + "px";
    document.getElementById("main").oncontextmenu = function (e) {
        e.preventDefault();
    };
    document.getElementById("table").oncontextmenu = function (e) {
        e.preventDefault();
    };
};
function editDatabase() {

}
function showDataBases() {
    var url = location.href;
    var str = url.split('?')[1];
    submitForm('action/showDatabases.php', str, function () {
        document.getElementById("server").innerHTML = this;
        showTables();
    });
}
function showTables() {
    var database = document.getElementsByName("database");
    for (var i = 0; i <= database.length - 1; i++) {
        database[i].onmousedown = function (e) {
            if (e.button === 0) {
                if (document.getElementById("right_c")) {
                    document.body.removeChild(document.getElementById("right_c"));
                }
                var data = this.innerHTML;
                if (document.getElementById(data).style.display === "block") {
                    document.getElementById(data).style.display = "none";
                } else {
                    for (var i = 0; i <= database.length - 1; i++) {
                        document.getElementById((database[i].innerHTML)).innerHTML = "";
                        document.getElementById((database[i].innerHTML)).style.display = "none";
                    }
                    document.getElementById(data).style.display = "block";
                }
                var str = "database=" + this.innerHTML;
                submitForm('action/showTables.php', str, function () {
                    document.getElementById(data).innerHTML = this;
                    showColumns();
                });
            } else if (e.button === 1) {
                if (document.getElementById("right_c")) {
                    document.body.removeChild(document.getElementById("right_c"));
                }
                alert(this.innerHTML);
            } else if (e.button === 2) {
                if (document.getElementById("right_c")) {
                    document.body.removeChild(document.getElementById("right_c"));
                }
                databaseRight(e, this.innerHTML);
            }
        };
    }
}
function databaseRight(event, name) {
    var right_c = document.createElement("div");
    right_c.id = "right_c";
    var e = event || window.event;
    document.body.appendChild(right_c);
    var rightcli = document.getElementById("right_c");
    rightcli.style.marginLeft = e.clientX + 'px';
    rightcli.style.marginTop = e.clientY + 'px';
    rightcli.oncontextmenu = function (e) {
        e.preventDefault();
    };
    var ul = document.createElement('ul');
    var li = document.createElement('li');
    var span = document.createElement('span');
    span.className = "fa fa-close";
    span.innerHTML = "重命名";
    li.appendChild(span);
    li.onclick = function () {
        document.body.removeChild(right_c);
        var alert = document.createElement("div");
        alert.id="alert";
        document.body.appendChild(alert);
    };
    ul.appendChild(li);
    var li = document.createElement('li');
    var span = document.createElement('span');
    span.className = "fa fa-close";
    span.innerHTML = "删除";
    li.appendChild(span);
    li.onclick = function () {
        document.body.removeChild(right_c);
        alert("确定要删除" + name + "吗？");
    };
    ul.appendChild(li);
    right_c.appendChild(ul);
}

function showColumns() {
    var table = document.getElementsByName("table");
    for (var i = 0; i <= table.length - 1; i++) {
        table[i].onclick = function () {
            var tab = this.innerHTML;
            var data = this.parentNode.previousElementSibling.innerHTML;
            var str = "database=" + data + "&table=" + tab;
            submitForm('action/showColumns.php', str, function () {
                document.getElementById("table").innerHTML = this;
                var td = document.getElementsByTagName("td");
                for (var i = 0; i <= td.length - 1; i++) {
                    td[i].onmousedown = function (e) {
                        if (e.button === 0) {
                            console.log(0);
                        } else if (e.button === 1) {
                            console.log(1);
                        } else {
                            console.log(2);
                        }
                    };
                    td[i].ondblclick = function () {
                        for (var i = 0; i <= td.length - 1; i++) {
                            if (td[i].children.length === 0) {
                            }
                            ;
                        }
                        if (this.children.length === 0) {
                            var tdhtml = this.innerHTML;
                            this.innerHTML = "<textarea style='width:100%;resize:vertical;maxlength:9999;'>" + tdhtml + "</textarea>";
                        } else if (this.children.length === 1 && this.children[0].tagName === "TEXTAREA") {
                            var chhtml = this.children[0].value;
                            this.innerHTML = chhtml;
                        }
                    };
                }
                ;
            });
        };

    }
}
function submitForm(url, para, callback) {
//    console.log(url);
//    console.log(para);

    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function ()
    {
        if (xmlhttp.readyState === 4 && xmlhttp.status === 200)
        {
            callback.call(xmlhttp.responseText);
        }
    };
    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(para);
}

function getBrowser() {

}