const animalContainer = document.getElementById('animal-container')

const animals = [
    {id:"DOG-101", name:"Luna", type:"Dog", breed:"British Bulldog", status:"Adopted"},
    {id:"DOG-102", name:"Lady", type:"Dog", breed:"Mixed Breed", status:"Available"},
    {id:"CAT-101", name:"Whiskers", type:"Cat", breed:"Siamese", status:"Available"},
    {id:"DOG-103", name:"Max", type:"Dog", breed:"Beagle", status:"Adopted"},
    {id:"TUR-101", name:"Gerald", type:"Turtle", breed:"Easter Long Neck Turtle", status:"Pending"},
]


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
    };
};

renderAnimals(animals);

