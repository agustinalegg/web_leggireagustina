const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

// Configuración de la estrella
const numPoints = 5;      
const outerRadius = 70;   
const innerRadius = 40;   
let angle = 0;            

const centerX = canvas.width / 2;
const centerY = canvas.height / 2;

// Función para dibujar la estrella
function drawStar(cx, cy, spikes, outerRadius, innerRadius) {
  let rot = (Math.PI / 2) * 3;
  let x = cx;
  let y = cy;
  const step = Math.PI / spikes;

  ctx.beginPath();
  ctx.moveTo(cx, cy - outerRadius);

  for (let i = 0; i < spikes; i++) {
    x = cx + Math.cos(rot) * outerRadius;
    y = cy + Math.sin(rot) * outerRadius;
    ctx.lineTo(x, y);
    rot += step;

    x = cx + Math.cos(rot) * innerRadius;
    y = cy + Math.sin(rot) * innerRadius;
    ctx.lineTo(x, y);
    rot += step;
  }
  ctx.lineTo(cx, cy - outerRadius);
  ctx.closePath();
  ctx.fillStyle = "white";
  ctx.fill();
}

// Función para animar la estrella
function animate() {
  // Limpiar el canvas en cada fotograma
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Guardar el estado del contexto
  ctx.save();

  // Mover el contexto al centro y rotar
  ctx.translate(centerX, centerY);
  ctx.rotate(angle);

  // Dibujar la estrella en el centro
  drawStar(0, 0, numPoints, outerRadius, innerRadius);

  // Restaurar el contexto a su estado original
  ctx.restore();

  // Incrementar el ángulo para la siguiente rotación
  angle += 0.02;

  // Solicitar el siguiente fotograma
  requestAnimationFrame(animate);
}

// Iniciar la animación
animate();
