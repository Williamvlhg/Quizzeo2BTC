<?php include '../header.php';
    session_start();
    if(isset($_SESSION['id'])){
        header("Location: /content");
    } 
?>

<div class="container" id="container">
        <div class="form-container sign-up">
            <form action="../processus/signup.php" method="POST">
                <h1>Create Account</h1>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <img src="../processus/captcha.php"/>
                <input type="text" name="captcha"/>
                <button onclick="form.submit();">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="../processus/logger.php" method="POST">
                <h1>Sign In</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <img src="../processus/captcha.php"/>
                <input type="text" name="captcha">
                <button onclick="form.submit();">Sign In</button>
                
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

<?php include '../footer.php' ?>