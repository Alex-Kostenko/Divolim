function showMenu(){
  let menu = document.getElementById('mobile-menu-block');
  menu.style.display = "flex";
}

function showGorizontal() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showGorizontal').style.display="flex";
}
function showAlign() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showAlign').style.display="flex";
}
function showPlisse() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showPlisse').style.display="flex";
}
function showRim() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showRim').style.display="flex";
}
function showBamb() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showBamb').style.display="flex";
}
function showAnti() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showAnti').style.display="flex";
}
function showRoletu() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showRoletu').style.display="flex";
}
function showOkna_dv() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showOkna_dv').style.display="flex";
}
/**********************************/
function showUniversal() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showUniversal').style.display="flex";
}
function showOpen() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showOpen').style.display="flex";
}
function showClose() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showClose').style.display="flex";
}
/**********************************/
function showMain() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showMain').style.display="flex";
}
$(document).ready(function () {
    $('a img').click(function () {
        var o=$(this).parent();
        var url=o.find('img').attr('src');
        var html='<a class="clone"><img src="'+url+'" /></a>'
        o.append(html);
        o=o.find('.clone');
        o.animate({width:'100%',height:'100%'});
        o.click(function () {
            $(this).remove();
        });
    });
});