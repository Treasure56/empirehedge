<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.empirehedge.co/login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:43:57 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>empirehedge.co | Empowering Sustainability Through Recycling</title>
  <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
  <link rel="icon" href="images/favicon%402x.png" type="image/png" sizes="32x32">
  <meta name="description" content="Empirehedge's mission is to monetize and digitalize recycling, fostering sustainability and global participation. Discover how we empower sustainability and create employment opportunities in the recycling sector." />

  <script src="js/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/bootstrap-grid.css" />
  <link rel="stylesheet" href="css/style2768.css?v6.0.0" />
  <link rel="stylesheet" href="css/glide2768.css?v6.0.0" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/content-box.css" />
  <link rel="stylesheet" href="css/media-box.css" />
  <link rel="stylesheet" href="css/contact-form.css" />
  <link rel="stylesheet" href="css/skin2768.css?v6.0.0" />
  <link rel="stylesheet" href="css/proof2768.css?v6.0.0" />
  <link rel="stylesheet" href="css/main_style2768.css?v6.0.0" />
  <link rel="icon" href="image/logo.png" />
  <link rel="stylesheet" href="../maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
  <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
<?php include('partials/header.php'); ?>
  <header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="500" data-natural-width="1920" data-bleed="0" data-image-src="media/hd-wide-5.html" data-offset="0">
    <div class="container">
      <h1>Admin Login</h1>

      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">login</a></li>
      </ol>
    </div>
  </header>
  <main>
    <section class="section-base">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="title">
              <h2>Login</h2>
            </div>

            <!--  -->


            <script language="javascript">
              function checkform() {
                if (document.mainform.username.value == "") {
                  alert("Please type your username!");
                  document.mainform.username.focus();
                  return false;
                }
                if (document.mainform.password.value == "") {
                  alert("Please type your password!");
                  document.mainform.password.focus();
                  return false;
                }
                return true;
              }
            </script>

            <br />
            <form method="post" name="mainform" action="includes/adminloginsub.php" class="form-box form-ajax" onsubmit="return checkform()">
              <input type="hidden" name="login" value="16759680712409" /><input type="hidden" name="form_token" value="36358ad8f27d9baeb5ee54dc19fd925d" />
              <input type="hidden" name="a" value="do_login" />
              <input type="hidden" name="follow" value />
              <input type="hidden" name="follow_id" value />
              <div class="row">
                <div class="col-lg-6">
                  <p>Username</p>
                  <input type="email" name="email" value class="input-text" />
                </div>
                <div class="col-lg-6">
                  <p>Password</p>
                  <input type="password" name="password" value class="input-text" />
                </div>
              </div>
              <a href="forget_password.php">Forgot Password?</a>
              <br /><br />
              <?php include 'partials/message.php' ?>
              <button class="btn btn-xs" type="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'partials/footer.php'; ?>

</body>

</html>