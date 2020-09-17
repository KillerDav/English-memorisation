export let chooseLink = () => {
    let bouton = document.querySelector(".Choose")
    bouton.addEventListener("click",()=>{
        let boutons = document.querySelector("div#buttonCreateChoose")
        boutons.style.display = "none"
        let choose = document.querySelector("#ChooseProfile")
        choose.style.display = ""
    })
}


export let backChoose = ()=> {
    document.querySelector("#ChooseProfile > button.Back").addEventListener(
        "click",()=>{
            let boutons = document.querySelector("div#buttonCreateChoose")
            boutons.style.display = ""
            let profil = document.querySelector("#ChooseProfile")
            profil.style.display = "none"
        }
    )

}