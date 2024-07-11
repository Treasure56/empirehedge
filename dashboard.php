<?php include 'partials/dashboard_scripts.php'; ?>

        <div class="container-fluid mb-5">
            <!-- Title -->
            <h1 class="h2">
                Welcome, <span style="text-transform: capitalize;"><?= $user['full_name'] ?></span>
            </h1>
            <div>
            </div>
            <div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="py-4 alert alert-primary alert-dismissible fade show" role="alert">
                        Welcome back to empirehedge.co !
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
      <div class="col-12">
          <div class="py-4 alert alert-info alert-dismissible fade show" role="alert">
              Join   empirehedge.co  and invest with confidence
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      </div>
  </div> -->
            <div class="row">
                <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-primary"></span>
                                            Account Balance
                                        </h5>

                                        <!-- Subtitle -->
                                        <h2 class="mb-0 main__bals">
                                            0
                                            <script>
                                                function formatCurrency(amount) {
                                                    return new Intl.NumberFormat('en-US', {
                                                        style: 'currency',
                                                        currency: 'USD'
                                                    }).format(amount);
                                                }
                                                document.querySelector(".main__bals").innerHTML = formatCurrency(parseFloat("0"))
                                            </script>
                                        </h2>

                                        <a href="deposit.php" class="fs-6 btn-link mb-0 mt-2 mr-3">
                                            Deposit
                                        </a>
                                        <!-- <span class="">-</span>
                                                             
                              <a href="/transfer-funds" class="fs-6 btn-link mb-0 mt-2 ml-3">
                                  Transfer
                              </a> -->
                                    </div>

                                    <span class="text-primary">
                                        <i class="fi fi-sr-wallet"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>
                                            Total Profit
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            $0.00
                                        </h2>
                                        <!-- Comment -->
                                        <a href="index.php">
                                            <p class="fs-6 btn-link mb-0 mt-2">
                                                View profit history
                                            </p>
                                        </a>
                                    </div>

                                    <span class="text-success">
                                        <i class="fi fi-br-chat-arrow-grow"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                <?php 
                /**
                 * <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-info"></span>
                                            Total Bonus
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            $0.00
                                        </h2>
                                        <!-- Comment -->
                                        <a href="other-history.php" style="visibility: hidden;">
                                            <p class="fs-6 btn-link mb-0 mt-2">
                                                View bonus history
                                            </p>
                                        </a>
                                    </div>

                                    <span class="text-info">
                                        <i class="fi fi-sr-donate"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                 */
                ?>

              <?php 
              /**
               *   <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <!-- <div> -->
                                        <!-- Title -->
                                        <!-- <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-info"></span>
                                            Referral Bonus
                                        </h5> -->
                                        <!-- Subtitle -->
                                        <!-- <h2 class="mb-0">
                                            $0.00
                                        </h2> -->
                                        <!-- Comment -->
                                        <!-- <a href="referrals.php">
                                            <p class="fs-6 btn-link mb-0 mt-2">
                                                View referrals
                                            </p>
                                        </a>
                                    </div> -->

                                    <span class="text-info">
                                        <i class="fi fi-sr-box-dollar"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
               */
              ?>
                <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-success"></span>
                                            Total Deposited
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            $0.00
                                        </h2>
                                        <!-- Comment -->
                                        <a href="accounthistory.php">
                                            <p class="fs-6 btn-link mb-0 mt-2">
                                                View deposits
                                            </p>
                                        </a>
                                    </div>

                                    <span class="text-success">
                                        <i class="fi fi-sr-piggy-bank"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- Card -->
                    <div class="card border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <div>
                                        <!-- Title -->
                                        <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-danger"></span>
                                            Total Withdrawal
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class="mb-0">
                                            $0.00
                                        </h2>
                                        <!-- Comment -->
                                        <a href="index.php">
                                            <p class="fs-6 btn-link mb-0 mt-2">
                                                View withdrawals
                                            </p>
                                        </a>
                                    </div>

                                    <span class="text-danger">
                                        <i class="fi fi-sr-coins"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
               <?php
               /**
                *  <div class="col-lg-3">
                    <div class="card border-0">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <!-- <div class="col d-flex justify-content-between"> -->
                                    <!-- <div> -->
                                        <!-- Title -->
                                        <!-- <h5 class="d-flex align-items-center text-uppercase text-muted fw-semibold mb-2">
                                            <span class="legend-circle-sm bg-secondary"></span>
                                            Referrals
                                        </h5> -->
                                        <!-- Subtitle -->
                                        <!-- <h2 class="mb-0">
                                            0
                                        </h2> -->
                                        <!-- Comment -->
                                        <!-- <a href="referrals.php">
                                            <p class="fs-6 btn-link mb-0 mt-2">
                                                View referrals
                                            </p>
                                        </a>
                                    </div> -->
                                    <!-- <span class="text-secondary">
                                        <i class="fi fi-bs-users-gear"></i>
                                    </span> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                */
               ?>

            </div>

            <div class="mt-4 row">
                <div class="col-12">
                    <div>
                        <h5 class="text-primary h5">Active Plan(s)
                            <span class="text-base count">(0)</span>
                        </h5>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mt-4 row">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="text-center card-body py-4">
                                    <i class="fi fi-sr-location-exclamation"></i>
                                    <p>You do not have an active investment at the moment.</p>
                                    <a href="invest.php" class="btn btn-primary">
                                        Contribute Now
                                    </a>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4 row">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <h6 class="text-primary h5">
                            Recent transactions
                        </h6>
                        <div class="">
                            <a href="accounthistory.php" class="btn btn-primary btn-sm">
                                View all transactions
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Amount</th>
                                            <th>Payment mode</th>
                                            <th>Status</th>
                                            <th>Date created</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <!-- Render "No referrals yet" message when referral.length is 0 -->
                                        <tr>
                                            <td colspan="3">
                                                No record yet
                                            </td>
                                        </tr>




                                    </tbody>
                                </table>
                                <div>
                                    <div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 d-flex">
      
      <div class="card border-0 flex-fill w-100">
          <div class="card-header border-0 card-header-space-between">
           
              <h2 class="card-header-title h4 text-uppercase">
                  Real time market data
              </h2>
          </div>
          <div class="card-body d-flex flex-column">
            
              <div class="tradingview-widget-container" style="width: 100%; height: 550px;">
                  <iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://www.tradingview-widget.com/embed-widget/forex-cross-rates/?locale=en#%7B%22width%22%3A%22100%25%22%2C%22height%22%3A550%2C%22currencies%22%3A%5B%22EUR%22%2C%22USD%22%2C%22JPY%22%2C%22GBP%22%2C%22CHF%22%2C%22AUD%22%2C%22CAD%22%2C%22NZD%22%2C%22CNY%22%2C%22TRY%22%2C%22SEK%22%2C%22NOK%22%5D%2C%22isTransparent%22%3Atrue%2C%22colorTheme%22%3A%22light%22%2C%22utm_source%22%3A%22tradehood.co%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forex-cross-rates%22%2C%22page-uri%22%3A%22tradehood.co%2Fdashboard%22%7D" title="forex cross-rates TradingView widget" lang="en" style="user-select: none; box-sizing: border-box; display: block; height: calc(518px); width: 100%;"></iframe>
                  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/?utm_source=tradehood.co&amp;utm_medium=widget_new&amp;utm_campaign=forex-cross-rates" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on
                              TradingView</span></a></div>
                  
              <style>
