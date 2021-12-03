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


// ----- CONTACT FORM ----- //

$("#contact-form").submit(function (event) {
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