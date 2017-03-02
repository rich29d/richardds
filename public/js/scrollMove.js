
//Cria objeto pedregulho
/*
* @param el Seletor
* @param at Atributo
* @param sp Velocidade
*/
function scrollMove(el,at,sp){

  this.el = $(el);
  this.at = at;
  this.el_top = Number(this.el.css(at).replace('px','')) || 0;
  this.speed = sp;
  this.scroll();

}

//Ao rolar a página 'pedregulho' se movimentara de acordo com o 'speed'
scrollMove.prototype.scroll = function(){

  var self = this;


  $('.ss-content').on('scroll',function(){

    var sTop = $('.ss-content').scrollTop()
    var newTop = self.el_top + ((sTop/50) * self.speed);
    self.el.css(self.at, newTop);

  });

}

function scroll_banner(){

  var alt_banner = $('.banner-img').height();

  console.log(alt_banner );

  $('.ss-content').on('scroll',function(){

    var sTop = $('.ss-content').scrollTop()
    var newHeight = (alt_banner - sTop) + 50;
    if(newHeight>=0) $('.banner-img').css('height', newHeight);



  });

}

$(function(){

  //Menu
  new scrollMove('.pedregulhos.frente','top',8);
  new scrollMove('.pedregulhos.tras','top',3);
  new scrollMove('.sec-menu .cont-menu','background-position-y',8);

  //Works
  new scrollMove('.sec-works','background-position-y',4);

  //banner vai diminuindo conforme scroll do site
  //scroll_banner();

})
