$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:false,
        nav:false,
        items: 1,
        autoplay: true,
        responsiveRefreshRate: 0
    });
    var height = $(window).height() - 50;

    $('.conteudo-interna').css('min-height',height);
    $('.item-banner').css('height',height);
    $('.banner-home h1.logo').css('height',height);
    $('.banner-home .texto-banner').css('height',height);
    $('.banner-home .content-texto').css('height',height);
    $('.banner-home .text-inner').css('height',height);
    $('.stacktable').stacktable();


    $("#file-upload").change(function(){
        $(".label-upload").text($('#file-upload').val());
    });

  //Máscara 9º dígito
  var SPMaskBehavior = function (val) {
    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  },
  spOptions = {
    clearIfNotMatch: true,
    onKeyPress: function(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
  };

  $('.input-telefone').mask(SPMaskBehavior, spOptions);

    $('#form-familia').validate();
    $('#form-contato').validate();
});
$(window).resize(function() {
    var height = $(window).height() - 50;

    $('.conteudo-interna').css('min-height',height);
    $('.item-banner').css('height',height);
    $('.banner-home h1.logo').css('height',height);	
    $('.banner-home .texto-banner').css('height',height);
    $('.banner-home .content-texto').css('height',height);
    $('.banner-home .text-inner').css('height',height);
});

$(window).load(function(){
  setTimeout(function(){
    $('.loader').fadeOut(1000);
  },1000);

});

// FUNCTION PARA SETAR CLASSE ATIVA NA PAGINA ATUAL
$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("nav ul li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("ativo");

          if (pgurl == 'interna.php?referencia=blog-detalhado' && $(this).attr("href") == 'interna.php?referencia=blog')
            $(this).addClass("ativo");
     })
});

$(function()
{
  $('.scroll').jScrollPane({
      verticalDragMinHeight: 35,
      verticalDragMaxHeight: 35,
  });
});