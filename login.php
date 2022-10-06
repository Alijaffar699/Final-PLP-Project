<!DOCTYPE html>
<html lang="en">
<head>,
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT</title>
	
    <link rel="stylesheet" href="loginstyles.css">

</head>
<body>
    <form  id="create-account-form" action="project.html" method="GET">
        
        <div class="title">
            <h2>Create Account</h2>
        </div>
        <!-- USERNAME -->
        <div class="input-group">
            <label for="username">Name</label>
            <input type="text" id="username" placeholder="Name" name="username">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- EMAIL -->
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Email" name="email">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- PASSWORD -->
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!-- CONFIRM PASSWORD -->
        <div class="input-group">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" placeholder="Password" name="confirmpassword">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>

        <button type="submit" class="btn">Submit</button>
    </form>


    <!-- JAVASCRIPT -->
    <script src="loginjs.js"></script>
</body>
</html>