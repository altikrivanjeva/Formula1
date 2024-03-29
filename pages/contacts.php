<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact</title>
  <link rel="stylesheet" href="contact.css">

  <link rel="icon" type="image/x-icon" href="assets/logot">


</head>

<body>

  <?php
include ("header.html");
?>
<!-- login button -->
<div class="login-button">
<button onclick="window.location.href='../pages/login/index.php'">Login/Register</button>
</div>

  <form action="contact.php" method="post">
    <div id="contact">

      <label for="name">Name</label>
      <input type="text" name="username" id="name" placeholder=" Name">
      <div class="error-message" id="nameError"></div>

      <br>
      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Email">
      <div class="error-message" id="emailError"></div>
      <br>
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Write your message..."></textarea>
      <div class="error-message" id="messageError"></div>
      <br>
      <button type="submit" onclick="validateForm()" id="submit">Submit</button>

    </div>
  </form>

  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>

      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>

  <script>
    let nameRegex = /^[A-Z][a-z]{3,8}$/;
    let emailRegex = /[a-zA-Z.-_]+@[a-z]+\.[a-z]{2,3}$/;
    let messageRegex = /^[a-zA-Z][\s\S]{4,}$/;

    function validateForm() {
      let nameInput = document.getElementById('name');
      let nameError = document.getElementById('nameError');
      let emailInput = document.getElementById('email');
      let emailError = document.getElementById('emailError');
      let messageInput = document.getElementById('message');
      let messageError = document.getElementById('messageError');
      nameError.innerText = '';
      emailError.innerText = '';
      messageError.innerText = '';
      if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Invalid name';
        return;
      }
      if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email';
        return;
      }
      if (!messageRegex.test(messageInput.value)) {
        messageError.innerText = 'You need to write more than 5 characters';
        return;
      }
      location.reload();
      alert('Your message submitted successfully!');
    }
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <br>
  <br>

  <?php
include ("footer.html");
?>

</body>

</html>