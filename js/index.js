let canvas = document.querySelector("canvas");
let ctx = canvas.getContext("2d");

function draw() {
  let width = document.documentElement.clientWidth;
  let height = 345;
  canvas.width = width;
  canvas.height = height;

  ctx.clearRect(0, 0, width, height);

  ctx.fillStyle = "#FFFFFF";

  ctx.beginPath();
  ctx.moveTo(0, height / 2);


  for (let x = 0, amplitude = 4; x < width; x++) {
    let y = Math.sin(x / amplitude * Math.PI / 15) * amplitude;
    ctx.lineTo(x, y + height / 2);
  }

  ctx.lineTo(width, height);
  ctx.lineTo(0, height);
  ctx.lineTo(0, height / 2);

  ctx.fill();
}

draw();

window.addEventListener("resize", draw);

// amount
let amount = 10;
document.getElementById('amount').innerHTML = amount;
