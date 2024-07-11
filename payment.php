<?php include 'partials/dashboard_scripts.php'; ?>

<?php
$wallet;
if (!isset($_GET['wallet_id']) || !isset($_GET['amount'])) {
    $wallet = isset($_GET['wallet_id']) ? $_GET['wallet_id'] : '';
    $amount = isset($_GET['amount']) ? $_GET['amount'] : '';

    if ($wallet == "" && $amount == "") {
        $error = 'something went wrong';
        header('Location: deposit.php?&error=' . $error);
        return false;
    }

    $wallet = sanitize($connect, $wallet);
    $btc = sanitize($connect, $btc);
    $uid = $user['id'];

    $sql = "SELECT * FROM wallets WHERE id = '$wallet'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 0) {
        $error = 'Wallet not found';
        header('Location: deposit.php?error=' . $error);
        return false;
    }
    if ($result) {
        $rows = mysqli_fetch_assoc($result);
        $wallet = $rows;
    } else {
        $error = 'something went wrong';
        header('Location: deposit.php?error=' . $error);
        return false;
    }
} else {
    return false;
}

?>

<div class="container-fluid mb-5">
    <div>
    </div>
    <div>
    </div>
    <div class="row">
        <div class="col-12">

            <!--  -->

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h2">
                    Make payment
                </h1>
                <!-- <div>
          <a href="/cancel-payment" class="btn btn-danger btn-sm">
              <i class="fi fi-sr-cross-circle"></i>
              Cancel payment
          </a>
        </div> -->
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                            <img src="https://res.cloudinary.com/dgzmeamz8/image/upload/v1696772175/usdc_ogjmnf.jpg" alt="" srcset="" width="42px" height="37px">
                        </div>
                        <div>
                            <h1 class="amtx"></h1>
                        </div>
                    </div>
                    <!-- Title -->
                    <h3 class="card-title mt-3 mb-0 text-dark"> USDC TRC20</h3>
                    <span class="text-muted m-0 p-0">Pay via USDC TRC20</span>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2" x-data="{
                  address: 'TDU1iAxatb7qSezy78KBQQyAEFQxnHXJVW'.trim(),
                  copyToClipboard(text) {
                      if (!navigator.clipboard) {
                          return alert('Copying to clipboard only works on secure sites viewed through a modern browser.')
                      }
                      navigator.clipboard.writeText(text)
                          .then(() => {
                              var toastOptions = {
                                  'closeButton': false,
                                  'debug': false,
                                  'newestOnTop': false,
                                  'progressBar': false,
                                  'positionClass': 'toast-top-right',
                                  'preventDuplicates': false,
                                  'onclick': null,
                                  'showDuration': '300',
                                  'hideDuration': '1000',
                                  'timeOut': '5000',
                                  'extendedTimeOut': '1000',
                                  'showEasing': 'swing',
                                  'hideEasing': 'linear',
                                  'showMethod': 'fadeIn',
                                  'hideMethod': 'fadeOut'
                              };
                              Command: toastr['success']('Copied to clipboard', 'Success')
                              toastr.options = toastOptions;
                          })
                  },
              }">
                                <div class="text-center">
                                    <p class="m-0">Scan the barcode below to make payment</p>
                                    <img src="http://res.cloudinary.com/dgzmeamz8/image/upload/v1697441368/my_folder_name/xrirjhbwv299842ngoak.jpg" alt="" class="img-fluid w-25 m-0">
                                </div>
                                <div class="mt-5">
                                    <p class="m-0">
                                        Or Send <span class="amtx"></span> to the
                                        address below
                                    </p>
                                    <div class="d-flex mt-2">
                                        <input id="key-02" class="form-control me-3" value="TDU1iAxatb7qSezy78KBQQyAEFQxnHXJVW" readonly="">
                                        <div>
                                            <!-- Button -->
                                            <button class="clipboard btn btn-link px-0" data-clipboard-target="#key-02" data-bs-toggle="tooltip" data-bs-title="Copy to clipboard" x-on:click="copyToClipboard(address)">
                                                <i class="fi fi-br-clipboard"></i>
                                            </button>
                                        </div>

                                    </div>
                                    <small class="d-block mt-1">
                                        <strong>Network Type:</strong>
                                        USDC TRC20
                                    </small>
                                </div>
                                <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                    Mark as Completed
                                </button>

                                <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalCenterTitle">Upload payment
                                                    receipt</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form method="post" action="/accountdeposit" enctype="multipart/form-data">
                                                <input type="hidden" name="_token" value="GybFujKl3iopgdJQTshgS28drpFHIG1g65gFSP7v">
                                                <div class="modal-body m-0">
                                                    <div class="mb-3">

                                                        <input type="file" name="image" class="form-control" required="" accept="image/*">
                                                    </div>
                                                    <input type="hidden" name="amt" value="100">
                                                    <input type="hidden" name="wallet" value="TDU1iAxatb7qSezy78KBQQyAEFQxnHXJVW">
                                                    <input type="hidden" name="account" value="USDC TRC20">
                                                    <input type="hidden" name="depositorName" value="ekene samuel">
                                                </div>
                                                <div class="modal-footer m-0">
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" id="savebtn">Save</button>
                                                </div>
                                                <script>
                                                    // Function to format a number as currency
                                                    function formatCurrency(amount) {
                                                        return new Intl.NumberFormat('en-US', {
                                                            style: 'currency',
                                                            currency: 'USD'
                                                        }).format(amount);
                                                    }

                                                    document.querySelectorAll(".amtx").forEach(function(el) {
                                                        el.innerHTML = formatCurrency(parseFloat('100'));
                                                    });
                                                </script>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<!-- Footer -->
<footer class="mt-auto">
    <div class="container-fluid mt-4 mb-6 text-muted">
        <div class="row justify-content-between">
            <div class="col">
                All Rights Reserved © ecowage.co 2023
            </div>

            <div class="col-auto">
                <div id="google_translate_element">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT-->
<!-- Theme JS -->
<script src="assets/js/theme.bundle.js"></script>
<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit">
</script>

<script src="/assets/js/theme.bundle.js"></script>
<!-- <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
        </script> -->

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<!-- <script src="livewire/livewire.js?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false"></script><script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'GybFujKl3iopgdJQTshgS28drpFHIG1g65gFSP7v';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script> -->
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
<script src="/assets/ext/dist/toastr.min.js"></script>
<!-- <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '72b452f3afab8a71a5a98a43dc4bf4ae47fee7c5';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script> -->
<!-- <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript> -->
</main> <!-- / main -->


</body>

</html>