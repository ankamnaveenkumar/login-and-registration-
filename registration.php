<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 50px;
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh;
    }
    .container {
        background-image: linear-gradient(to right,rgba(255,255,0,0.7), rgba(0,128,0,0.7), rgba(0,0,255,0.7), rgba(75,0,130,0.7), rgba(238,130,238,0.7));
        background-repeat: no-repeat;
        background-size: 100% 100%;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
        width: 900px;
        height: 600px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="tel"],
    input[type="submit"],
    select {
        width: 100%;
        padding: 20px;
        margin: 8px 0;
        display: inline-block;
        border: 4px solid black;
        border-radius: 10px;
        box-sizing: border-box;
        font-size: 25px; /* Adjust the value to increase or decrease the text size */
        background-color: transparent; /* Make input types transparent */
    }
    input[type="text"]:hover,
    input[type="email"]:hover,
    input[type="password"]:hover,
    input[type="tel"]:hover,
    input[type="submit"]:hover {
        border: 3px solid blue;
        transition: background-color 0.2s;
        background-color: white;
    }
    .submit {
        padding: 50px 10px;
    }
    input[type="submit"] {
        background-color: transparent;
        color: black;
        cursor: pointer;
        transition: background-color 0.3s; /* Add transition effect */
        padding: 20px;
    }
    input[type="submit"]:hover {
        background-color: blue; /* Change background color on hover */
    }
    select:hover {
        background-color: #blue; /* Change background color of dropdown options on hover */
    }
    .form-group {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }
    .form-group .left-container,
    .form-group .right-container {
        width: 48%;
    }
    select#country_code {
        width: calc(100% - 2px); /* Adjust width to fit container */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 25px; /* Adjust the value to increase or decrease the text size */
        background-color: transparent; /* Make dropdown transparent */
        /* Set size to show all options when hovered */
        size: 10; /* Adjust the value as needed */
    }
    select#country_code:hover {
        background-color: #f2f2f2; /* Add hover effect */
    }

    /* Increase label size */
    label {
        font-size: 25px;
        font-family: bold; 
        font-weight: bold;/* Adjust the value to increase or decrease the label size */
    }
    h2{
        font-size: 40px;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Registration Form</h2>
    <form action="add_file.php" method="post" id="email-form-2">
        <div class="form-group">
            <div class="left-container">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email</label>    
                <input type="email" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="right-container">
                <label for="phone">Country_Code</label>
                <div class="phone">
                    <select name="country_code" id="country_code" onchange="updatePhoneNumberLength()" required>
                        <option value="">Select Country Code</option>
                        <option value="+91">+91 (India)</option>
                        <option value="+44">+44 (United Kingdom)</option>
                        <option value="+971">+971 (United Arab Emirates)</option>
                        <option value="+1">+1 (Canada)</option>
                        <option value="+61">+61 (Australia)</option>
                        <option value="+966">+966 (Saudi Arabia)</option>
                        <option value="+65">+65 (Singapore)</option>
                        <option value="+974">+974 (Qatar)</option>
                        <option value="+60">+60 (Malaysia)</option>
                        <option value="+968">+968 (Oman)</option>
                        <option value="+49">+49 (Germany)</option>
                    </select>
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required>
                </div>
                <label for="location">Location</label>    
                <input type="text" id="location" name="location" pattern="[a-zA-Z0-9\s,.-]" required>
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="Register">
        </div>
    </form>
</div>

<script>
    
    // JavaScript to populate the email from email form into registration form
    window.onload = function() {
        // Get the email input field from email form
        var emailFromEmailForm = document.getElementById('email').value;
        // Set the value of email input field in registration form to the value entered in email form
        document.getElementById('email').value = emailFromEmailForm;
    };
    function updatePhoneNumberLength() {
        var countryCode = document.getElementById("country_code").value;
        var phoneNumberInput = document.getElementById("phone");
        var phoneLengths = {
            "+91": 10,   // India
            "+44": 11,   // United Kingdom (including leading zero)
            "+971": 9,   // United Arab Emirates
            "+1": 10,    // Canada
            "+61": 9,    // Australia
            "+966": 9,   // Saudi Arabia
            "+65": 8,    // Singapore
            "+974": 8,   // Qatar
            "+60": 9,    // Malaysia
            "+968": 8,   // Oman
            "+49": 11    // Germany (including leading zero)
        };
        phoneNumberInput.placeholder = countryCode + " Phone Number"; // Concatenating country code with placeholder
        phoneNumberInput.maxLength = phoneLengths[countryCode];
    }
</script>

</body>
</html>

