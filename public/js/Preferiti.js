function onPrefJson(json) {
    const prefs = document.querySelector('#book-list');
    const noprefs = document.querySelector('#banner');
    console.log(json);
  
    if(json.length === 0) {
        console.log("Array is empty!") 
        const em = document.createElement('span');
        em.classList.add('nopref');
        em.textContent = "Nessun preferito";

        noprefs.appendChild(em);
    }

    for(let result of json) {
        
        const copertina = result.img;
        const author = result.autore;
        const title = result.titolo;

        console.log(result);
  
        const oggetto=document.createElement('div');
        oggetto.classList.add('box-book');
  
        const autore=document.createElement('h2');
        autore.classList.add('autore');
        autore.textContent=author;
        
        const titolo=document.createElement('h1');
        titolo.classList.add('titolo');
        titolo.textContent=title;
  
        const img = document.createElement('img');
        img.src=copertina;
  
        id = document.createElement('p');
        id.textContent = result.id;
        
        const preferito = document.createElement('a');
        preferito.innerText= "Rimuovi dai preferiti";
        preferito.addEventListener('click',removePreferito);
  
        oggetto.appendChild(img);
        oggetto.appendChild(titolo);
        oggetto.appendChild(autore);
        oggetto.appendChild(id);
        oggetto.appendChild(preferito);
        
        prefs.appendChild(oggetto);
        
    }

}

function removePrefJson(json){
    if(json.esito == true){
        const result = document.querySelector('#book-list');
        result.innerHTML = '';
        caricaPreferiti();
    }
}

function onResponse(response){
    return response.json();
}

function caricaPreferiti(){
    fetch("/preferito").then(onResponse).then(onPrefJson);
}

function removePreferito(event){
    const button = event.currentTarget;

    const formData = new FormData();
    formData.append('id', button.parentNode.querySelector('p').textContent);
    formData.append('_token', csrf_token);
    fetch("/remove_preferito", {method: 'post', body: formData}).then(onResponse).then(removePrefJson);
}

caricaPreferiti();


//MENÙ MOBILE
const menu = document.querySelector(".menu_mobile");
const menuItems = document.querySelectorAll(".menuItem");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function toggleMenu() {
  if (menu.classList.contains("showMenu")) {
    console.log(menu.classList.contains("showMenu"));
    menu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    //console.log("aperto else");
    menu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
  }
}

hamburger.addEventListener("click", toggleMenu);