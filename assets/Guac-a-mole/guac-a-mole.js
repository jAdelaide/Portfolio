const moleHoles = document.querySelectorAll('.moleHole')        //Find all elements on the page with the CLASS ".moleHole"
const mole = document.querySelector('.mole')        //Find the mole
const timeLeft = document.querySelector('#time-left')        //Find the element with the ID "#time-left"
const moleScore = document.querySelector('#moleScore')        //Find the score
const pauseTitle = document.querySelector('#pauseTitle')
const pauseScreen = document.querySelector('.molePauseScreen')      //Get the pause screen div

let result = 0      //start at 0 score
let currentTime = 15        //start with 10 seconds
let timerId = null      //stops the timer interval from moving
let molePosition        //sets the mole position variable
let countDownTimerId        //sets the count down timer ID variable

moleHoles.forEach(moleHole => {
    moleHole.addEventListener('click', () => {
        if (moleHole.id == molePosition) {
            result++        //+1 to the result if a hole with a mole is clicked
            moleScore.textContent = result
            molePosition = null     //removes the mole from that position
            moleHole.classList.remove('mole')
            moleHole.classList.add('hitMole')
            setTimeout(removeGuaced, 1300)     //remove any guaced moles
        }
    })
})

//
document.querySelector('.moleButton').addEventListener('click', e => {       //start or end game when you click the button
    if (currentTime == 15) {        //if the game has not started
        moveMole()
        result = 0
        moleScore.textContent = 0
    } else {
        if (pauseScreen.classList.contains('showScreen') == false) {        //if the game isn't paused
            pauseMoleGame()
        } else{
            moveMole()
        }
    }
})


//functions
function randomMoleHole() {     //function to generate a random hole for the moles
    moleHoles.forEach(moleHole => {
        moleHole.classList.remove('mole')       //start by removing any existing moles
    })
    
    let randomMoleHole = moleHoles[Math.floor(Math.random() * 9)]       //generates a number 0-8 (js arrays are 0 indexed)
    randomMoleHole.classList.remove('hitMole')        //adds the mole class to whichever hole was just selected
    randomMoleHole.classList.add('mole')        //adds the mole class to whichever hole was just selected
    
    molePosition = randomMoleHole.id    //the id is a number 1-9 from the moleHole div
}

function moveMole() {
    timerId = setInterval(randomMoleHole, 750)     //generates a mole every # milliseconds
    countDownTimerId = setInterval(countDown, 1000)     //invoke the countdown function every second
    pauseScreen.classList.remove('showScreen')      //unpause the game
    timeLeft.textContent = currentTime + "s"      //update the timer
}

function countDown() {
    currentTime--       //-1 from the current time
    timeLeft.textContent = currentTime + "s"      //update the timer
    
    if (currentTime < 0) {
        pauseMoleGame()
        currentTime = 15
        timeLeft.textContent = "--"
        pauseTitle.textContent = "GAME OVER!"
        document.querySelector('.mole').classList.remove('mole')
        removeGuaced()
    }
}

function pauseMoleGame() {
    pauseTitle.textContent = "PAUSED"
    pauseScreen.classList.add('showScreen')     //pause the game
    clearInterval(timerId)
    clearInterval(countDownTimerId)
}

function removeGuaced() {
    document.querySelector('.hitMole').classList.remove('hitMole')
}