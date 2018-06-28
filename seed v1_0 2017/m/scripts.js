function openNav() {
    document.getElementById("sidenav1").style.width = "80%";
    document.getElementById("sidenav2").style.width = "20%";
    document.getElementById("sidenav2").style.left = "80%";
}

function closeNav() {
    document.getElementById("sidenav1").style.width = "0";
    document.getElementById("sidenav2").style.width = "0";
    document.getElementById("sidenav2").style.left = "0";
}










var x = document.getElementsByClassName("ss_image");
var d = document.getElementsByClassName("dots");
var c = document.getElementsByClassName("cap");
var myIndex = 0;
show();

function change(n)
    {
  myIndex=n;
   }

function move(a)
{
  if(myIndex==1 && a==-1)
  myIndex=x.length-1;
    else if(myIndex=x.length && a==1)
    myIndex=0;
    else if(a==-1)
  myIndex--;
  else
    var hi=10;
}
function show() {
    var i;
    for (i = 0; i < x.length; i++) 
    {
       x[i].style.display="none";
       x[i].style.width = "0";
       x[i].style.height = "0";
       x[i].style.left = "0";
       c[i].style.display="none";
       d[i].innerHTML = "&#9898;";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    {
      x[myIndex-1].style.display="block";
      x[myIndex-1].style.width = "100%";
      x[myIndex-1].style.height = "100%";
      x[myIndex-1].style.left = "100%";
      c[myIndex-1].style.display="block";
      d[myIndex-1].innerHTML = "&#9899;";
    }  
    setTimeout(show, 3500); // Change image every 3.5 seconds
}












var myVar;

function spinfunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("container1").style.display = "none"
  document.getElementById("container1").style.width = "0";
  document.getElementById("container2").style.display = "block";
}