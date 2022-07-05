function validazione(event){
    if( form.username.value.length==0 || form.password.value.length==0)	{
        
        const errore = document.querySelector('span');
        errore.classList.remove('hidden');
        event.preventDefault();
    }	
}
    
const form=document.querySelector('form');
form.addEventListener('submit',validazione);

    
  
