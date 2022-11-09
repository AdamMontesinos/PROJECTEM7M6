let userNameInput =document.getElementById("registerName");
userNameInput.addEventListener("focusout", function(){
    
    if(userNameInput.value ===""){
        userNameInput.classList.remove("inputOK");
        userNameInput.classList.add("inputKO");
    }else{
        userNameInput.classList.remove("inputKO");
        userNameInput.classList.add("inputOK")
    }

})

let mailInput =document.getElementById("registerMail");
mailInput.addEventListener("focusout", function() {

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailInput.value)){
        mailInput.classList.remove("inputKO");
        mailInput.classList.add("inputOK");
    }else{
        mailInput.classList.remove("inputOK");
        mailInput.classList.add("inputKO");
    }
})
