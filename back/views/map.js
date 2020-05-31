var map = document.querySelector('#map') //variable qui contient la map

var paths = map.querySelectorAll('map__tunisie a') // selectionner les differentes formes geometriques

var links = map.querySelectorAll('liste__tunisie a') // selectionner les liens de la listes


if(NodeList.prototype.forEach === undefined) {
	NodeList.prototype.forEach = function (callback){
		[].forEach.call(this,callback)
	}
}

paths.forEach(function (path) {
	path.addEventListener('mouseenter', function(e){
		var id = this.id.replace('tn-','')
		map.querySelectorAll('.is-active').forEach(function(element){
			element.classList.remove('is-active')
		})
		document.querySelector('#list-'+ id).classList.add('is-active')
		document.querySelector('#tn-' + id).classList.add('is-active')
	})
})