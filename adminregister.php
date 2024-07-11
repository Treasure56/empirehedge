<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.empirehedge.co/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:43:57 GMT -->
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
      <h1>Signup</h1>

      <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="adminregister.php">Signup</a></li>
      </ol>
    </div>
  </header>
  <main>
    <section class="section-base">
      <div class="container">


        <p class="mb-4" style="color: rgb(23, 182, 23)"></p>

        <div class="row">
          <div class="col-lg-8">
            <div class="title">
              <h2> Admin Signup</h2>
            </div>

            <script language="javascript">
              function checkform() {
                if (document.regform.fullname.value == "") {
                  alert("Please enter your full name!");
                  document.regform.fullname.focus();
                  return false;
                }
                if (document.regform.username.value == "") {
                  alert("Please enter your username!");
                  document.regform.username.focus();
                  return false;
                }
                if (
                  !document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)
                ) {
                  alert(
                    "For username you should use English letters and digits only!"
                  );
                  document.regform.username.focus();
                  return false;
                }
                if (document.regform.password.value == "") {
                  alert("Please enter your password!");
                  document.regform.password.focus();
                  return false;
                }
                if (
                  document.regform.password.value !=
                  document.regform.password2.value
                ) {
                  alert("Please check your password!");
                  document.regform.password2.focus();
                  return false;
                }
                if (document.regform.email.value == "") {
                  alert("Please enter your e-mail address!");
                  document.regform.email.focus();
                  return false;
                }
                if (
                  document.regform.email.value !=
                  document.regform.email1.value
                ) {
                  alert("Please retype your e-mail!");
                  document.regform.email.focus();
                  return false;
                }
                for (i in document.regform.elements) {
                  f = document.regform.elements[i];
                  if (f.name && f.name.match(/^pay_account/)) {
                    if (f.value == "") continue;
                    var notice = f.getAttribute("data-validate-notice");
                    var invalid = 0;
                    if (f.getAttribute("data-validate") == "regexp") {
                      var re = new RegExp(
                        f.getAttribute("data-validate-regexp")
                      );
                      if (!f.value.match(re)) {
                        invalid = 1;
                      }
                    } else if (f.getAttribute("data-validate") == "email") {
                      var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                      if (!f.value.match(re)) {
                        invalid = 1;
                      }
                    }
                    if (invalid) {
                      alert("Invalid account format. Expected " + notice);
                      f.focus();
                      return false;
                    }
                  }
                }
                if (document.regform.agree.checked == false) {
                  alert("You have to agree with the Terms and Conditions!");
                  return false;
                }
                return true;
              }

              function IsNumeric(sText) {
                var ValidChars = "0123456789";
                var IsNumber = true;
                var Char;
                if (sText == "") return false;
                for (i = 0; i < sText.length && IsNumber == true; i++) {
                  Char = sText.charAt(i);
                  if (ValidChars.indexOf(Char) == -1) {
                    IsNumber = false;
                  }
                }
                return IsNumber;
              }
            </script>

            <form method="post" onsubmit="return checkform()" class="form-box form-ajax" name="regform" action="includes/adminregistersub.php">
              <input type="hidden" name="form_id" value="16759681727555" />
              <input type="hidden" name="form_token" value="ea2d428424fc66734d4f449031e22dc4" />
              <input type="hidden" name="register" value="register" />
              <input type="hidden" name="refferal" value="" class="referal" />
              <script>
                window.addEventListener('load', () => {
                  const search = window.location.search;
                  if (search.split('=')[1]) {
                    document.querySelector('.referal').value = search.split('=')[1]
                  }
                  // console.log(window.location.search);

                })
                // document.querySelector('.referal')
              </script>
              <input type="hidden" name="action" value="signup" />
             
              <div class="row">
              <div class="col-lg-6">
                  <p>E-mail Address</p>
                  <input type="text" name="email" value class="input-text" />
                </div>
                <div class="col-lg-6">
                  <p>Retype E-mail Address</p>
                  <input type="text" name="email1" value class="input-text" />
                </div>
                <div class="col-lg-6">
                  <p>password</p>
                  <input type="password" name="password" value class="input-text" />
                </div>
                <div class="col-lg-6">
                  <p>Retype Password</p>
                  <input type="password" name="password2" value class="input-text" />
                </div>
                <div class="col-lg-6">
                  <p>Code</p>
                  <input type="text" name="code" value class="input-text" />
                </div>
                <!-- <div class="col-lg-6">
                                    <p>Your Bitcoin Account</p>
<input type=text class="input-text" name="pay_account[1109][Address]" value=""></div>
 <div class="col-lg-6">
                                    <p>Your Tether(BEP20) Account</p>
<input type=text class="input-text" name="pay_account[1129][Address]" value=""></div>
-->
               
                <!-- <div class="col-lg-6">
                  <p>Your Upline</p>
                  <input type="text" value="N/A (n/a)" class="input-text" disabled />
                </div> -->

                <div class="col-lg-12">
                  <input type="checkbox" required name="agree" value="1" /> I agree
                  with <a href="terms.php">Terms and conditions</a>
                </div>
              </div>
                <?php include 'partials/message.php' ?>
              <button class="btn btn-xs" type="submit">Signup</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php include 'partials/footer.php'; ?>

  <div class="confirmation_screen_modal">
    <div class="confirmation_screen">
      <div class="close">
        &times;
      </div>
      <div class="main_mail">
        <div class="image">
          <img src="images/topng.png" alt="mail">
        </div>
        <div class="email_header">Email Confirmation</div>
        <p>We have sent an email to <span class="email"></span> to confirm the validity of your email address. After receiving the email follow the link provided to complete your registration</p>
        <div class="mail_footer">
          <p>if you did not receive any mail <span>Resend confirmation email</span></p>
        </div>
      </div>
    </div>
    <script async src="../cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      let close = document.querySelector('.close');
      const email = document.querySelector('span.email');
      let confirmModal = document.querySelector('.confirmation_screen_modal');
      close.addEventListener('click', () => {
        confirmModal.style.display = 'none';
        history.back();
      })
      // window.addEventListener('load', ()=>{
      //   const search = window.location.search;
      //   if(search){
      //     const newEncrypted = search.split('?')[1];
      //     // console.log(search.split('?')[1]);

      //   var bytes = CryptoJS.AES.decrypt(newEncrypted,'xcel!!!rise');
      //   const originalText = bytes.toString(CryptoJS.enc.Utf8);
      //   email.innerHTML= originalText ? originalText :'example@gmail.com';
      //   confirmModal.style.display = 'flex';


      //   }





      // })
    </script>
  </div>
</body>

<!-- Mirrored from www.empirehedge.co/register by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:43:57 GMT -->

</html>