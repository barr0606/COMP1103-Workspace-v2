//author: Fletcher Barry

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
    if (animalContainer) {
        animalContainer.innerHTML = '';

        animalList.forEach(animal => {
            const cardHTML = `
                <div class="animal-card">
                    <img src="${animal.image}" alt="Picture of ${animal.name}">
                    <h2>${animal.name}</h2>
                    <p><strong>Type: </strong>${animal.type}</p>
                    <p><strong>Breed: </strong>${animal.breed}</p>
                    <p><strong>Age: </strong>${animal.age}</p>
                    <button class="details-button" data-animal-id="${animal.id}">Details</button>
                </div>
            `;
            animalContainer.innerHTML += cardHTML;
        });
    }
};


renderAnimals(animals);


if (searchInput && typeDropdown) {
    searchInput.addEventListener('input', handleFilter);
    console.log("input listener added");
    typeDropdown.addEventListener('change', handleFilter);
    console.log("drop down listener added");
}
