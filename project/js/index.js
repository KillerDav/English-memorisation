import {createLink,createProfil,backCreate} from "./createProfil.js";
import {chooseLink,backChoose} from "./chooseProfil.js";
import Profil from "./Profil.js"
window.addEventListener("load",()=>{
    let profil = new Profil()
    createLink()
    createProfil(profil)
    backCreate()
    chooseLink(profil)
    backChoose()
})