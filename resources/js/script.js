var piccola = document.getElementById("photoSmall");

var modal = document.getElementById("myModal");

var modalImg = document.getElementById("img01");

var close = document.getElementById("closeBtn");

piccola.addEventListener("click", function() {
    
    //cambio lo stile dello spazio modale cosi da farlo comparire
    modal.style.display = "block"; //notare che cambio il display nello stile della ID e non della classe, che lo prende come conseguenza.
    //annullo le ombre della foto piccola
    modalImg.style.boxShadow = "none";
    //nello spazio gli dico di prendere l'immagine di riferimento in QUESTA.
    modalImg.src = this.src;
})

close.addEventListener("click", function() {

    modal.style.display = "none";

})