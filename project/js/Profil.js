export default class Profil{

    constructor() {
        this.profils = []
        this.load()
        this.profilEnCour = ""
    }
    load(){
        let elem = localStorage.getItem("local")
        if (elem != null){
            this.profils = JSON.parse(elem)
        }else{
            localStorage.setItem("local","[]")
            this.profils = []
        }
    }
    save(){
        localStorage.setItem("local",JSON.stringify(this.profils))
    }

    ajouterUnProfil(profil){
        if (!this.profils.includes(profil)){
            this.profils.push(profil)
        }
        this.save()
    }
    supprimerUnProfil(profil){
        if (this.profils.includes(profil)) {
            this.profils.splice(this.profils.indexOf(profil), 1);
        }
        this.save()
    }

    choisirUnProfil(profil){
        this.profilEnCour = profil
    }


}