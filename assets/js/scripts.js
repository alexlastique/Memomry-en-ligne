'use strict';

let table1 = document.getElementById('TableMemory1');
let table2 = document.getElementById('TableMemory2');
let table3 = document.getElementById('TableMemory3');
let easy = document.getElementById('easy');
let normal = document.getElementById('normal');
let difficile = document.getElementById('difficile');
let theme1 = document.getElementById('theme1');
let theme2 = document.getElementById('theme2');
let theme3 = document.getElementById('theme3');
let levelDifficult = document.querySelectorAll('.levelDifficult');
let themeChoice = document.querySelectorAll('.themeChoice');

themeChoice.forEach(themeChoice =>{
    levelDifficult.forEach(levelDifficult => {
        theme1.addEventListener('click',() =>{
            levelDifficult.classList.add('flexBlock');
            themeChoice.classList.add('none');
        });
    });
});
themeChoice.forEach(themeChoice =>{
    levelDifficult.forEach(levelDifficult => {
        theme2.addEventListener('click',() =>{
            levelDifficult.classList.add('flexBlock');
            themeChoice.classList.add('none');
        });
    });
});
themeChoice.forEach(themeChoice =>{
    levelDifficult.forEach(levelDifficult => {
        theme3.addEventListener('click',() =>{
            levelDifficult.classList.add('flexBlock');
            themeChoice.classList.add('none');
        });
    });
});
levelDifficult.forEach(levelDifficult => {
    easy.addEventListener('click',() =>{
        table1.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
    });
});
levelDifficult.forEach(levelDifficult => {
    normal.addEventListener('click',() =>{
        table2.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
    });
});
levelDifficult.forEach(levelDifficult => {
    difficile.addEventListener('click',() =>{
        table3.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
    });
});