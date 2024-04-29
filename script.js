(function(){
    const word = "Hello"
    console.log(word)
    console.log(typeof word)
    const user = []
    const Lang = {
        poo : "PHP",
        date: 1994
    }
    const auteur = {
        nom: "Rasmus",
        prenom: "Ledorf"
    }
    console.log(auteur.nom)

    user.push(Lang, auteur)
    console.table(user)


})()

