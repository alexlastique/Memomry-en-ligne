'use strict';

let table1 = document.getElementById('TableMemory1');
let table2 = document.getElementById('TableMemory2');
let table3 = document.getElementById('TableMemory3');
let easy = document.getElementById('easy');
let normal = document.getElementById('normal');
let difficile = document.getElementById('difficile');
let theme1 = document.getElementById('photo1');
let theme2 = document.getElementById('photo2');
let theme3 = document.getElementById('photo3');
let photo1H2 = document.getElementById('photo1H2');
let photo2H2 = document.getElementById('photo2H2');
let photo3H2 = document.getElementById('photo3H2');
let levelDifficult = document.querySelectorAll('.levelDifficult');
let themeChoice = document.querySelectorAll('.themeChoice');
let container = document.querySelector('.container');
var difficult = 1


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
        difficult = 1;
    });
});
levelDifficult.forEach(levelDifficult => {
    normal.addEventListener('click',() =>{
        table2.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
        container.classList.add('flexBlock');
        difficult = 2;
    });
});
levelDifficult.forEach(levelDifficult => {
    difficile.addEventListener('click',() =>{
        table3.classList.add('flexBlock');
        container.classList.add('flexBlock');
        levelDifficult.classList.remove('flexBlock');
        levelDifficult.classList.add('none');
        difficult = 3;
    });
});

const counterText = document.getElementById('counter');

var hour = 0
var minute = 0
var second = 0
var milli = 0
var mill = 10
var timeTotal = 0 

var counter 

var validate = true

const start = () =>{
    if(validate){
        counter = setInterval(timer, mill)
        validate = false
    }
}
const stop = () => {
    clearInterval(counter);
    validate = true;
};

const timer = () =>{

    milli++
    if(milli==100){
        milli=0
        second++
        if(second == 60){
            second = 0
            minute++
            if(minute == 60){
                minute = 0
                hour++
            }
        }
    }

    let time = (hour < 10 ? '0' + hour : hour ) + ':' + (minute < 10 ? '0' + minute : minute )+ ':' + (second < 10 ? '0' + second : second)+ ':' + (milli < 10 ? '0' + milli : milli)
    timeTotal = ((hour * 60 + minute) * 60 + second )*100 +milli
    counterText.innerText = time
}



const symbols = ['1', '2', '3', '4', '5', '6', '7', '8'];
const cards = [...symbols, ...symbols];
cards.sort(() => 0.5 - Math.random());

const gameContainer = document.getElementById('memory-game');
let flippedCards = 0;
let canFlip = true;
var Victory = 0;
const images = [
    "<img class='memory-carte' src='../../assets/images/espace/black-hole.avif'>",
    "<img class='memory-carte' src='../../assets/images/espace/black-hole.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/comete1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/constellation1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/etoile1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/etoile2.webp'>",
    "<img class='memory-carte' src='../../assets/images/espace/galaxie1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/galaxy.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/headerBackground.jpg'>",
    "<img class='memory-carte' src='../../assets/images/espace/ISS1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/lune1.png'>",
    "<img class='memory-carte' src='../../assets/images/espace/lune2.png'>",
    "<img class='memory-carte' src='../../assets/images/espace/meteore.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/meteorite1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/montagneSpace.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/MultipleEtoile.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/nebuleuse1.avif'>",
    "<img class='memory-carte' src='../../assets/images/espace/PillierDeLaCreation.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/planete1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/planete2.png'>",
    "<img class='memory-carte' src='../../assets/images/espace/planete3.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/planete4.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/sattelite1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/sattelite2.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/screen-black-hole.webp'>",
    "<img class='memory-carte' src='../../assets/images/espace/Soyouz.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/space.webp'>",
    "<img class='memory-carte' src='../../assets/images/espace/SphereDeDyson.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/supernova1.avif'>",
    "<img class='memory-carte' src='../../assets/images/espace/supernova1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/TrouDeVer1.jpeg'>",
    "<img class='memory-carte' src='../../assets/images/espace/VoieLactee.jpg'>"
];

function flipCard(card) {
    if (!canFlip || card.innerHTML !== '' || card.classList.contains('flipped')) {
        return;
    }

    card.innerHTML = images[card.dataset.symbol-1];
    card.classList.add('flipped');
    card.classList.remove('flipped2');
    flippedCards++;

    if (flippedCards === 2) {
        canFlip = false;
        setTimeout(checkForMatch, 1000);
    }
}

function checkForMatch() {
    const flipped = document.querySelectorAll('.flipped');
    if (flipped[0].dataset.symbol === flipped[1].dataset.symbol) {
        flipped.forEach(card => {
            card.removeEventListener('click', () => flipCard(card));
            card.classList.remove('flipped');
            card.classList.add('flipped2');
            Victory++;
            if (Victory==16){
                console.log(timeTotal)
                setTimeout(()=>{
                    stop();
                }, 1);
                ajaxEnvoieScore()
                if(window.confirm('Votre score est de : '+timeTotal+'\nVoulez-vous rejouez ?')){
                    location.replace("../../games/memory/index.php", "");
                }else{
                    location.replace("../../index.php")
                }
                Victory = 0
            }
        });
    } else {
        flipped.forEach(card => {
            card.innerHTML = '';
            card.classList.remove('flipped');
            card.classList.add('flipped2');
        });
    }
    flippedCards = 0;
    canFlip = true;
}

