
$('#registration-btn').click(function () {
  $.ajax({
    url: 'index.php',
    type: 'POST',
    data: 'username=admin&password=admin',
    success: function(data){
        localStorage.setItem('login', data);
        console.log('registration: success!');
        $("#system-message").html( "Registration: success!" );
    },
    error: function(jqXHR, textStatus, errorThrown){
      console.log(jqXHR, textStatus, errorThrown);
      alert("Error connection");
    }
  });
});
