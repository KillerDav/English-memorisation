

export let linkaddquestion = ()=>{
    let bouton = document.querySelector(".addQuestion")
    bouton.addEventListener("click",()=> {
        let div = document.querySelector(".FormulaireAddQuestion")
        div.style = ""
        document.querySelector(".BoutonAjouterQuestion").style = "display:none"
    })
}
export let returnlink=()=>{
    let bouton = document.querySelector(".FormulaireAddQuestion>.Back")
    bouton.addEventListener("click",()=> {
        let div = document.querySelector(".FormulaireAddQuestion")
        div.style = "display:none"
        document.querySelector(".BoutonAjouterQuestion").style = ""
    })
}