let show = document.getElementById("show");
let hide = document.getElementById("hide");
let passControl = document.getElementById("passControl");
let pass = document.getElementById("pass");
passControl.addEventListener('change',()=>{
    if (passControl.checked) {
        show.classList.remove("hide-icon");
        show.classList.add("show-icon");
        hide.classList.remove("show-icon");
        hide.classList.add("hide-icon");
        pass.setAttribute("type","text");
        console.log("I'm checked");
    }
    else{
        hide.classList.remove("hide-icon");
        hide.classList.add("show-icon");
        show.classList.remove("show-icon");
        show.classList.add("hide-icon");
        pass.setAttribute("type","password");
        console.log("I'm not checked");
    }
    
});