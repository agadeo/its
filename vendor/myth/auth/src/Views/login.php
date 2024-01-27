<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>KESBANGPOL - APLIKASI INDEKS KERAWANAN SOSIAL (IKP)</title>

    <!-- vendor css -->
    <link href="<?= base_url('temp/lib/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('temp/lib/ionicons/css/ionicons.min.css') ?>" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?= base_url('temp/css/bracket.css') ?>">
  </head>

  <body>

    <div class="row no-gutters flex-row-reverse ht-100v">
      <div class="col-md-6 bg-gray-200 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-250 wd-xl-350 mg-y-30">
          <h4 class="tx-inverse tx-center">lOGIN</h4>
          <p class="tx-center mg-b-60">Welcome back my friend! Please sign in.</p>
                    <?= view('Myth\Auth\Views\_message_block') ?>
          <form action="<?= url_to('login') ?>" method="post"><?= csrf_field() ?>
<?php if ($config->validFields === ['email']): ?>
          <div class="form-group">
            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                   name="login" placeholder="<?=lang('Auth.email')?>">
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>
          </div><!-- form-group -->
<?php else: ?>
          <div class="form-group">
              <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
              <div class="invalid-feedback">
                <?= session('errors.login') ?>
              </div>          
            </div><!-- form-group -->
<?php endif; ?>            
          <div class="form-group">
              <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>">
              <div class="invalid-feedback">
                <?= session('errors.password') ?>
              </div>
          </div><!-- form-group -->

            
<?php if ($config->allowRemembering): ?>
            <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                <?=lang('Auth.rememberMe')?>
              </label>
            </div>
<?php endif; ?>
<?php if ($config->activeResetter): ?>
          <a href="<?= url_to('forgot') ?>" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
<?php endif; ?>
          <button type="submit" class="btn btn-info btn-block"><?=lang('Auth.loginAction')?></button>
          </form>
          <hr>

<?php if ($config->allowRegistration) : ?>
          <div class="mg-t-60 tx-center">Not yet a member? <a href="<?= url_to('register') ?>" class="tx-info">Daftar</a></div>
<?php endif; ?>
        </div><!-- login-wrapper -->
      </div><!-- col -->
      <div class="col-md-6 bg-br-primary d-flex align-items-center justify-content-center">
        <div class="wd-250 wd-xl-450 mg-y-30">
          <div class="tx-center signin-logo tx-26 tx-bold tx-white"><img src="<?= base_url('logo.png') ?>" width="100" ><br><span class="tx-normal"></span> KESBANGPOL <span class="tx-normal"></span><br>APLIKASI INDEKS KERAWANAN SOSIAL (IKP)</div> 

          <h5 class="tx-white">IKP Adalah?</h5>
          <p class="tx-white-6">Sebuah instrumen yang digunakan untuk mengukur, memantau dan memonitor perkembangan kerawanan sosial di suatu wilayah pada periode tertentu.</p>
          <a href="<?= base_url('home') ?>" class="btn btn-outline-light bd bd-white bd-2 tx-white pd-x-25 tx-uppercase tx-12 tx-spacing-2 tx-medium">Cek statistik</a>
        </div><!-- wd-500 -->
      </div>
    </div><!-- row -->

    <script src="<?= base_url('temp/lib/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('temp/lib/jquery-ui/ui/widgets/datepicker.js') ?>"></script>
    <script src="<?= base_url('temp/lib/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  </body>
</html>
