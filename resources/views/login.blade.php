<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Login | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('assets/velzon/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/velzon/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/velzon/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/velzon/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('assets/velzon/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
            <div class="bg-overlay"></div>

            <div class="shape">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 1440 120">
                    <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                </svg>
            </div>
        </div>

        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="{{ asset('assets/images/logo/logo-light.png') }}" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- content -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Velzon.</p>
                                </div>
                                <div class="p-2 mt-4">
                                    <form id="login-form">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email address" name="email"
                                                value="{{ old('email') }}" required placeholder="Email"
                                                autocomplete="email" autofocus tabindex="1">
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="#" class="text-muted">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5"
                                                    placeholder="Enter password" id="password-input" name="password"
                                                    required placeholder="Password" autocomplete="current-password"
                                                    tabindex="2">
                                                <button
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                    type="button" id="password-addon"><i
                                                        class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="auth-remember-check" name="remember" {{ old('remember') ? 'checked' : '' }} tabindex="3">
                                            <label class="form-check-label" for="auth-remember-check">Remember
                                                me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit" tabindex="4">Sign
                                                In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-13 mb-4 title">Sign In with</h5>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-primary btn-icon waves-effect waves-light"><i
                                                        class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button"
                                                    class="btn btn-danger btn-icon waves-effect waves-light"><i
                                                        class="ri-google-fill fs-16"></i></button>
                                                <button type="button"
                                                    class="btn btn-dark btn-icon waves-effect waves-light"><i
                                                        class="ri-github-fill fs-16"></i></button>
                                                <button type="button"
                                                    class="btn btn-info btn-icon waves-effect waves-light"><i
                                                        class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                        <div class="mt-4 text-center">
                            <p class="mb-0">Don't have an account ? <a href="/"
                                    class="fw-semibold text-primary text-decoration-underline"> Signup </a> </p>
                        </div>

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())

                                </script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/velzon/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/velzon/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('assets/velzon/js/plugins.js') }}"></script>

    <!-- particles js -->
    <script src="{{ asset('assets/velzon/libs/particles.js/particles.js') }}"></script>
    <!-- particles app js -->
    <script src="{{ asset('assets/velzon/js/pages/particles.app.js') }}"></script>
    <!-- password-addon init -->
    <script src="{{ asset('assets/velzon/js/pages/password-addon.init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const passwordInput = document.getElementById('password-input');
            const passwordAddon = document.getElementById('password-addon');

            passwordAddon.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordAddon.innerHTML = '<i class="ri-eye-off-fill align-middle"></i>';
                } else {
                    passwordInput.type = 'password';
                    passwordAddon.innerHTML = '<i class="ri-eye-fill align-middle"></i>';
                }
            });

            const formLogin = document.querySelector('#login-form');

            formLogin.addEventListener('submit', async (e) => {
                e.preventDefault();

                const formData = new FormData();

                formData.append('email', document.querySelector('#email').value);
                formData.append('password', document.querySelector('#password-input').value);

                try {
                    const response = await axios.post('/api/login', formData);

                    if (response.status === 200) {
                        window.location.href = 'dashboard';
                    }

                } catch (error) {
                    // window.location.reload();
                    console.log(error.response.data);
                }
            });

        })
    </script>
</body>

</html>