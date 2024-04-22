window.addEventListener('scroll', function() {
  var headerContainer = document.querySelector('.header-container');
  if (window.scrollY > 0) {
      headerContainer.classList.add('scroll');
  } else {
      headerContainer.classList.remove('scroll');
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const urlParams = new URLSearchParams(window.location.search);
  const entry = urlParams.get('entry');
  if (entry) {
      toggleEntry('button' + entry);
      var article = document.getElementById('button' + entry + '-content');
      article.scrollIntoView({behavior: "smooth"});
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
