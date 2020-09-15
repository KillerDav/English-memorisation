import Profil from "./Profil.js"

export let createLink = () => {
    let bouton = document.querySelector(".Create")
    bouton.addEventListener("click",()=>{
        let boutons = document.querySelector("div#buttonCreateChoose")
        boutons.style.display = "none"
        let profil = document.querySelector("#CreateProfile")
        profil.style.display = ""
    })
}

export let createProfil = (profil) => {
    let name = document.querySelector("#CreateProfile > input[type=text]")
    let submit = document.querySelector("#CreateProfile > input[type=submit]")
    submit.addEventListener("click",()=>{
        let textname = name.value
        console.log(localStorage.getItem("max"))
        profil.ajouterUnProfil(textname)
    })
}

export let backCreate = ()=> {
    document.querySelector("#CreateProfile > button.Back").addEventListener(
        "click",()=>{
            let boutons = document.querySelector("div#buttonCreateChoose")
            boutons.style.display = ""
            let profil = document.querySelector("#CreateProfile")
            profil.style.display = "none"
        }
    )

}