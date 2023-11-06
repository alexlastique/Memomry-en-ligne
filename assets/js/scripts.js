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
let container = document.querySelector('.container');
const startButton = document.getElementById('start');

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
        container.classList.add('flexBlock');
    });
});
levelDifficult.forEach(levelDifficult => {
    normal.addEventListener('click',() =>{
        table2.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
        container.classList.add('flexBlock');
    });
});
levelDifficult.forEach(levelDifficult => {
    difficile.addEventListener('click',() =>{
        table3.classList.add('flexBlock');
        container.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
    });
});

const counterText = document.getElementById('counter')

var hour = 0
var minute = 0
var second = 0
var mill = 1000

var counter 

var validate = true

const start = () =>{
    if(validate){
        counter = setInterval(timer, mill)
        validate = false
    }
}

const timer = () =>{

    second++
    if(second == 59){
        second = 0
        minute++
        if(minute == 59){
            minute = 0
            hour++
        }
    }

    let time = (hour < 10 ? '0' + hour : hour ) + ':' + (minute < 10 ? '0' + minute : minute )+ ':' + (second < 10 ? '0' + second : second)
    counterText.innerText = time
}

startButton.addEventListener('click', start)