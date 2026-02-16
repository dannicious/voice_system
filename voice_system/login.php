<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VOICE System Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="login-card">
    <h2>VOICE</h2>

    <form action="loginprocess.php" method="POST">
        <!-- Role selection -->
        <div class="form-group">
            <label for="role">Login as:</label>
            <select id="role" name="role">
                <option value="admin">Admin</option>
                <option value="dean">Dean</option>
                <option value="student">Student</option>
            </select>
        </div>

        <!-- Username -->
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Enter username">
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password">
            <a href="#" class="forgot-password">Forgot Password?</a>
        </div>

        <!-- Login button -->
        <div class="form-group">
            <button type="submit" name="login" value="1" class="login-btn">Login</button>
        </div>
    </form>

  
<!-- Description text below button -->
<div class="login-info">
    <pre class="system-name">Student complaints and suggestions 
        management system </pre>
    <p class="university-name">Bohol Island State University - Balilihan Campus</p>
</div>

</div>

</body>
</html>
