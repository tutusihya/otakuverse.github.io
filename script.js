document.addEventListener('DOMContentLoaded', function() {
    fetch('https://myanimelist.net/search/all?q=naruto&cat=all')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log(data);
            const animeList = document.getElementById('anime-list');
            data.anime.forEach(anime => {
                const animeItem = document.createElement('div');
                animeItem.classList.add('anime-item');
                animeItem.innerHTML = `
                    <h3>${anime.title}</h3>
                    <p>${anime.synopsis}</p>
                    <button onclick="addFavorite('${anime.title}')">Add to Favorites</button>
                `;
                animeList.appendChild(animeItem);
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });

    fetch('counter.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            document.getElementById('hit-counter').innerText = `Visits: ${data}`;
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
});

function addFavorite(anime) {
    fetch('save_favorites.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `anime=${anime}`
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}