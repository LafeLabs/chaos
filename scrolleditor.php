<!doctype html>
<html lang="en">
    <head>
     <meta charset="utf-8"/>

    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADf+wAA3/sAAAfgAACv9QAAoAUAAK/1AACv9QAAqBUAAK/1AACoFQAAr/UAAKAFAACv9QAAB+AAAN/7AADf+wAA" rel="icon" type="image/x-icon" />
        
<script src = "https://cdnjs.cloudflare.com/ajax/libs/showdown/1.8.6/showdown.js"></script>

            <!--Stop Google:-->
    <META NAME="robots" CONTENT="noindex,nofollow">

<!--       un comment to use math

        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
        <script>
            MathJax.Hub.Config({
                tex2jax: {
                inlineMath: [['$','$'], ['\\(','\\)']],
                processEscapes: true,
                processClass: "mathjax",
                ignoreClass: "no-mathjax"
                }
            });//			MathJax.Hub.Typeset();//tell Mathjax to update the math
        </script>
    -->



    </head>
<body>
<div id = "prototypescroll" style = "display:none">
[home](scrolls/home)    
    
**what does name mean?**    
    
# name

You find the name by going from the road to the place then walking a travelling a number of yards to the thing, and from there to the name.

</div>
    
<textarea id = "maintextarea"></textarea>
<div id = "feedscroll">
    <div id = "modebutton" class = "button">DARK MODE</div>
    <a id = "userlink" href = "user.php?scroll=scrolls/home">
        <img src = "iconsymbols/scroll.svg"/>
    </a>
    <a href = "index.html">
        <img src = "iconsymbols/home.svg"/>
    </a>
    <a href = "scrolldelete.html">
        <img src = "iconsymbols/delete.svg"/>
    </a>

    <table>
        <tr>
            <td>Current Scroll:</td>
            <td id = "currentfilename"></td>
        </tr>
        <tr>
            <td>New Scroll Name:</td>
            <td><input id = "newscrollinput"/></td>
        </tr>
    </table>
</div>
        
<div class = "data" id = "scrolldiv"><?php
    
if(isset($_GET["scroll"])){
    echo $_GET["scroll"];
}

?></div>
<div class = "data" id = "fromdiv"><?php

if(isset($_GET["from"])){
    echo $_GET["from"];
}

?></div>

<script>
currentfile = "";
scroll = "";
rawhtml = "";

document.getElementById("newscrollinput").value = "";

//get readme.md, convert to html and display
var converter = new showdown.Converter();
// for more on options see here:
// https://github.com/showdownjs/showdown/wiki/Showdown-Options
converter.setOption('literalMidWordUnderscores', 'true');
converter.setOption('tables', 'true');

if(document.getElementById("scrolldiv").innerHTML.length > 0 && document.getElementById("fromdiv").innerHTML.length == 0){
    var scrollurl = document.getElementById("scrolldiv").innerHTML;
    if(scrollurl.substring(0,8) == "scrolls/" || scrollurl == "README.md"){
        currentfile = scrollurl;
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scroll = this.responseText;
                document.getElementById("maintextarea").value = scroll;  
                document.getElementById("currentfilename").innerHTML = currentfile;        
                document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
                importprototype();
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
        httpc.send();
    }
    else{
        currentfile = scrollurl;
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scroll = this.responseText;
                document.getElementById("maintextarea").value = scroll;  
                currentfile = "scrolls/remote";
                document.getElementById("currentfilename").innerHTML = currentfile;
                document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
                importprototype();
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
        httpc.send();
    }
}

if(document.getElementById("scrolldiv").innerHTML.length > 0 && document.getElementById("fromdiv").innerHTML.length > 0){
    var scrollurl = document.getElementById("scrolldiv").innerHTML;
    var fromurl = document.getElementById("fromdiv").innerHTML;
    currentfile = scrollurl;
    
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            document.getElementById("maintextarea").value = scroll;  
            document.getElementById("currentfilename").innerHTML = currentfile;
            document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
            
            importprototype();
            data = encodeURIComponent(scroll);
            var httpc = new XMLHttpRequest();
            var url = "filesaver.php";        
            httpc.open("POST", url, true);
            httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
            httpc.send("data="+data+"&filename=" + currentfile);//send text to filesaver.php
            
            
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + fromurl, true);
    httpc.send();
    
}

