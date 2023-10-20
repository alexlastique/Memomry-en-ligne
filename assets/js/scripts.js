'use strict';

let table1 = document.getElementById('TableMemory1');
let table2 = document.getElementById('TableMemory2');
let table3 = document.getElementById('TableMemory3');
let easy = document.getElementById('easy');
let normal = document.getElementById('normal');
let difficile = document.getElementById('difficile');
let levelDifficult = document.querySelectorAll('.levelDifficult');

/*
function chooseDifficult1() {
    table1.classList.add('flex');
    levelDifficult.classList.add('none');
}
function chooseDifficult2() {
    table2.classList.add('flex');
    levelDifficult.classList.a('none');
}
function chooseDifficult3() {
    table3.classList.add('flex');
    levelDifficult.classList.add('none');
}
*/
levelDifficult.forEach(levelDifficult => {
    easy.addEventListener('click',() =>{
        table1.classList.add('flex');
        levelDifficult.classList.add('none');
    });
});
levelDifficult.forEach(levelDifficult => {
    normal.addEventListener('click',() =>{
        table2.classList.add('flex');
        levelDifficult.classList.add('none');
    });
});
levelDifficult.forEach(levelDifficult => {
    difficile.addEventListener('click',() =>{
        table3.classList.add('flex');
        levelDifficult.classList.add('none');
    });
});