
$(document).ready(function() {
    $('.image-link').magnificPopup({
      delegate: 'a', 
      type: 'image',
      gallery:{enabled:true}
    });

    $('.gallery-house').magnificPopup({
      delegate: 'a', 
      type: 'image',
      gallery:{enabled:true}
    });

    $('.gallery-schooner').magnificPopup({
      delegate: 'a', 
      type: 'image',
      gallery:{enabled:true}
    });
  });