.tradingview-widget-copyright {
  font-size: 13px !important;
  line-height: 32px !important;
  text-align: center !important;
  vertical-align: middle !important;
 
  font-family: -apple-system, BlinkMacSystemFont, 'Trebuchet MS', Roboto, Ubuntu, sans-serif !important;
  color: #9db2bd !important;
}

.tradingview-widget-copyright .blue-text {
  color: #2962FF !important;
}

.tradingview-widget-copyright a {
  text-decoration: none !important;
  color: #9db2bd !important;
}

.tradingview-widget-copyright a:visited {
  color: #9db2bd !important;
}

.tradingview-widget-copyright a:hover .blue-text {
  color: #1E53E5 !important;
}

.tradingview-widget-copyright a:active .blue-text {
  color: #1848CC !important;
}

.tradingview-widget-copyright a:visited .blue-text {
  color: #2962FF !important;
}
</style></div>
          
          </div>
      </div>
  </div> -->
            </div>

        </div>

        <!-- Footer -->
        <footer class="mt-auto">
            <div class="container-fluid mt-4 mb-6 text-muted">
                <div class="row justify-content-between">
                    <div class="col">
                        All Rights Reserved © empirehedge.co 2023
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

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
        </script>

        <script src="livewire/livewire6406.html?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false"></script>
        <script data-turbo-eval="false" data-turbolinks-eval="false">
            window.livewire = new Livewire();
            window.Livewire = window.livewire;
            window.livewire_app_url = '';
            window.livewire_token = 'GybFujKl3iopgdJQTshgS28drpFHIG1g65gFSP7v';
            window.deferLoadingAlpine = function(callback) {
                window.addEventListener('livewire:load', function() {
                    callback();
                });
            };
            let started = false;
            window.addEventListener('alpine:initializing', function() {
                if (!started) {
                    window.livewire.start();
                    started = true;
                }
            });
            document.addEventListener("DOMContentLoaded", function() {
                if (!started) {
                    window.livewire.start();
                    started = true;
                }
            });
        </script>
        <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
        <script src="assets/ext/dist/toastr.min.js"></script>
        <script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = '72b452f3afab8a71a5a98a43dc4bf4ae47fee7c5';
            window.smartsupp || (function(d) {
                var s, c, o = smartsupp = function() {
                    o._.push(arguments)
                };
                o._ = [];
                s = d.getElementsByTagName('script')[0];
                c = d.createElement('script');
                c.type = 'text/javascript';
                c.charset = 'utf-8';
                c.async = true;
                c.src = '../www.smartsuppchat.com/loaderd41d.js?';
                s.parentNode.insertBefore(c, s);
            })(document);
        </script>
        <noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
    </main> <!-- / main -->


</body>

<!-- Mirrored from www.empirehedge.co/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:33:13 GMT -->

</html>