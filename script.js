$(function() {
  // $('body').hide().fadeIn(1500);

  $('#photo_menu').hover(
    function() {
      $('#submenu').fadeIn(300);
    },
    function() {
      $('#submenu').fadeOut(500);
    }
  );

  $('.nav1 li')
        .css({
            left : '40px',
            opacity: 0
        })
        .each(function(i){
            $(this).delay(100 * i)
                .animate({
                    left : '0',
                    opacity: 1
                }, 700);
        });


  //   // ボタンをクリックしたら発動
  // $('button').click(function() {
  //   // class'showUp'をdiv要素に追加
  //   $('div').addClass('showUp');
  // });

});