var data = null;

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
		console.log('Data',JSON.parse(this.responseText));
        data = JSON.parse(this.responseText)

        data.forEach(game => {
            document.querySelector('.grid').innerHTML += ('<img class="tile" src="'+ game.thumbnail +'"></img>')
        });
        
	}
});

xhr.open("GET", "https://free-to-play-games-database.p.rapidapi.com/api/games?sort-by=popularity");
xhr.setRequestHeader("x-rapidapi-host", "free-to-play-games-database.p.rapidapi.com");
xhr.setRequestHeader("x-rapidapi-key", "e84a9ffd70msh3ec71ac51663b67p106461jsned177d0fb530");

xhr.send(data);