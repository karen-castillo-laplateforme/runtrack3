// script.js
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('#search-input');
    const resultsBox = document.querySelector('#autocomplete-results');

    searchInput.addEventListener('input', function() {
        let value = this.value;

        if (value.length > 0) {
            fetch('traitement_autocompletion.php?search=' + value)
                .then(response => response.json())
                .then(data => {
                    let html = '';

                    // Partie 1 : Commence par
                    if (data.starts_with.length > 0) {
                        html += '<div class="category-title">Commence par...</div>';
                        data.starts_with.forEach(item => {
                            // On met en gras la partie correspondante
                            const regex = new RegExp(`^(${value})`, 'i');
                            const nameHighlighted = item.nom.replace(regex, '<strong>$1</strong>');
                            
                            html += `<div class="result-item" onclick="window.location='element.php?id=${item.id}'">
                                        ${nameHighlighted}
                                     </div>`;
                        });
                    }

                    // Séparateur si les deux listes ont des résultats
                    if (data.starts_with.length > 0 && data.contains.length > 0) {
                        html += '<hr class="separator">';
                    }

                    // Partie 2 : Contient
                    if (data.contains.length > 0) {
                        html += '<div class="category-title">Contient...</div>';
                        data.contains.forEach(item => {
                            const regex = new RegExp(`(${value})`, 'gi');
                            const nameHighlighted = item.nom.replace(regex, '<strong>$1</strong>');

                            html += `<div class="result-item" onclick="window.location='element.php?id=${item.id}'">
                                        ${nameHighlighted}
                                     </div>`;
                        });
                    }

                    resultsBox.innerHTML = html;
                    resultsBox.style.display = 'block';
                });
        } else {
            resultsBox.style.display = 'none';
        }
    });

    // Cacher les résultats si on clique ailleurs
    document.addEventListener('click', (e) => {
        if (!searchInput.contains(e.target) && !resultsBox.contains(e.target)) {
            resultsBox.style.display = 'none';
        }
    });
});