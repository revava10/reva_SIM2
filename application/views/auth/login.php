<!DOCTYPE html>

<html lang="en">

<head>

```
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

<!-- Font Awesome -->
<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

<!-- SB Admin CSS -->
<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">

<style>
    /* BACKGROUND PINK */
    body {
        background: linear-gradient(135deg, #ffb6d9, #ffd6e8);
    }

    /* CARD */
    .card {
        border-radius: 15px;
    }

    /* JUDUL */
    h4 {
        color: #ff4d94;
        font-weight: bold;
    }

    /* INPUT */
    .form-control-user {
        border-radius: 20px;
    }

    /* BUTTON */
    .btn-primary {
        background-color: #ff80bf;
        border: none;
        border-radius: 20px;
    }

    .btn-primary:hover {
        background-color: #ff4d94;
    }
</style>
```

</head>

<body>

<div class="container">

```
<div class="row justify-content-center">

    <div class="col-lg-6">

        <div class="card shadow-lg mt-5">
            <div class="card-body p-5">

                <div class="text-center">
                    <h4 class="mb-4">Login</h4>
                </div>

                <!-- ALERT ERROR -->
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>
                <?php endif; ?>

                <form method="post" action="<?= site_url('auth/login'); ?>">

                    <div class="form-group">
                        <input type="text" name="username" 
                               class="form-control form-control-user"
                               placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" 
                               class="form-control form-control-user"
                               placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Login
                    </button>

                </form>

            </div>
        </div>

    </div>

</div>
```

</div>

<!-- JS -->

<script src="<?= base_url('assets/vendor/jquery/jquery.min.js');?>"></script>

<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

<script src="<?= base_url('assets/js/sb-admin-2.min.js');?>"></script>

</body>
</html>
