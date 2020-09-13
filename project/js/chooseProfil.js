export let chooseLink = () => {
    let bouton = document.querySelector(".Choose")
    bouton.addEventListener("click",()=>{
        let boutons = document.querySelector("div#buttonCreateChoose")
        boutons.style.display = "none"
        let choose = document.querySelector("#ChooseProfile")
        choose.style.display = ""

        let profils = document.querySelector("#ChooseProfile > #profil")
        let max = parseInt(localStorage.getItem("max"))
        for (let i = 0; i < max + 1; i++){
            let name = localStorage.getItem(i+"")
            profils.innerHTML+="<button class='prof' value='"+i+"'>"+name
                +"</button>"
        }
    })
}

export let chooseProfil = () => {
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