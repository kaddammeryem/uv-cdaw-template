"use strict";

function modify(e)
{
  //console.log(e.currentTarget.parentNode.children[1].innerHTML);
  document.getElementById("comment").value=e.currentTarget.parentNode.children[1].innerHTML;
  document.getElementById("btn").dataset.user=e.currentTarget.parentNode.id;
  document.forms[0].style="";

}
function verify(e)
{
  let valToCheck = e.currentTarget.elements[0].value;
  if(valToCheck ==''){
    e.preventDefault();
    alert('Invalid comment');
  }
  else{
    e.preventDefault();
    let user= document.getElementById("btn").dataset.user;
    console.log(document.getElementById(user).children[0].innerHTML+"a bien modifié son commentaire");
    let change=document.getElementById("comment").value;
    document.getElementById(user).children[1].innerHTML=change;
    document.forms[0].style="visibility:hidden";
    //dataset
    
  }

}

function deleter(e)
{
    e.currentTarget.parentNode.remove();
    //e.type +" on remove for "+ e.currentTarget.parentNode.id+" !"
}

document.getElementById("addNew").addEventListener("click", function(e){
    let users=document.getElementById("users");
    let i=users.lastElementChild.id.slice(-1);
    i=parseInt(i)+1;
    let id="user"+i.toString();
    let user=' <div id='+id+'>'+' <h4>Gorō Majima</h4>'+
    '<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'+
    '<button class="modify">Modify Comment</button><button class="remove">Remove Comment</button></div>';
   users.insertAdjacentHTML('beforeend', user);
   console.log(users.lastElementChild)
})

let modifiers = document.getElementsByClassName("modify");
Array.from(modifiers).forEach(m => m.addEventListener("click",modify));
let remover = document.getElementsByClassName("remove");
Array.from(remover).forEach(m => m.addEventListener("click",deleter));
document.forms[0].addEventListener("submit", verify);