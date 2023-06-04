let show = document.getElementById("show");
let hide = document.getElementById("hide");
let passControl = document.getElementById("passControl");
let pass1 = document.getElementById("pass1");
let show2 = document.getElementById("show2");
let hide2 = document.getElementById("hide2");
let passControl2 = document.getElementById("passControl2");
let pass = document.getElementById("pass");
passControl.addEventListener('change',()=>{
    if (passControl.checked) {
        show.classList.remove("hide-icon");
        show.classList.add("show-icon");
        hide.classList.remove("show-icon");
        hide.classList.add("hide-icon");
        pass1.setAttribute("type","text");
        console.log("I'm checked");
    }
    else{
        hide.classList.remove("hide-icon");
        hide.classList.add("show-icon");
        show.classList.remove("show-icon");
        show.classList.add("hide-icon");
        pass1.setAttribute("type","password");
        console.log("I'm not checked");
    } 
});

passControl2.addEventListener('change',()=>{
    if (passControl2.checked) {
        show2.classList.remove("hide-icon2");
        show2.classList.add("show-icon2");
        hide2.classList.remove("show-icon2");
        hide2.classList.add("hide-icon2");
        pass2.setAttribute("type","text");
        console.log("I'm checked");
    }
    else{
        hide2.classList.remove("hide-icon2");
        hide2.classList.add("show-icon2");
        show2.classList.remove("show-icon2");
        show2.classList.add("hide-icon2");
        pass2.setAttribute("type","password");
        console.log("I'm not checked");
    } 
});