if(document.getElementById("scrolldiv").innerHTML.length == 0 && document.getElementById("fromdiv").innerHTML.length == 0){
    currentfile = "scrolls/home";
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            document.getElementById("maintextarea").value = scroll;  
            document.getElementById("currentfilename").innerHTML = currentfile;
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
    httpc.send();
}

//get readme.md, convert to html and display




document.getElementById("maintextarea").onkeyup = function() {
    scroll = this.value;
    data = encodeURIComponent(this.value);
    var httpc = new XMLHttpRequest();
    var url = "filesaver.php";        
    httpc.open("POST", url, true);
    httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
    httpc.send("data="+data+"&filename=" + currentfile);//send text to filesaver.php
}

//get all the markdown files in root directory and put them in list of scrolls
scrolls = [];
var httpc7 = new XMLHttpRequest();
    httpc7.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        scrolls = JSON.parse(this.responseText);
        for(var index = scrolls.length - 1;index >= 0;index--) {
            if(scrolls[index].substr(-3) == ".md"){
    //            console.log(scrolls[index]);
                var newscrollbutton = document.createElement("div");
                newscrollbutton.className = "scrollbutton";
                newscrollbutton.innerHTML = scrolls[index];
                document.getElementById("feedscroll").appendChild(newscrollbutton);
                newscrollbutton.onclick = function(){
                    document.getElementById("newscrollinput").value = "";
                    currentfile = this.innerHTML;
                    //console.log(scrollname);
                    document.getElementById("currentfilename").innerHTML = currentfile;       
                    document.getElementById("userlink").href = "user.php?scroll=" + currentfile;
                    var httpc = new XMLHttpRequest();
                    httpc.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            scroll = this.responseText;
                            
                            document.getElementById("maintextarea").value = scroll;  
                            importprototype();

                        }
                    };
                    httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
                    httpc.send();
                }
            }
        }
    }
};

httpc7.open("GET", "dir.php", true);
httpc7.send();


//get all the files in the "scrolls" directory and put them in the list of scroll files
scrolls2 = [];
var httpc8 = new XMLHttpRequest();
httpc8.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
    scrolls2 = JSON.parse(this.responseText);
//    for(var index = scrolls2.length - 1;index >= 0;index--) {
    for(var index = 0;index < scrolls2.length;index++) {    
        var newscrollbutton = document.createElement("div");
        newscrollbutton.className = "scrollbutton";
        newscrollbutton.innerHTML = "scrolls/" + scrolls2[index];
        document.getElementById("feedscroll").appendChild(newscrollbutton);
        newscrollbutton.onclick = function(){
            document.getElementById("newscrollinput").value = "";
            currentfile = this.innerHTML;
            document.getElementById("currentfilename").innerHTML = currentfile;
            document.getElementById("userlink").href = "user.php?scroll=" + currentfile;            
            var httpc = new XMLHttpRequest();
            httpc.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    scroll = this.responseText;
                    document.getElementById("maintextarea").value = scroll; 
                    importprototype();
                }
            };
            httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
            httpc.send();
            }
            
        }
    }
};

httpc8.open("GET", "dir.php?filename=scrolls", true);
httpc8.send();

name = "";
newname = false;
document.getElementById("newscrollinput").onchange = function(){
    name = this.value;
    currentfile = "scrolls/" + this.value;
    document.getElementById("userlink").href = "user.php?scroll=" + currentfile;    
    addscrolllink(this.value);
    document.getElementById("currentfilename").innerHTML = currentfile;       
    var httpc = new XMLHttpRequest();
    httpc.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            scroll = this.responseText;
            document.getElementById("maintextarea").value = scroll; 
            document.getElementById("currentfilename").innerHTML = currentfile;
            importprototype();

            data = encodeURIComponent(scroll);
            var httpc = new XMLHttpRequest();
            var url = "filesaver.php";        
            httpc.open("POST", url, true);
            httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
            httpc.send("data="+data+"&filename=" + currentfile);//send text to filesaver.php
            
        }
    };
    httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
    httpc.send();
}


