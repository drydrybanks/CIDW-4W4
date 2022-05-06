(function (){

    console.log('vive le carroussel')
    let boite__carroussel = document.querySelector('.boite__carroussel');
    let boite__carroussel__ferme = document.querySelector('.boite__carroussel__ferme');
    let boite__carroussel__navigation = document.querySelector('.boite__carroussel__navigation');
 
    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length)

    // Création d'un élément img
    let elmImg = document.createElement('img');
    // Dans l'article de la boite modale, on ajoute la balsie IMG
    boite__carroussel.appendChild(elmImg);

    // On parcours chacune des images (img) de la galerie    
    for(const img of galerie__img) {

        let bouton = document.createElement('button');
        boite__carroussel__navigation.append(bouton);

        img.addEventListener('mousedown', function() {
            console.log(this.tagName)
            boite__carroussel.classList.add('boite__carroussel__ouvrir')
            console.log(this.getAttribute('src'))
            elmImg.setAttribute('src',this.getAttribute('src'))
            
        })
    }
 
   
 
 //  Désactivé pour laisser place à l'image  
 //  let cours__desc__suite = document.querySelectorAll('.cours__desc__suite');
 
   
 
 
     boite__carroussel__ferme.addEventListener('mousedown', function() {
 
 
         boite__carroussel.classList.remove('boite__carroussel__ouvrir');
 
     })
     
     })()
