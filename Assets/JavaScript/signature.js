function moveDrawligne(oEvent){ 
    var oCanvas = oEvent.currentTarget,
        oCtx = null, oPos = null;
    if(oCanvas.bDraw ==false){
      return false;
    }//if
    oPos = getPosition(oEvent, oCanvas);
    oCtx = oCanvas.getContext('2d');
    
    //dessine
    oCtx.strokeStyle = '#000000';
    oCtx.lineWidth = 3;
    oCtx.beginPath(); 
    oCtx.moveTo((oCanvas.posX), oCanvas.posY);
    oCtx.lineTo(oPos.posX, oPos.posY);
    oCtx.stroke();
    
    oCanvas.posX = oPos.posX;
    oCanvas.posY = oPos.posY; 
} //fct
  
function getPosition(oEvent, oCanvas){
  var oRect = oCanvas.getBoundingClientRect(),
      oEventEle = oEvent.changedTouches? oEvent.changedTouches[0]:oEvent;
  return {
    posX : (oEventEle.clientX - oRect.left) / (oRect.right - oRect.left) * oCanvas.width,
    posY : (oEventEle.clientY - oRect.top) / (oRect.bottom - oRect.top) * oCanvas.height
  };//
}//fct
  
function downDrawligne(oEvent){ 
  oEvent.preventDefault(); 
  var  oCanvas = oEvent.currentTarget,
      oPos = getPosition(oEvent, oCanvas);
  oCanvas.posX = oPos.posX;
  oCanvas.posY = oPos.posY;
  oCanvas.bDraw = true;
  capturer(false);
}//fct
  
function upDrawligne(oEvent){
  var oCanvas = oEvent.currentTarget;
  oCanvas.bDraw = false; 
  capturer(true);
}//fct
  
function initCanvas(){
  var oCanvas = document.getElementById("canvas");
  oCanvas.bDraw = false;
  oCanvas.width =  400;
  oCanvas.height = 200;
  oCtx = oCanvas.getContext('2d'); 
  oCanvas.addEventListener("mousedown", downDrawligne);
  oCanvas.addEventListener("mouseup", upDrawligne);
  oCanvas.addEventListener("mousemove", moveDrawligne);
  oCanvas.addEventListener("touchstart", downDrawligne);
  oCanvas.addEventListener("touchend", upDrawligne);
  oCanvas.addEventListener("touchmove", moveDrawligne); 
}//fct
    
/**
  * Vide les dessin du canvas
*/
function nettoyer(oEvent){
  var  oCanvas = document.getElementById("canvas"),
      oCtx = oCanvas.getContext('2d');
  oCtx.clearRect(0,0,oCanvas.width,oCanvas.height); 
  capturer(false);
}//fct
  
document.addEventListener('DOMContentLoaded',function(){
  initCanvas();
  document.getElementById("bt-clear").addEventListener("click", nettoyer); 
});