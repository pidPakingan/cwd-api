<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <title>deNoted</title>
    
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <style>
        body{
            background-color: burlywood;
            font-family: 'century gothic';
            margin: 0px;
        }
        #header{
            border-bottom: 3px solid darkslategrey;
            height: 70px;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: coral;
            padding-left: 20px;
            padding-right: 20px;
        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li a{
            text-decoration: none;
            color: black;
            display: inline;
            width: 100px;
            float: right;
            padding: 5px;
            border-spacing: 3px;
            width: 100px;
            
        }
        li a:hover{
            color: white;
            background-color: black;
            cursor: pointer;
        }
        li:active a{
            color: white;
            background-color: black;
            cursor: pointer;
        }
        #content{
            margin: 50px;
        }
        h1{
            font-size: 50px;
        }
        .btn{
            font-size: 40px;
            background-color: burlywood;
            border: none;
            cursor: pointer;
        }
        p{
            font-size: 20px;
            line-height: 40px;
            margin-left: 50px;

        }
        #a{
            margin-top: 100px;
        }
        #n{
            height: 500px;
        }
        #t{
            height: 500px;
        }
        td:empty{
            display: none;
        }
        td{
            height: 200px;
            width: 200px;
            border: 3px solid white;
            word-break: break-all;
        }
        #addNote, #addTodo{
            display: none;
        }
        .insert{
            font-size: 20px;
            background-color: black;
            font-style: 'Century Gothic';
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
    <body>
<!-- HEADER -->
        <header>
            <div id="header">
                <div id="pic">
                    <img src="/public/img/deNoted.png => asset('img/deNoted.png')">
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="#t">ToDo Lists</a></li>
                        <li><a href="#n">Notes</a></li>
                        <li><a href="#a">About</a></li>
                    </ul>
                </div>
            </div>
        </header>
<!-- CONTENT -->
    <div id="content">
    <!-- About -->
        <div id="a">
            <h1 id="about">ABOUT</h1>
                <p> deNoted is a web application that lets you have an organizer </br> wherein you will be able to add notes and ToDo lists </br> for you to see your reminders and things to remember.</p>
        </div>
    <!-- Notes -->
        <div id="n">
            <h1 id="notes">NOTES <button class="btn" onclick="notesPop()"><i class="fa fa-plus-square"></i></button></h1>
            <form id="addNote">
                <p><strong>Date: </strong><input type="date" value="" id="date"></p>
                <p><strong>Title: </strong><input type="text" value="" id="title"></p>
                <p><strong>Description: </strong><input type="text" value="" id="desc"></p>
                <button class="insert" onclick="addNote()">Add</button>
            </form>
            <table>
                <tr id="notesTable">
                <td></td>
                </tr>
            </table>

            <script>
                function notesPop(){
                    var a = document.getElementById("addNote");
                    if (a.style.display === "none"){
                        a.style.display = "block";
                    }
                    else{
                        a.style.display = "none";
                    }
                }
                function addNote(){
                    var txt;
                    var d = document.getElementById("date").value;
                    var t = document.getElementById("title").value;
                    var dsc = document.getElementById("desc").value;
                    if (d == "" || t == "" || dsc == ""){
                        
                    }
                    else{
                        txt = "<strong>Date: </strong>" + d + "</br></br>" + "<strong>Title: </strong>" + t + "</br></br>" + "<strong>Description: </strong>" + dsc;
                        var row = document.getElementById("notesTable");
                        var x = row.insertCell(0);
                        x.innerHTML = txt;
                    }
                    var b = document.getElementById("addNote");
                    var c = document.getElementById("notesTable");
                    b.style.display = "none";
                    c.style.display = "block";
                }
                </script>

        </div>
    <!-- ToDo List -->
        <div id="t">
            <h1 id="todo">TODO LISTS <button class="btn" onclick="todoPop()"><i class="fa fa-plus-square"></i></button></h1>
            <form id="addTodo">
                    <p><strong>Date: </strong><input type="date" value="" id="dte"></p>
                    <p><strong>Title: </strong><input type="text" value="" id="ttl"></p>
                    <p><strong>Description: </strong><input type="text" value="" id="dsc"></p>
                    <button class="insert" onclick="addTodo()">Add</button>
                </form>
            <table>
            <tr id="todoTable">
                <td></td>
            </tr>
        </table>

        <script>
            function todoPop(){
                var b = document.getElementById("addTodo");
                if (b.style.display === "none"){
                    b.style.display = "block";
                }
                else{
                    b.style.display = "none";
                }
            }
            function addTodo(){
                var text;
                var dte = document.getElementById("dte").value;
                var ttl = document.getElementById("ttl").value;
                var desc = document.getElementById("dsc").value;
                if (dte == "" || ttl == "" || desc == ""){
                    
                }
                else{
                    text = "<input type=\"checkbox\"><strong>Date: </strong>" + dte + "</br></br>" + "<strong>Title: </strong>" + ttl + "</br></br>" + "<strong>Description: </strong>" + desc;
                    var rows = document.getElementById("todoTable");
                    var y = rows.insertCell(0);
                    y.innerHTML = text;
                }
                var d = document.getElementById("addTodo");
                var e = document.getElementById("todoTable");
                d.style.display = "none";
            }
            </script>

        </div>
    </div>
    </body>
</html>