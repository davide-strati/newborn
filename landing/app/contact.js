$("#contact-form").submit(function(event){
  // cancels the form submission
  event.preventDefault();
  submitForm();
});

function submitForm(){
  // Initiate Variables With Form Content
  var name = $("#form_name").val();
  var email = $("#form_email").val();
  var firm = $("#form_firm").val();
  var message = $("#form_message").val();

  $.ajax({
      type: "POST",
      url: "contact.php",
      data: "name=" + name + "&email=" + email + "&firm=" + firm + "&message=" + message,
      success : function(text){
          if (text == "success"){
              formSuccess();
              console.log("Fatto");
          }
      },
      error: function() {
        console.log("Errore dio banana");
      }
  });
}
function formSuccess(){
  $( "#msgSubmit" ).removeClass( "d-none" );
}