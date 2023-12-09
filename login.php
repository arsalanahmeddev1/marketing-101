<?php include "include/head.php"; ?>
<main class="login-page">
    <div class="login-head d-flex justify-content-between px-5">
        <h1>Marketing 101</h1>
        <p>Already have an account? <a href="#">Sign in</a></p>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-10">
                <form action="#" class="form box-shadow">
                    <div class="form-head text-center py-5">
                        <h2>Login</h2>
                        <p>Login with your entract credentials</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <div class="form-feilds">
                                <div class="email my-4">
                                    <label>Email address</label>
                                    <input type="email" id="email" placeholder="name@company.com">
                                </div>
                                <div class="email">
                                    <label>Password</label>
                                    <input type="password" id="email" placeholder="0 0 0 0">
                                </div>
                                <div class="form-options d-flex justify-content-between">
                                    <div class="check">
                                        <input type="checkbox" name="" id="" value="">Remember me
                                    </div>
                                    <a href="">Forget Password</a>
                                </div>
                                <button class="primary-btn">Contine</button>
                                <p class="br">or</p>
                                <div class="create-account">
                                    <h2>Create an account</h2>
                                    <div class="email my-4">
                                        <label>Email address</label>
                                        <input type="email" id="email" placeholder="name@company.com">
                                    </div>
                                    <div class="form-options d-flex justify-content-between">
                                        <div class="check">
                                            <input type="checkbox" name="" id="" value="">Account Help
                                        </div>
                                        <a href="">Create Account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include "include/footer.php"; ?>