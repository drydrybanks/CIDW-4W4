(function (){


   let boite__modale = document.querySelector('.boite__modale');
   let boite__modale__ferme = document.querySelector('.boite__modale__ferme');
   let boite__modale__texte = document.querySelector('.boite__modale__texte');
   let cours__desc__suite = document.querySelectorAll('.cours__desc__suite');

   let cours__desc__complet = document.getElementsByClassName('cours__desc__complet');
    
    console.log('cours__desc__suite = ' + cours__desc__suite.length);


    
    for(const bouton of cours__desc__suite){
    
    bouton.addEventListener('mousedown' , function(){ 
    console.log(this.tagName);

    boite__modale.classList.add('boite__modale__ouvrir');

    console.log(this.parentNode.parentNode.innerHTML);

   // console.log(boite__modale.classList);

   boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML;

    
    


    
    })
    
    }



    boite__modale__ferme.addEventListener('mousedown', function() {


        boite__modale.classList.remove('boite__modale__ouvrir');

    })
    
    })()