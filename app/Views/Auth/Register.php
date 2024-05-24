<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deikost | Register Page</title>
    <!--begin::Primary Meta Tags-->
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="author" content="ColorlibHQ">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
        integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css"
        integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
        integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Bootstrap Icons)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/adminlte.css">
    <!--end::Required Plugin(AdminLTE)-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo">
            <a href="../index2.html"><img src="<?= base_url(); ?>/assets/img/logo.png" alt="Logo" width="300px"></a>
        </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <?= form_open('login/cekUser'); ?>
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <?php 
                        $isInValidEmail = session()->getFlashdata('errEmail') ? 'is-invalid' : '';
                    ?>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control <?= $isInValidEmail; ?>"
                            placeholder="Email" autofocus>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                        <?php if (session()->getFlashdata('errEmail')): ?>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= session()->getFlashdata('errEmail'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <?php 
                        $isInValidPassword = session()->getFlashdata('errPassword') ? 'is-invalid' : '';
                    ?>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control <?= $isInValidPassword; ?>"
                            placeholder="Password">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        <?php if (session()->getFlashdata('errPassword')): ?>
                        <div id="validationServerPasswordFeedback" class="invalid-feedback">
                            <?= session()->getFlashdata('errPassword'); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-success w-100">Login</button>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div> <!-- /.login-box -->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script>
</body>

</html>