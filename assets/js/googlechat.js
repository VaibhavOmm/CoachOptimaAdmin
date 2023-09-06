var loaderOverlay = document.createElement('div');
loaderOverlay.className = 'loader-overlay';
var loader = document.createElement('div');
loader.className = 'loader';
loaderOverlay.appendChild(loader);
document.body.appendChild(loaderOverlay);
loaderOverlay.style.position = 'fixed';
loaderOverlay.style.top = '0';
loaderOverlay.style.left = '0';
loaderOverlay.style.width = '100%';
loaderOverlay.style.height = '100%';
if(localStorage.getItem('theme') == 'light'){
    var color = '#fff';
}else{
    var color = '#1e1e2d';
}
loaderOverlay.style.backgroundColor = color;
loaderOverlay.style.zIndex = '9999';
loaderOverlay.style.display = 'flex';
loaderOverlay.style.justifyContent = 'center';
loaderOverlay.style.alignItems = 'center';
loaderOverlay.style.opacity = '1';
loaderOverlay.style.visibility = 'visible';
loaderOverlay.style.transition = 'opacity 0.3s, visibility 0.3s';
loader.style.width = '50px';
loader.style.height = '50px';
loader.style.border = '4px solid rgba(255, 255, 255, 0.3)';
loader.style.borderTop = '4px solid #3498db';
loader.style.borderRadius = '50%';
loader.style.animation = 'spin 0.8s linear infinite';
var keyframes = '@keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }';
var styleSheet = document.createElement('style');
styleSheet.innerText = keyframes;
document.head.appendChild(styleSheet);
window.onload = function () {
  loaderOverlay.style.opacity = '0';
  loaderOverlay.style.visibility = 'hidden';
};