mode = "dark";

document.getElementById("modebutton").onclick = function(){
    modeswitch();
}

modeswitch();
modeswitch();

function modeswitch(){
    if(mode == "dark"){
        mode = "light";
        document.getElementById("modebutton").innerHTML = "DARK MODE";
        document.getElementById("maintextarea").style.backgroundColor = "#e0e0e0";
        document.getElementById("maintextarea").style.color = "black";
        document.body.style.backgroundColor = "white";
    }
    else{
        mode = "dark";
        document.getElementById("modebutton").innerHTML = "LIGHT MODE";
        document.getElementById("maintextarea").style.backgroundColor = "black";
        document.getElementById("maintextarea").style.color = "#00ff00";        
        document.body.style.backgroundColor = "black";
    }
}




function addscrolllink(newscroll){
    
    var newscrollbutton = document.createElement("div");
    newscrollbutton.className = "scrollbutton";
    newscrollbutton.innerHTML = "scrolls/" + newscroll;
    
    scrollbuttons = document.getElementById("feedscroll").getElementsByClassName("scrollbutton");
    
    document.getElementById("feedscroll").insertBefore(newscrollbutton,scrollbuttons[1]);
    
//    document.getElementById("feedscroll").appendChild(newscrollbutton);
    
    
    newscrollbutton.onclick = function(){
        document.getElementById("newscrollinput").value = "";
        currentfile = this.innerHTML;
        document.getElementById("currentfilename").innerHTML = currentfile;
        document.getElementById("userlink").href = "user.php?scroll=" + currentfile;            
        var httpc = new XMLHttpRequest();
        httpc.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                scroll = this.responseText;
                document.getElementById("maintextarea").value = scroll; 
                importprototype();
            }
        };
        httpc.open("GET", "fileloader.php?filename=" + currentfile, true);
        httpc.send();
        
    }
}

function importprototype(){
    if(document.getElementById("maintextarea").value == ""){
        scroll = document.getElementById("prototypescroll").innerHTML;
        scroll = scroll.replace(/name/g,name);
        document.getElementById("maintextarea").value = scroll; 
    }
}

</script>
<style>

body{
    overflow:hidden;
    background-color:black;
    color:#00ff00;
    font-family:courier;
    
}
.scrollbutton{
    cursor:pointer;
    color:#ff2cb4;
    margin-bottom:0.5em;
}
.data{
    display:none;
}
#newscrollinput{
    background-color:black;
    color:#ff2cb4;
    border-color:#ff2cb4;
    border:solid;
    font-family:courier;
}
#modebutton{
    display:none;
    
    position:absolute;
    right:5px;
    top:1em;
    border:solid;
    border-radius:5px;
}
#maintextarea{
    position:absolute;
    left:0px;
    top:0px;
    width:65%;
    height:100%;
    padding-left:1em;
    padding-top:1em;
    background-color:black;
    color:#00ff00;
    font-family:courier;
    font-size:1.5em;
    overflow:scroll;
}
#feedscroll{
    padding-top:1em;
    position:absolute;
    right:0px;
    bottom:0px;
    top:0px;
    width:30%;
    overflow:scroll;
    font-size:1.5em;
}
.button{
    cursor:pointer;
}
.button:hover{
    background-color:green;
}
.button:active{
    background-color:yellow;
}
@media only screen and (max-width: 1000px) {
    #maintextarea{
        position:absolute;
        left:5%;
        top:30%;
        width:95%;
        bottom:10px;
        padding-left:1em;
        padding-top:1em;
        background-color:black;
        color:#00ff00;
        font-size:1em;
        overflow:scroll;
    }
    #feedscroll{
        position:absolute;
        top:0px;
        left:50px;
        right:0px;
        width:100%;
        bottom:73%;
        overflow:scroll;
        font-size:1.5em;
    }

}
@media only screen and (orientation: portrait) {
    #maintextarea{
        font-size:2em;
    }
}


        </style>
    </body>
</html>