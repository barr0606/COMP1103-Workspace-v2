const animalContainer = document.getElementById('animal-container')
const searchInput = document.getElementById('search-name')
const typeDropdown = document.getElementById('filter-type')
const appForm = document.getElementById('application-form')
const errorMsgs = document.getElementById('error-messages')

//const animals = [
//    {id:"DOG-101", name:"Luna", type:"Dog", breed:"British Bulldog", status:"Adopted"},
//    {id:"DOG-102", name:"Lady", type:"Dog", breed:"Mixed Breed", status:"Available"},
//    {id:"CAT-101", name:"Whiskers", type:"Cat", breed:"Siamese", status:"Available"},
//    {id:"DOG-103", name:"Max", type:"Dog", breed:"Beagle", status:"Adopted"},
//    {id:"TUR-101", name:"Gerald", type:"Turtle", breed:"Easter Long Neck Turtle", status:"Pending"},
//    ]

function handleFilter() {
    console.log("handlefilter called")
    // if(searchInput){
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


if(appForm) {
    appForm.addEventListener('submit', (e) => {
        let errors = [];
        const nameValue = document.getElementById('lastname').value.trim();
        if (nameValue.length < 2) {
            console.log("Error in surname");
            errors.push("Surname must be at least 2 characters long")
        };

        const phoneValue = document.getElementById('tel').value;
        if (phoneValue.length !== 10) {
            console.log("Error in phone");
            errors.push("Please enter a valid phone number")
        };

        if (errors.length > 0) {
            event.preventDefault();
            console.log("print errors")
            errorMsgs.style.display = 'block';
            errorMsgs.innerHTML = errors.join('<br>');
        } else {
            alert("Validation successful! Application submitted.");
        };
    });
}