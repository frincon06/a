window.addEventListener('load',()=>{var full=localStorage.getItem('full')
if(full){document.getElementsByTagName('header')[0].remove()
if(!alert('¿¿frances?? beep...boop...beep')){window.location.reload()}
for(let i=0;i<rick.length;i++){rick[i].remove()}}})
for(let i=0;i<rick.length;i++){rick[i].addEventListener('click',()=>{var full=localStorage.getItem('full')
if(full){if(!alert('¿¿frances?? beep...boop...beep')){window.location.reload()}
document.getElementsByTagName('header')[0].remove()
for(let i=0;i<rick.length;i++){rick[i].remove()}}else{var limit=localStorage.getItem('limit_click')
let count=parseInt(localStorage.getItem('count'))
if(count>=limit){localStorage.setItem('full',1)}else{localStorage.setItem('count',parseInt(count)+1)}}})}

const nombre = document.getElementById("name")
const email = document.getElementById("email")
const pass1 = document.getElementById("pass1").value;
const pass2 = document.getElementById("pass2").value;
const form = document.getElementById("form")
const parrafo = document.getElementById("warnings")

form.addEventListener("submit", e=>{
    e.preventDefault()
    let warnings = ""
    let entrar = false
    let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
    parrafo.innerHTML = ""
    if(nombre.value.length <6){
        warnings += `El nombre no es valido <br>`
        entrar = true
    }
    if(!regexEmail.test(email.value)){
        warnings += `El email no es valido <br>`
        entrar = true
    }
    if(pass.value.length < 8){
        warnings += `La contraseña no es valida <br>`
        entrar = true
    }

    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Enviado"
    }
    
})


function checkPassword(valor){
    var myregex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/; 
   if(myregex.test(valor)){
       alert(valor+"La contraseña es valida");
       return true;        
   }else{
      alert(valor+"La contraseña es valida");
       return false;        
   }   
}

function checkForm(form){
    if(form.pass1.value != "" && form.pass1.value == form.pass2.value) {
      if(!checkPassword(form.pass1.value)) {
        alert("La contraseña no es valida!");
        form.pass1.focus();
        return false;
      }
    } else {
      alert("Error: las contraseñas no coinciden!");
      form.pass1.focus();
      return false;
    }
    return true;
    }
    if(entrar){
        parrafo.innerHTML = warnings
    }else{
        parrafo.innerHTML = "Enviado"
}

    
