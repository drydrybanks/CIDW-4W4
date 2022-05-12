(function (){

    console.log('vive le carroussel')
    let boite__carroussel = document.querySelector('.boite__carroussel');
    

    
    let boite__carroussel__ferme = document.querySelector('.boite__carroussel__ferme');
    let boite__carroussel__navigation = document.querySelector('.boite__carroussel__navigation');
    let boite__carroussel__img = document.querySelector('.boite__carroussel__img');
 
    let galerie__img = document.querySelectorAll('.galerie img')
    console.log(galerie__img.length)

    let image = document.createElement('img');
    image.classList.add('boite__carroussel__img')
    boite__carroussel.appendChild(image)

    // Création d'un élément img
    //let elmImg = document.createElement('img');
    // elmImg.setAttribute('src', img.getAttribute('src'))
    // Dans l'article de la boite modale, on ajoute la balsie IMG
   // boite__carroussel__img.appendChild(elmImg);

    let index= 0;

    // On parcours chacune des images (img) de la galerie    
    for(const img of galerie__img) {

        let elmImg = document.createElement('img');
       // console.log(img.getAttribute('src'))
        elmImg.setAttribute('src', img.getAttribute('src'))
        boite__carroussel__img.appendChild(elmImg);

        img.dataset.index = index

        let bouton = document.createElement('input');
        bouton.checked=false
        bouton.type = "radio"
        bouton.class = "bouton"
        bouton.name = "bouton"
       
        // bouton.setAttribute('type', 'radio')
        // bouton.setAttribute('checked', '')
        // bouton.setAttribute('name', 'bouton')
        // bouton.setAttribute('class', 'bouton')
     

        bouton.dataset.index = index++
        // ++index incremente avant de placer la variable index
        // index++ incremente apres avoir placer la variable index
        boite__carroussel__navigation.append(bouton);

        bouton.addEventListener('mousedown', function() {
           // elmImg.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
           boite__carroussel__img.children[0].classList.remove('img--ouvrir')
           boite__carroussel__img.children[1].classList.remove('img--ouvrir')
           boite__carroussel__img.children[2].classList.remove('img--ouvrir')
           boite__carroussel__img.children[this.dataset.index].classList.add('img--ouvrir')
           
        })

        img.addEventListener('mousedown', function() {
            console.log(this.dataset.index)
            boite__carroussel.classList.add('boite__carroussel__ouvrir')
           // boite__carroussel.classList.add('boite__carroussel__img--ouvrir')
          //  console.log(this.getAttribute('src'))

            boite__carroussel__img.children[this.dataset.index].classList.add('img--ouvrir')
            //image.setAttribute('src',this.getAttribute('src'))
            elmImg.setAttribute('src',this.getAttribute('src'))
            
        })
    }
 
   
 
 //  Désactivé pour laisser place à l'image  
 //  let cours__desc__suite = document.querySelectorAll('.cours__desc__suite');
     boite__carroussel__ferme.addEventListener('mousedown', function() {
 
         boite__carroussel.classList.remove('boite__carroussel__ouvrir');
 
     })  
     })()
