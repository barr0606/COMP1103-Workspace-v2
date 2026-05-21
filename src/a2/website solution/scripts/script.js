const animalContainer = document.getElementById('animal-container');
const searchInput = document.getElementById('search-name');
const typeDropdown = document.getElementById('filter-type');


function handleFilter() {
    console.log("handlefilter called")
    const searchTerm = searchInput.value.toLowerCase();
    const selectedType = typeDropdown.value;

    const filtered = animals.filter(animal => {
        const matchesName = animal.name.toLowerCase().includes(searchTerm);
        const matchesType = selectedType === 'ALL' || animal.type === selectedType;
        return matchesName && matchesType;})
    
    renderAnimals(filtered);
}


function renderAnimals(animalList) {
    if (animalContainer) {;
        

        animalContainer.innerHTML = '';

        animalList.forEach(animal => {
            // create the cardHTML
            const cardHTML = `
                <div type="card" class="animal-card">
                    <h2>${animal.name}</h2>
                    <p><strong>Type: </strong>${animal.type}</p>
                    <p><strong>Breed: </strong>${animal.breed}</p>
                    <p><strong>Status: </strong>${animal.status}</p>
                </div>
            `;
            animalContainer.innerHTML += cardHTML;
        });

        // renderAnimals(filtered)
    };
};


renderAnimals(animals);


if (searchInput && typeDropdown) {
    searchInput.addEventListener('input', handleFilter);
    console.log("input listener added");
    typeDropdown.addEventListener('change', handleFilter);
    console.log("drop down listener added");
}
