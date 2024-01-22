function showDateTime() {
    var currentDate = new Date();
    var dateTimeString = 'Current Date and Time: ' + currentDate.toLocaleString(); document.getElementById('dateTime').innerHTML = dateTimeString;
}

const person = {
    name: "Angela 'SaiDa' Mae M. Tauyan",
    age: 20
};

const personInfoElement = document.getElementById('personInfo');
    personInfoElement.textContent = `I am ${person.name} and I'm ${person.age} years old.`;
