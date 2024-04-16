window.addEventListener('scroll', function() {
    var headerContainer = document.querySelector('.header-container');
    if (window.scrollY > 0) {
        headerContainer.classList.add('scroll');
    } else {
        headerContainer.classList.remove('scroll');
    }
});
function toggleEntry(buttonId) {
    var arrow = document.getElementById(buttonId);
    arrow.classList.toggle('up');
    var text = document.getElementById(buttonId + "-content");
    if (text.style.display === "none") {
      text.style.display = "block";
    } else {
      text.style.display = "none";
    }
}