var diffX, diffY, element;

function grabber(event) {

  element = event.currentTarget;

  var posX = parseInt(element.style.left);
  var posY = parseInt(element.style.top);

  diffX = event.clientX - posX;
  diffY = event.clientY - posY;

  document.addEventListener("mousemove", mover);
  document.addEventListener("mouseup", dropper);


}

function mover(event) {
  element.style.left = event.clientX - diffX ;
  element.style.top = event.clientY - diffY ;
 
}


function dropper(event) {
  document.removeEventListener("mousemove", mover);
  document.removeEventListener("mouseup", dropper);

}