import {createLink,createProfil,backCreate} from "./createProfil.js";
import {chooseLink,backChoose} from "./chooseProfil.js";
window.addEventListener("load",()=>{
    createLink()
    createProfil()
    backCreate()
    chooseLink()
    backChoose()
})