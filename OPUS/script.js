const canvas = document.getElementById("game-board");
const ctx = canvas.getContext("2d");
const scoreElement = document.getElementById("score");

const gridSize = 20;
const tileCount = canvas.width / gridSize;

let snake = [{ x: 10, y: 10 }];
let direction = { x: 0, y: 0 };
let food = { x: 5, y: 5 };
let score = 0;

function gameLoop() {
    update();
    draw();
    setTimeout(gameLoop, 100);
}

function update() {
    const head = { x: snake[0].x + direction.x, y: snake[0].y + direction.y };

    // Colisión con los bordes
    if (head.x < 0 || head.x >= tileCount || head.y < 0 || head.y >= tileCount) {
        resetGame();
        return;
    }

    // Colisión consigo misma
    if (snake.some(segment => segment.x === head.x && segment.y === head.y)) {
        resetGame();
        return;
    }

    snake.unshift(head);

    // Comer la comida
    if (head.x === food.x && head.y === food.y) {
        score++;
        scoreElement.textContent = score;
        placeFood();
    } else {
        snake.pop();
    }
}

function draw() {
    // Limpiar el tablero
    ctx.fillStyle = "#34495e";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Dibujar la serpiente
    ctx.fillStyle = "#2ecc71";
    snake.forEach(segment => ctx.fillRect(segment.x * gridSize, segment.y * gridSize, gridSize, gridSize));

    // Dibujar la comida
    ctx.fillStyle = "#e74c3c";
    ctx.fillRect(food.x * gridSize, food.y * gridSize, gridSize, gridSize);
}

function placeFood() {
    food.x = Math.floor(Math.random() * tileCount);
    food.y = Math.floor(Math.random() * tileCount);

    // Asegurarse de que la comida no aparezca en la serpiente
    if (snake.some(segment => segment.x === food.x && segment.y === food.y)) {
        placeFood();
    }
}

function resetGame() {
    snake = [{ x: 10, y: 10 }];
    direction = { x: 0, y: 0 };
    score = 0;
    scoreElement.textContent = score;
    placeFood();
}

function changeDirection(event) {
    const key = event.key;
    if (key === "ArrowUp" && direction.y === 0) {
        direction = { x: 0, y: -1 };
    } else if (key === "ArrowDown" && direction.y === 0) {
        direction = { x: 0, y: 1 };
    } else if (key === "ArrowLeft" && direction.x === 0) {
        direction = { x: -1, y: 0 };
    } else if (key === "ArrowRight" && direction.x === 0) {
        direction = { x: 1, y: 0 };
    }
}

// Controles con botones
document.getElementById("up").addEventListener("click", () => changeDirection({ key: "ArrowUp" }));
document.getElementById("down").addEventListener("click", () => changeDirection({ key: "ArrowDown" }));
document.getElementById("left").addEventListener("click", () => changeDirection({ key: "ArrowLeft" }));
document.getElementById("right").addEventListener("click", () => changeDirection({ key: "ArrowRight" }));

// Controles con teclado
document.addEventListener("keydown", changeDirection);

placeFood();
gameLoop();