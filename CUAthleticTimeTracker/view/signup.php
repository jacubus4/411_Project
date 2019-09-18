<?php include('header.html');
?>
<script src="js/signupHandler.js" type="text/javascript" defer></script>


<div class="text-white container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/clock.jpg" alt="Clock" width="72" height="72">
        <h2>CU Athletic Time Tracker</h2>
        <p class="lead">Please fill in all of the fields.</p>
    </div>

    <div class="row justify-content-md-center">

        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Sign Up</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Please enter a valid email address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                            Your username is required.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pwd">Password</label>
                    <input type="text" class="form-control" id="password" placeholder="Password" required="">
                    <div class="invalid-feedback">
                        Your password is required.
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-danger btn-md btn-block" id="btnSignUp" type="button">Sign Up</button>
                </div>

            </form>
        </div>
    </div>

                <footer class="my-5 pt-5 text-muted text-center text-small">
                    <p class="mb-1">© <?php echo date("Y") ?> Clarion University Athletics</p>
                </footer>

</div>
</body>
</html>
