var x2 = document.getElementsByClassName("gallery_img");
var d2 = document.getElementsByClassName("dots");
var c2 = document.getElementsByClassName("gallery_caption");
var myIndex2 = 0;

function change2(nn)
{
  var index22;
  if(nn!=69)
  window.clearInterval(timer);
  if(myIndex2==0 && nn==99)
  {
    myIndex2=x2.length-1;
    index22=0;
    x2[index22].style.display="none";
    c2[index22].style.display="none";
    d2[index22].className = "dots dot_empty"; 

      x2[myIndex2].style.display="block";
      c2[myIndex2].style.display="block";
      d2[myIndex2].className = "dots dot_filled"; 
  }
  else if(myIndex2==x2.length-1 && (nn==100||nn==69))
  {
    myIndex2=0;
    index22=d2.length-1;
      x2[myIndex2].style.display="block";
      c2[myIndex2].style.display="block";
      d2[myIndex2].className = "dots dot_filled";

    x2[index22].style.display="none";
    c2[index22].style.display="none";
    d2[index22].className = "dots dot_empty";
  }
  else
  {
    if(nn==69||nn==100)
    {
      myIndex2+=1;
      index22=myIndex2-1;
    }
    if(nn==99)
     {
      myIndex2-=1;
      index22=myIndex2+1;
     }
    if(nn!=69&&nn!=99&&nn!=100)
    {
      index22=myIndex2;
      myIndex2=nn;
    }
      x2[myIndex2].style.display="block";
      c2[myIndex2].style.display="block";
      d2[myIndex2].className = "dots dot_filled";

    x2[index22].style.display="none";
    c2[index22].style.display="none";
    d2[index22].className = "dots dot_empty";
  }
  if(nn!=69)
  timer=window.setInterval(function(){change2(69)},5000);
}