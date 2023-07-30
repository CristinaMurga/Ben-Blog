const superheroesRow = document.getElementById('superheroesRow');
console.log(superheroesRow);



fetch('http://127.0.0.1:8000/api/superheroes')
    .then(response => response.json())
    .then(data => {
        console.log(data)
        data.forEach((value) => {
            console.log(value)
        })
    })
    
