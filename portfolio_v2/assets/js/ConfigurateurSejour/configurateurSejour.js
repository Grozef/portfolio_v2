console.log("⛺")

/*Attraper les éléments */

const typeHebergement = document.querySelector("#type");
const imgPreview      = document.querySelector("img.card-img-top");
const optionSejour    = document.querySelector(".custom-control-input");
const boutonOk        = document.querySelector("#submitButton");
const optionKayak     = document.querySelector("#ok-kayak");
const optionDraps     = document.querySelector("#ok-draps");
const tiDej           = document.querySelector("#ouiPetitDej");
const noTiDej         = document.querySelector("#nonPetitDej");
let douloureuse = 0

/* Event Listener sur le type d'hebergement => changer l'image en fonction */

typeHebergement.addEventListener("change",updatePreview);


/* fonction pour changer les images en fonction de l'option séléctionnée dans Type */


function updatePreview(){
    
        if(typeHebergement.value == "tente"){
               imgPreview.src = "img/tente.jpg";

        }
        if(typeHebergement.value == "toile"){
              imgPreview.src = "img/toile.jpg";

        }
        if(typeHebergement.value == "pierre"){
              imgPreview.src = "img/pierre.jpg";

        }
        if( typeHebergement.value == "default") {
            imgPreview.src = "img/default.jpg";

        }
            
}

/*fonction somme pour le calcul des prix en fonction des boutons cochés*/

const prixTotal = document.querySelector("h6");

function somme(){

    let toit = 0
    let loc = 0
    let drap = 0 
    let tiDej = 0

    if(typeHebergement.value == "default"){
        toit = 0
        
    }

    if(typeHebergement.value == "tente"){
        toit = 30
        
    }

    if(typeHebergement.value == "toile"){
        toit = 70
    
    }
    if(typeHebergement.value == "pierre"){
        toit = 180
        
    }
    
    if(ouiPetitDej.checked){
            tiDej = 10
            
    }

    if(optionKayak.checked){
            loc = 30

    }

    if(optionDraps.checked){

            drap = 5
    }


    douloureuse = (toit + loc + drap + tiDej);
    prixTotal.textContent = douloureuse + " "+ "€";
           
}

/*boutonOk.addEventListener("click",somme); => si on ne veut la somme qu'au click "Ok"*/


/* addEventListener pour changer la somme en temps réel / "change" sur les boutons*/ 

typeHebergement.addEventListener("change",somme);
optionKayak.addEventListener("change",somme);
optionDraps.addEventListener("change",somme);
tiDej.addEventListener("change",somme);
noTiDej.addEventListener("change",somme);



