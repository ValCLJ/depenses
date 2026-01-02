//calculer l'argent restant a parir des donnes retrees 
function function_argent_restant (salaire, preleve, depense_1, depense_2, depense_3 ){
    argent_restant = salaire - preleve - depense_1 - depense_2 - depense_3
}
//effectuer le calcul quand le btn "go" est pressé
    button_go.addEventListener("click",() => {
        function_argent_restant(salaire.value, preleve.value, depense_1.value, depense_2.value, depense_3.value)
        console.log(argent_restant)
    })

    