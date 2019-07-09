var canvas = document.querySelector("canvas");
var ctx = canvas.getContext("2d");

function draw() {
  var width = window.innerWidth;
  var height = window.innerHeight;
  canvas.width = width;
  canvas.height = height;
  
  ctx.clearRect(0, 0, width, height);

  ctx.fillStyle = "#ec9999";
    
  ctx.beginPath();
  ctx.moveTo(0, height / 2);
  
  for (let x = 0, amplitude = 30; x < width; x++) {
    let y = Math.sin(x / amplitude * Math.PI / 2) * amplitude;
    ctx.lineTo(x, y + height / 2);
  }
  
  ctx.lineTo(width, height);
  ctx.lineTo(0, height);
  ctx.lineTo(0, height / 2);
   
  ctx.fill();
}

draw();

window.addEventListener("resize", draw);
