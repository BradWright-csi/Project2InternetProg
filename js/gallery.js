function upDate(previewPic)
{
 
   old=document.getElementById("image").innerHTML
   document.getElementById("image").innerHTML=previewPic.alt
   document.getElementById("image").style.background="url("+previewPic.src+")" ;
}

function unDo()
{
   document.getElementById("image").innerHTML=old
   document.getElementById("image").style.background="#8e68ff";    
}
