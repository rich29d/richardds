function work(el){

  this.wrk = $(el);
  this.wrk_img = this.wrk.find('.item-img')
  this.wrk_num = this.wrk_img.data('item-num');

  this.event_mouse();

}

work.prototype.event_mouse = function () {

  var self = this;

  self.wrk
    .on('mouseenter',function(){
      self.wrk_img.css('background-image','url(' + assets + 'img/works/gif_' + self.wrk_num + '.gif)');
    })
    .on('mouseleave',function(){
      self.wrk_img.css('background-image','url(' + assets + 'img/works/jpg_' + self.wrk_num + '.jpg)');
    });

};

$(function(){
  $('.item-work').each(function(){
    new work(this);
  })
})
