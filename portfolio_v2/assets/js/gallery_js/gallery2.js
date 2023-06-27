
let moinsse     = document.getElementById("prevBtn");
let plouche     = document.getElementById("nextBtn");
let playe       = document.getElementById("playBtn");

let delai;

/* Ancienne et première fonction aprés

function apres(){

    numerophoto +=1;
    
    if(numerophoto > 10){
            numerophoto = 1;
    }
    monImage.src = "Sequence"+numerophoto+".jpg";
}
*/

/*

function avant(){
    
    numerophoto -=1  
     if(numerophoto < 1){
        numerophoto = 10
}
    monImage.src = "Sequence"+numerophoto+".jpg"  
}



function change(){

    playe.removeEventListener('click',play);
    playe.addEventListener('click',pause);
}

/* première et ancienne fonction play

function play(){
    
    if(!delai){
    delai=setInterval("apres()",2000)
    change()
    }
}

function egnahc(){

    playe.removeEventListener('click',pause);
    playe.addEventListener('click',play)
}

function pause(){

    clearInterval(delai);
    egnahc()
    delai = null;   
}

 */

// Code Final

plouche.addEventListener("click",apres)
moinsse.addEventListener("click",avant)
playe.addEventListener("click",play)

let imagesTable = [
        "/../portfolio_v2/assets/js/gallery_js/Sequence1.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence2.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence3.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence4.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence5.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence6.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence7.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence8.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence9.jpg",
        "/../portfolio_v2/assets/js/gallery_js/Sequence10.jpg"
]
let numerophoto = 0;
let monImage    = document.getElementById("monImage");
let maxImg      = imagesTable.length ;
let minImg      = imagesTable[0];
monImage.src    = minImg; 


function apres(){

    numerophoto ++;
    
    if(numerophoto >= imagesTable.length){
        numerophoto = 0;
    }
    monImage.src = imagesTable[numerophoto]
    console.log(monImage.src)
}


function play(){
    if(delai==null)
    {
        delai=setInterval(apres,2000);
    }
    else
    {
        clearInterval(delai);
        delai = null;  
    }
    console.log(monImage.src)
}

function avant(){
	numerophoto--
	if(numerophoto < 0){
		numerophoto=imagesTable.length-1
	}
	monImage.src=imagesTable[numerophoto]
    console.log(monImage.src)
}
