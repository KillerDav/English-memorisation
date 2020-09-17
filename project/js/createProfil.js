
export let createLink = () => {
    let bouton = document.querySelector(".Create")
    bouton.addEventListener("click",()=>{
        let boutons = document.querySelector("div#buttonCreateChoose")
        boutons.style.display = "none"
        let profil = document.querySelector("#CreateProfile")
        profil.style.display = ""
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