let button = document.querySelector('.button');

button.addEventListener('mouseover', ()=>{
    button.style.backgroundColor = "black";
    button.style.border = "transparent";
    button.style.color = "white";
    button.style.transform = "scale(1.1)";
});

button.addEventListener('mouseout', ()=>{
    button.style.backgroundColor = "white";
    button.style.border = "";
    button.style.color = "";
    button.style.transform = "scale(1)";
});