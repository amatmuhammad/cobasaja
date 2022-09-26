<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <title>MedChecker</title>
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <meta name="viewport" content="width=device-eidth, initial-scale=1.0" />
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {

    ?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Login Gagal</strong> <?php echo $_GET['pesan']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
    ?>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>

            </div>
            <form action="ceklogin.php" method="post" class="form">
                <label for="email" style="padding-top: 13px">&nbsp;
                    email
                </label>
                <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px">&nbsp; Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <a href="#">
                    <legend id="forgot-pass">Lupa Password?</legend>
                </a>

                <button id="submit-btn" class="btn" type="submit" name="btnLogin" value="LOGIN">
                    LOGIN
                </button>
                <div class="text-center">
                    Belum punya akun? silahkan <a href="daftar.php" id="signup">Daftar</a>
                </div>
            </form>
        </div>

    </div>
</body>


</html>