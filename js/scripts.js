/**
 * Make a request for all pets to the API 
 */

// Grab our <section> element for ouput. 
const apiTestElement = document.getElementById('api-test');

 fetch( 'http://localhost:80/api/pets.php')
 // Convert the respnse from a string to an object 
    .then( response => response.json() )
    // Use the data ! 
    .then( data => {
        const heading = document.createElement('H2');
        heading.textContent = 'Pets';
        const list = document.createElement('UL');
        for (const petName in pets) {
            const listItem = document.createElement('LI');
            listItem.innerHTML = `
            <h3> ${petName} </h3>    
            <dl>
                    <dt>Age</dt>
                    <dd>${pets[petName].age}</dd>
                    <dt>Type</dt>
                    <dd>${pets[petName].type}</dd>
                </dl>`;
            const tricksList = document.createElement('UL');
            for (trick of pets[petName].tricks) {
                tricksList.innerHTML += `<li>${trick}</li>`;
        }
        listItem.appendChild(tricksList);
        list.appendChild(listItem);
    }
        apiTestElement.appendChild(list);
    })