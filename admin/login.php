<?php
    include "includes/header.php";
?>

<body style="background-image:url('../assets/images/kk.jpeg'); background-size: cover;">
    <div class="row" style="margin-top: 80px;">
        <div class="col l6 offset-l3 m8 offset-m2 s12">
            <div class="card-panel center blue-grey" style="margin-bottom: 0px;">
                <ul class="tabs blue-grey">
                    <li class="tab">
                        <a href="#login" class="white-text" style="font-size: 20px;">Login</a>
                    </li>
                    <li class="tab">
                        <a href="#signup" class="white-text" style="font-size: 20px;">Sign Up</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- Login form here -->
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
            <div class="card-panel center" style="margin-top: 1px;">
                <h4>Login To Continue</h4>
                <?php
                    if(isset($_SESSION['message'])){
                      echo $_SESSION['message'];
                      unset($_SESSION['message']);  
                    }
                ?>
                <form action="login_check.php" method="POST">
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
                        <div class="error-message" id="email-error" style="display: none; color: red;">Invalid Email
                            Format
                        </div>
                        <div class="success-message" id="email-success" style="display: none; color: green;">Valid Email
                        </div>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <input type="submit" name="login" class="btn" value="LOGIN">
                </form>

            </div>
        </div>
        <!-- Signup form -->
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
            <div class="card-panel center" style="margin-top: 1px;">
                <h4>Signup Now</h4>
                <form action="signup.php" method="POST">
                    <div class="input-field">
                        <input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
                        <div class="error-message" id="email-error" style="display: none; color: red;">Invalid Email
                            Format
                        </div>
                        <div class="success-message" id="email-success" style="display: none; color: green;">Valid Email
                        </div>
                    </div>

                    <div class="input-field">
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <input type="submit" name="signup" class="btn" value="Sign Up">
                </form>
            </div>
        </div>
    </div>

    <?php
        include "includes/footer.php";
    ?>