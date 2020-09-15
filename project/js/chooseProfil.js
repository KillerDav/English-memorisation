import Profil from "./Profil.js"

export let chooseLink = (profil) => {
    let bouton = document.querySelector(".Choose")
    bouton.addEventListener("click",()=>{
        let boutons = document.querySelector("div#buttonCreateChoose")
        boutons.style.display = "none"
        let choose = document.querySelector("#ChooseProfile")
        choose.style.display = ""

        let profils = document.querySelector("#ChooseProfile > #profil")
        profil.profils.forEach((element)=>{profils.innerHTML+="<button class='prof' value='"+element+"'>"+element
                +"</button>"})

        let innerprofils = profils.querySelectorAll(".prof")
        innerprofils.forEach((element)=>{
            element.addEventListener("click",()=>{
                let name = element.value
                profil.choisirUnProfil(name)
                console.log(profil)
            })
        })
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