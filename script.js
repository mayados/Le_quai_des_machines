            /* MENU ACCORDEON  */


/* On sélectionne tous les boutons du document html */
const buttons = document.querySelectorAll('.button');
/* Pour chaque bouton, on écoute s'il y a un évènement click */
buttons.forEach(function (button, index) {
    button.addEventListener('click', function (e) {
      e.preventDefault();
      /* S'il y a un clic, le parent du bouton prend la classe "on" */
      this.parentNode.classList.toggle('on');
      /* Pouor chaque bouton */
      buttons.forEach(function (button2, index2) {
        /* Si le bouton sur lequel on a cliqué est différent de celui sur lequel on est, on enleve la class "on" à son parent */
          if (index !== index2) {
            button2.parentNode.classList.remove('on');
          }
      });
    });
});
            

            

//Bouton "scroll"
let mybutton = document.getElementById("myScroll");

//Bouton s'affiche à partir du haut de 20px plus bas)
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

//Quand le bouton est cliqué, ça défile vers le haut
  function topFunction() {
    document.body.scrollTop = 0; // Pour Safari
    document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
  }

  // Partie burger
function afficherMenu() {
  const menuNavigation = document.querySelector('#menu-navigation');
  const burger = document.querySelector('.burger');

  burger.addEventListener('click', (event) => {    
    menuNavigation.classList.toggle('show-nav');

  });    
} 

afficherMenu();





                                /* Dark mode / light mode */

/* On cible l'élément checkbox, car si on effectue des changements sur cet élément, cela influera sur le fait qu'on passe au dark mode ou light mode */
const darkMode = document.getElementById('checkbox');

/* On écoute si des changements sont effectués sur le checkbox */
darkMode.addEventListener('change', () => {
  /* S'il y a bien des changements, les éléments du body concernés basculent en class "dark" (voir css pour les éléments ciblés) */
  document.body.classList.toggle('dark');
});

// Partie réservation 
const midi = document.getElementById("creneau-heure-midi");
const soir = document.getElementById("creneau-heure-soir");
const midiHeures = document.getElementById("H-midi");
const soirHeures = document.getElementById("H-soir");


function AfficherCreneau() {
  midiHeures.classList.add("hidden");
  soirHeures.classList.remove("hidden");
}

function AfficherCreneauMidi() {
  midiHeures.classList.remove("hidden");
  soirHeures.classList.add("hidden");
}

function toggleCreneaux() {
if(this.selectedIndex == 0) {
  AfficherCreneauMidi()
  } else if(this.selectedIndex == 1) {
  AfficherCreneau()
  }
  console.log('lol');
}


// soir.addEventListener("click", AfficherCreneau());
//soir.addEventListener("click", AfficherCreneau());
// onChange="AfficherCreneau()"