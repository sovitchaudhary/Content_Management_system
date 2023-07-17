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