let cerrar= document.getElementsByClassName("cerrar")[0];
let abrir= document.getElementById("AddUsertoEvent");
let modal= document.getElementsByClassName("modal")[0];
let AddUserEv= document.getElementsByClassName("modal_AddUsertoEvent")[0];
let id_eventoModal= document.getElementsByClassName("id_eventoModal")[0];
abrir.addEventListener("click",function(e){
    e.preventDefault();
    AddUserEv.style.opacity="1";
    AddUserEv.style.visibility="visible";
    modal.classList.toggle("modal_cerrar");
    id_eventoModal.value = this.value;
});

cerrar.addEventListener("click", function(){
    modal.classList.toggle("modal_cerrar");
    AddUserEv.style.opacity="0";
    AddUserEv.style.visibility="hidden";
});