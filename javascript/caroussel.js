(function (){

    console.log('vive javascript')
    let boite__modale = document.querySelector('.boite__modale');
    let boite__modale__ferme = document.querySelector('.boite__modale__ferme');
    let boite__modale__texte = document.querySelector('.boite__modale__texte');
 
    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length)

    // Création d'un élément img
    let elmImg = document.createElement('img');
    // Dans l'article de la boite modale, on ajoute la balsie IMG
    boite__modale__texte.appendChild(elmImg);

    
    for(const img of galerie__img) {
        img.addEventListener('mousedown', function() {
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir')
            console.log(this.getAttribute('src'))
            elmImg.setAttribute('src',this.getAttribute('src'))
            
        })
    }
 
   
 
 //  Désactivé pour laisser place à l'image  
 //  let cours__desc__suite = document.querySelectorAll('.cours__desc__suite');
 
   
 
 
     boite__modale__ferme.addEventListener('mousedown', function() {
 
 
         boite__modale.classList.remove('boite__modale__ouvrir');
 
     })
     
     })()
