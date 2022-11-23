//seletores
//
const c = (el) => document.querySelector(el);
const cs = (el) => document.querySelectorAll(el);

//modal de login
window.onload = () =>{
    if(c('#login .boxModal p').innerHTML !== ''){
            c('#login .modal').style.opacity = '0';  
            c('#login .modal').style.display = 'flex';  
        setTimeout(()=>{
            c('#login .modal').style.opacity = '1';    
        }, 500)
    } else {
        c('#login .modal').style.display = 'none';
    }
}

c('#closeModal').addEventListener("click", ()=>{
    c('#login .modal').style.opacity = '0';
    setTimeout(()=>{
        c('#login .modal').style.display = 'none';
    }, 500)
});

c('#cancelExit').addEventListener("click", ()=>{
    c('#exitModal .modal').style.opacity = '0';
    setTimeout(()=>{
        c('#exitModal .modal').style.display = 'none';
    }, 500)
});

c('#exit_anchor').addEventListener('click', ()=>{
    c('#exitModal .modal').style.opacity = '0';  
    c('#exitModal .modal').style.display = 'flex';  
        setTimeout(()=>{
            c('#exitModal .modal').style.opacity = '1';    
    }, 500)
});


