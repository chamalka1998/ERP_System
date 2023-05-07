const spinnerWrapper = document.querySelector('.spinner-wrapper');

window.addEventListener('load', function() {
  setTimeout(function() {
    spinnerWrapper.style.display = 'none';
    spinnerWrapper.style.opacity = '0';
  }, 200);
});
