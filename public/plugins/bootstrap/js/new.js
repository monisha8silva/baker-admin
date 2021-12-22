$(function () {
    $('#WAButton').floatingWhatsApp({
        phone: '(+94)-715356550', //WhatsApp Business phone number
        headerTitle: 'Chat with us on WhatsApp!', //Popup Title
        popupMessage: 'Hello, how can we help you?', //Popup Message
        showPopup: true, //Enables popup display
        buttonImage: '<img src="https://img.icons8.com/color/48/000000/whatsapp--v3.png"/>', //Button Image
        //headerColor: 'crimson', //Custom header color
        //backgroundColor: 'crimson', //Custom background button color
        position: "right" //Position: left | right

    });
});

// $(function() {
//     $(".button").on("click", function() {
//       var $button = $(this);
//       var $parent = $button.parent(); 
//       var oldValue = $parent.find('.input').val();
   
//       if ($button.text() == "+") {
//          var newVal = parseFloat(oldValue) + 1;
//        } else {
//           // Don't allow decrementing below zero
//          if (oldValue > 1) {
//            var newVal = parseFloat(oldValue) - 1;
//            } else {
//            newVal = 1;
//          }
//          }
//        $parent.find('a.add-to-cart').attr('data-quantity', newVal);
//        $parent.find('.input').val(newVal);
//     });
//    });
