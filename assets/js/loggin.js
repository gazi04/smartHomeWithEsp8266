$(document).ready(function() {
  const usernameInput = $("#username");
  const passwordInput = $("#password");
  usernameInput.val("");
  passwordInput.val("");

  $("#loginForm").on("submit", function(event) {
    event.preventDefault();

    const isUsernameValid = usernameInput.val().trim() === "";
    const isPasswordValid = passwordInput.val().trim() === "";

    if(isUsernameValid || isPasswordValid){
      alert("Duhet te jepet emri dhe passwordi per tu kyqur.");
      usernameInput.val("");
      passwordInput.val("");
      return;
    }

    $.post("_login.php",
      {
        login: true,
        username: usernameInput.val(),
        password: passwordInput.val()
      },
      function(response) {
        console.log(response);
        if(response.isLoggedIn == true){
          window.location.href = "home.php";
        }
      },
      "json"
    ).fail(function(jqxhr, textstatus, errorthrown) {
        console.error("request failed:", textstatus, errorthrown);
        console.error("response text:", jqxhr);
      });
  });
});
