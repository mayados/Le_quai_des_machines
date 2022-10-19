					/* Surbrillance réservation du jour */
let jours = document.getElementsByClassName('jour-semaine');

/* Transforme les NodeList en array = chaque élément de class */
let arrJours = Array.from(jours);

arrJours.forEach(function(item){
    if(item==arrJours[0]){
		item.setAttribute('selected', 'selected');
	}
});

