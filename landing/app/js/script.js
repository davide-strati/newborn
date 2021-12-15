$(function() { 

  $('.modal--gravidanza').on('show.bs.modal', function() {
    // Lazy loading
    $('.modal--gravidanza .lazy').lazy({
      bind:"event",
      chainable: false,
    });
  }) 
  $('.modal--neonati').on('show.bs.modal', function() {
    // Lazy loading
    $('.modal--neonati .lazy').lazy({
      bind:"event",
      chainable: false,
    });
  }) 
  $('.modal--kids').on('show.bs.modal', function() {
    // Lazy loading
    $('.modal--kids .lazy').lazy({
      bind:"event",
      chainable: false,
    });
  })   
}) 


$(window).load(function () {

  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      columWidth: '.grid-sizer',
      gutter: '.gutter-sizer',
    }
  });

  $('button[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
    $grid.isotope('layout');
  });  

});

// Aggiunge le classi animazione del carousel Gadgets
  
var animationMobile = "animate__animated animate__slideInDown animate__delay-1s";
var animationDesk = "animate__animated animate__fadeInLeft animate__delay-1s";
var carouselGadget = $('.carousel--gadget');
var caption = carouselGadget.find('.carousel-caption');
var schermo = $(window);


function checkWidth() {
  if($(window).width() < 768) {
    caption.removeClass(animationDesk).addClass(animationMobile);
  };
  if($(window).width() >=768) {
    caption.removeClass(animationMobile).addClass(animationDesk);
  }
}

checkWidth();

// Verifica al cambio dimensione dello schermo
$(window).on('resize', function() {
  checkWidth();
});

// ----- CONTACT FORM ----- //

$("#contact-form").on('submit', function (event) {
  // cancels the form submission
  event.preventDefault();
  submitForm();
});

function submitForm() {
  // Initiate Variables With Form Content
  var name = $("#form_name").val();
  var email = $("#form_email").val();
  var message = $("#form_message").val();

  $.ajax({
    type: "POST",
    url: "contact.php",
    data: "name=" + name + "&email=" + email + "&message=" + message,
    success: function (text) {
      if (text == "success") {
        formSuccess();
        console.log("Fatto");
      }
    },
    error: function () {
      console.log("Errore dio banana");
    }
  });
}
function formSuccess() {
  $("#msgSubmit").removeClass("d-none");
}