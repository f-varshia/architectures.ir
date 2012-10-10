$(function(){
var tabs = document.getElementById('tabs').getElementsByTagName('div');
for(var i = 0;i<tabs.length;i++){ 
  tabs.item(i).onmouseover=function(){      
    tabs.item(i).className="active";    
    for(var i = 0;i<tabs.length;i++){     
      tabs.item(i).style.width='105px';   
    }   this.style.width='423px'; 
  }
}
  document.getElementById('tabs').onmouseout=function(){  
    for(var i = 0;i<tabs.length;i++){   
      tabs.item(i).style.width='158px'; 
    }}
})


