var mouse_down = false;
var ball =  document.querySelector('.basket-ball');

function on_mouse_down_ball(event) {
 mouse_down=true;
}

function on_mouse_up(event){
 mouse_down=false;
}

document.onmousemove = on_mouse_move;
document.onscroll = myFunction;

document.onmouseup = on_mouse_up;

function on_mouse_move(event) {
  if (mouse_down === true) {
    ball.style.left = event.pageX-50   +'px';
    ball.style.top = event.pageY-400  + 'px';

  }
}
// let x = 0;

function myFunction(event){
    console.log("move")
    if (mouse_down === true) {
        ball.style.left = event.pageX-50   +'px';
        ball.style.top = event.pageY-400  + 'px';
    
      }
}