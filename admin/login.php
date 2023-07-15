<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<title>login_page</title>

<body style="background-image:url('../assets/images/kk.jpeg'); background-size: cover;" >
    <div class="row" style="margin-top: 80px;" >
        <div class="col l6 offset-l3 m8 offset-m2 s12">
            <div class="card-panel center blue-grey" style="margin-bottom: 0px;">
                <ul class="tabs blue-grey">
                    <li class="tab">
                        <a href="#login" class="white-text" style="font-size: 20px;" >Login</a>
                    </li>
                    <li class="tab">
                        <a href="#signup"class="white-text" style="font-size: 20px;" >Sign Up</a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- Login form here -->
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
            <div class="card-panel center" style="margin-top: 1px;">
                <h4>Login To Continue</h4>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
                    <div class="error-message" id="email-error" style="display: none; color: red;">Invalid Email Format
                    </div>
                    <div class="success-message" id="email-success" style="display: none; color: green;">Valid Email
                    </div>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="password">
                </div>
                <input type="submit" name="login" class="btn" value="LOGIN">

            </div>
        </div>
        <!-- Signup form -->
        <div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
            <div class="card-panel center" style="margin-top: 1px;">
                <h4>Signup Now</h4>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Enter Email" class="validate">
                    <div class="error-message" id="email-error" style="display: none; color: red;">Invalid Email Format
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
            </div>
        </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var emailInput = document.getElementById('email');
            var emailError = document.getElementById('email-error');
            var emailSuccess = document.getElementById('email-success');

            emailInput.addEventListener('input', function () {
                if (emailInput.validity.valid) {
                    emailError.style.display = 'none';
                    emailSuccess.style.display = 'block';
                } else {
                    emailError.style.display = 'block';
                    emailSuccess.style.display = 'none';
                }
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            var tabs = document.querySelectorAll('.tabs');
            var options = {};
            var instance = M.Tabs.init(tabs, options);
        });
    </script>
</body>

</html>