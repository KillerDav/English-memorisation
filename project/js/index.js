import {createLink,backCreate} from "./createProfil.js";
import {chooseLink,backChoose} from "./chooseProfil.js";
import {linkaddquestion} from "./addQuestion.js"
import {returnlink} from "./addQuestion.js";
window.addEventListener("load",()=>{
    createLink()
    backCreate()
    chooseLink()
    backChoose()
    try{
        linkaddquestion()
        returnlink()
    }catch (e) {

    }
})