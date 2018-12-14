let slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  let i;
  let x = document.getElementsByClassName("gallery-potfolio");
  let spg = document.getElementsByClassName("selected-page-gallery");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    spg[i].style.background = "none";
    spg[i].style.color = "#4b55a6";
  }
  x[slideIndex-1].style.display = "flex";
  spg[slideIndex-1].style.backgroundColor = "#f2f3f9";
  spg[slideIndex-1].style.color = "#000000";
}
