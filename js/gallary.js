function showMain() {
  let x = document.getElementsByClassName("wrap_prod");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById('showMain').style.display="flex";
}
$(document).ready(function () {
    $('#js-main-gallery a img').click(function () {
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