cards.forEach((symbol, index) => {
    const card = document.createElement('div');
    card.classList.add('memory-card');
    card.dataset.symbol = symbol;
    card.addEventListener('click', start);
    card.addEventListener('click', () => flipCard(card));
    gameContainer.appendChild(card);
}
);





const symbols2 = ['1', '2', '3', '4', '5', '6', '7', '8','9','10','11','12','13','14','15','16','17','18'];
const cards2 = [...symbols2, ...symbols2];
cards2.sort(() => 0.5 - Math.random());

const gameContainer2 = document.getElementById('memory-game2');
let flippedCards2 = 0;
let canFlip2 = true;

function flipCard2(card) {
    if (!canFlip2 || card.innerHTML !== '' || card.classList.contains('flipped')) {
        return;
    }

    card.innerHTML = images[card.dataset.symbol2 - 1];
    card.classList.add('flipped');
    card.classList.remove('flipped2');
    flippedCards2++;

    if (flippedCards2 === 2) {
        canFlip2 = false;
        setTimeout(checkForMatch2, 1000);
    }
}

function checkForMatch2() {
    const flipped = document.querySelectorAll('.flipped');
    if (flipped[0].dataset.symbol2 === flipped[1].dataset.symbol2) {
        flipped.forEach(card => {
            card.removeEventListener('click', () => flipCard2(card));
            card.classList.remove('flipped');
            card.classList.add('flipped2');
            Victory++;
            if (Victory==36){
                console.log(timeTotal)
                setTimeout(()=>{
                    stop();
                }, 1);
                ajaxEnvoieScore()
                if(window.confirm('Votre score est de : '+timeTotal+'\nVoulez-vous rejouez ?')){
                    location.replace("../../games/memory/index.php", "");
                }else{
                    location.replace("../../index.php")
                }
                Victory=0
            }
        });
    } else {
        flipped.forEach(card => {
            card.innerHTML = '';
            card.classList.remove('flipped');
            card.classList.add('flipped2');
        });
    }
    flippedCards2 = 0;
    canFlip2 = true;
}

cards2.forEach((symbol2, index2) => {
    const card2 = document.createElement('div');
    card2.classList.add('memory-card');
    card2.dataset.symbol2 = symbol2;
    card2.addEventListener('click', start);
    card2.addEventListener('click', () => flipCard2(card2));
    gameContainer2.appendChild(card2);
});





const symbols3 = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32'];
const cards3 = [...symbols3, ...symbols3];
cards3.sort(() => 0.5 - Math.random());

const gameContainer3 = document.getElementById('memory-game3');
let flippedCards3 = 0;
let canFlip3 = true;

function flipCard3(card3) {
    if (!canFlip3 || card3.innerHTML !== '' || card3.classList.contains('flipped')) {
        return;
    }

    card3.innerHTML = images[card3.dataset.symbol3 - 1];
    card3.classList.add('flipped');
    card3.classList.remove('flipped2');
    flippedCards3++;

    if (flippedCards3 === 2) {
        canFlip3 = false;
        setTimeout(checkForMatch3, 1000);
    }
}

function checkForMatch3() {
    const flipped3 = document.querySelectorAll('.flipped');
    if (flipped3[0].dataset.symbol3 === flipped3[1].dataset.symbol3) {
        flipped3.forEach(card3 => {
            card3.removeEventListener('click', () => flipCard3(card3));
            card3.classList.remove('flipped');
            card3.classList.add('flipped2');
            Victory++;
            if (Victory==64){
                console.log(timeTotal)
                setTimeout(()=>{
                    stop();
                }, 1);
                ajaxEnvoieScore()
                if(window.confirm('Votre score est de : '+timeTotal+'\nVoulez-vous rejouez ?')){
                    location.replace("../../games/memory/index.php", "");
                }else{
                    location.replace("../../index.php")
                }
                Victory=0
            }
        });
    } else {
        flipped3.forEach(card3 => {
            card3.innerHTML = '';
            card3.classList.remove('flipped');
            card3.classList.add('flipped2');
        });
    }
    flippedCards3 = 0;
    canFlip3 = true;
}

cards3.forEach((symbol3, index3) => {
    const card3 = document.createElement('div');
    card3.classList.add('memory-card');
    card3.dataset.symbol3 = symbol3;
    card3.addEventListener('click', start);
    card3.addEventListener('click', () => flipCard3(card3));
    gameContainer3.appendChild(card3);
});


function ajaxEnvoieScore(){
    let request = $.ajax({
    type: "POST",             //Méthode à employer POST ou GET 
    url: "../../games/memory/Score.php",  //Cible du script coté serveur à appeler 
    data: {'Score': timeTotal, 'difficult': difficult}
    });
    request.done(function (output) {
    //Code à jouer en cas d'éxécution sans erreur du script du PHP
    });
}