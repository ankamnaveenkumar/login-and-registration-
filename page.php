<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      
    }
    .naveen {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 90vh;
      margin: 40px;   
    }
    .container {
      background-image: linear-gradient(to right,rgba(255,255,0,0.7), rgba(0,128,0,0.7), rgba(0,0,255,0.7), rgba(75,0,130,0.7), rgba(238,130,238,0.7));
        background-repeat: no-repeat;
        background-size: 100% 100%;
      width: 600px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
    }
    .left-container,
    .right-container {
      width: 50%;
      color: white;
      padding: 20px;
    }
    .right-container {
      background-color: rgba(0, 123, 255, 0.4);
    }
    .content {
      margin-top: 20px;
    }
    .fa {
      font-size: 48px;
      color: red;
    }
    h2, h3 {
      color: black;
    }
    p {
      text-align: center;
      color: orange;
      font-size: 50px;
      font-family: bold;
    }
    .input-area {
      margin-top: 5px;
    }
    .form-inp {
      padding: 10px 5px;
      border-radius: 8px;
    }
    .form-inp input {
      text-align: start;
      width: 100%;
      font-size: 13.4px;
      color: black;
      border: 5px solid #e3e3e3; /* Changed border-width to 5px */
      background: transparent;
      height: 50px;
      font-size: 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
    }

    .form-inp input:hover {
      background-color: white;
      border-color: blue;
      border-width: 5px; /* Added border-width */
      border-style: solid; /* Added border-style */
      transition: transform 0.9s; /* Added transition property for smooth transformation */
    }

    .form-inp input:hover::placeholder {
      color: transparent;
    }
    .login-button {
      background-color: transparent;
      width: 100%;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 30px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border: 2px solid white;
      outline: none;
    }

    .login-button:hover {
      background-color: blue;
    }

    .newuser {
      padding: 20px;
      font-size: 33px;
      font-style: bold;
      color: black; /* Changed color to black */
    }
    .label{
      font-size: 35px; /* Increased label size */
    }
    .newuser a {
      color: black; /* Changing the color of the link */
    }
  </style>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="naveen">
    <div class="container">
      <div class="row">
        <div class="col-md-6 bg-primary-opacity left-container">
          <p>ABOUT COMPANY</p>
          <h2 class="underline-text">YOUR VERTICAL MOBILITY PARTNER OF CHOICE :-</h2>
          <div class="content">
            <h3>G-Star Elevators is more than an elevator company - it's a promise of seamless vertical mobility. Founded on a passion for excellence, we bring a wealth of experience and a customer-centric approach to every project. Our dedicated team is committed to elevating spaces and experiences, one floor at a time.</h3>
            <br>
            <a href="tel:++916309758551" title="call"> <i class="material-icons" style="font-size:56px ; color:black">perm_phone_msg</i></a>
            <span style="margin-left: 400px;"></span>
            <a href="mailto:info@gstarelevators.com" title="E-mail"><i class="material-icons" style="font-size:56px ;color:black">mail</i></a>
          </div>
        </div>
        <div class="col-md-6 right-container">
          <p>G-Star</p>
          <p>WELCOME BACK</p>
          <div class="input-area">
            <form action="#" method="post" id="loginForm">
              <div class="form-inp">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" placeholder="Email" required>
              </div>
              <div class="form-inp">
                <label for="password" class="label">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" required*>
              </div>

              <div class=" kumar btn w-100">
                <button class="login-button w-100">Login</button>
              </div>
            </form>
            <div class="newuser text-danger fs-3">
              <a href="registration.php">Register Here</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS (Optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function resetForm() {
      document.getElementById("loginForm").reset();
    }
  </script>
</body>
</html>
