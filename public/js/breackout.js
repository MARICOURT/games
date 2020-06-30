const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');

/**
 * Main function of the game
 */
function main() {
    setInterval(() => {
        clearCanvas();
        drawBall();
        drawPaddle();
        moveBall();
        
    }, 100);
}

/**
 * Board
 */
function clearCanvas() {
    ctx.fillStyle = "black";  
    ctx.strokeStyle = "black";
    ctx.fillRect(0, 0, gameCanvas.width, gameCanvas.height);  
    ctx.strokeRect(0, 0, gameCanvas.width, gameCanvas.height);
}

/**
 * Breakout object
 */

let paddle = [ {x:130 ,y:140 }, {x:140 ,y:140 }, {x:150 ,y:140 }, {x:160 ,y:140 }, {x:170 ,y:140 }];
let paddleMoveX = 0;
let ball = {x:150, y:100};
let ballMoveY = 10;
let ballMoveX = 10;

/**
 * Draw paddle
 */

function drawPaddlePart(partitionPaddle) {
    ctx.fillStyle = 'green';
    ctx.fillRect(partitionPaddle.x, partitionPaddle.y, 10, 10)
}

function drawPaddle() {
    paddle.forEach(drawPaddlePart);
}

/**
 * Draw ball
 */

function drawBall() {
    ctx.fillStyle = 'blue';
    ctx.fillRect(ball.x,ball.y, 10, 10);
}

/**
 * Ball movement
 */
function moveBall(){

    // Collision detection & bounce

    for (let i = 0; i < paddle.length; i++) {

        // Repérer le x du carré de départ et le bout du paddle 
        const didCollidePaddle =  (ball.y === paddle[i].y -10 && ball.x === paddle[i].x || ball.y === paddle[i].y-10 && ball.x === paddle[i].x - 10 || ball.y === paddle[i].y - 10 && ball.x === paddle[i].x +10 );
        
        // Wall
        if(ball.x < 5 || ball.x > gameCanvas.width - 15 ) {
            ballMoveX = -ballMoveX;
        }
        if(ball.y < 5 || ball.y > gameCanvas.height - 15) {
            ballMoveY = -ballMoveY;
        }
        // Paddle
        else if(didCollidePaddle){
            ballMoveY = -ballMoveY;
        }
    }

    ball.x += ballMoveX;
    ball.y += ballMoveY;
}

/**
 * Paddle control
 */

function changeDirection(event) {  
    const LEFT_KEY = 37;
    const RIGHT_KEY = 39;

    const keyPressed = event.keyCode;

    if (keyPressed === LEFT_KEY) {
        paddleMoveX = -10;
    }

    if (keyPressed === RIGHT_KEY) {    
        paddleMoveX = 10;
    }
    movePaddle();
}

/**
 * Paddle movement
 */
function movePaddle() {
    for (let i = 0; i < paddle.length; i++) {
        paddle[i].x += paddleMoveX;
    }
}

main();
document.addEventListener("keydown", changeDirection)