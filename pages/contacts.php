<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Formula 1</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
        margin: 0;
        background-color: rgb(29, 29, 29);
        color: white;
        font-family: 'Poppins', sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .contact-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px 20px;
    }

    .contact-form-box {
        background: #1a1a1a;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.5);
        width: 100%;
        max-width: 600px;
        border: 1px solid rgba(255,255,255,0.05);
    }

    .contact-form-box h1 {
        color: #e10600;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 32px;
        margin-bottom: 30px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 14px;
        color: #888;
        font-weight: 500;
        text-transform: uppercase;
    }

    .form-group input, .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        background: #252525;
        border: 1px solid #333;
        border-radius: 8px;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        transition: border-color 0.3s;
    }

    .form-group input:focus, .form-group textarea:focus {
        border-color: #e10600;
        outline: none;
    }

    .form-group textarea {
        height: 150px;
        resize: vertical;
    }

    .error-message {
        color: #ff3333;
        font-size: 12px;
        margin-top: 5px;
        min-height: 18px;
    }

    #submit-btn {
        width: 100%;
        padding: 15px;
        background: #e10600;
        border: none;
        border-radius: 8px;
        color: white;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 16px;
        text-transform: uppercase;
        cursor: pointer;
        transition: background 0.3s, transform 0.2s;
    }

    #submit-btn:hover {
        background: #ff1e1e;
        transform: translateY(-2px);
    }
  </style>
</head>

<body>

  <?php
include ("header.html");
?>

  <div class="contact-container">
    <div class="contact-form-box">
        <h1>Contact Us</h1>
        <form id="contactForm" action="contact.php" method="POST" onsubmit="return validateForm();">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="username" placeholder="Enter your name" required>
                <div class="error-message" id="nameError"></div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <div class="error-message" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="How can we help?" required></textarea>
                <div class="error-message" id="messageError"></div>
            </div>

            <button type="submit" id="submit-btn">Send Message</button>
        </form>
    </div>
  </div>

  <script>
    const nameRegex = /^[A-Z a-z]{3,20}$/;
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    function validateForm() {
      const nameInput = document.getElementById('name');
      const nameError = document.getElementById('nameError');
      const emailInput = document.getElementById('email');
      const emailError = document.getElementById('emailError');
      const messageInput = document.getElementById('message');
      const messageError = document.getElementById('messageError');

      nameError.innerText = '';
      emailError.innerText = '';
      messageError.innerText = '';

      let isValid = true;

      if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Please enter a valid name (3-20 characters)';
        isValid = false;
      }
      
      if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Please enter a valid email address';
        isValid = false;
      }
      
      if (messageInput.value.length < 5) {
        messageError.innerText = 'Please write at least 5 characters';
        isValid = false;
      }

      if (isValid) {
        // We let the form submit naturally to contact.php
        return true;
      }
      
      return false;
    }
  </script>

  <?php
include ("footer.html");
?>

</body>

</html>