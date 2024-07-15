<?php include 'partials/dashboard_scripts.php'; ?>

<div class="container-fluid mb-5">
    <!-- Title -->
    <h1 class="h2">
        Deposit into your account
    </h1>
    <div wire:id="wOmfdIHyTPoGj5fFFC4Y">
        <div>
        </div>
        <div>
        </div>
        <div class="row" x-data="">

        </div>
        <form action="includes/withdrawsub.php" method="POST" class="row  g-3 align-items-center row mt-3 col-md-6" id="form-control" enctype="multipart/form-data">

        <?php include_once('partials/message.php'); ?>
        
            <div class="m-0">
                <label class="form-label">Wallet</label>
                <?php
                if ($user['acc_ust'] || $user['acc_eth'] || $user['acc_btc']) {
                ?>
                    <select name="wallet" class="form-select" wire:model="sortValue">
                        <?php if ($user['acc_btc'] && $user['acc_btc'] != "") {
                            echo '<option value="' . $user['acc_btc'] . '||||' . 'BTC">BTC</option>';
                        } ?>
                        <?php if ($user['acc_eth'] && $user['acc_eth'] != "") {
                            echo '<option value="' . $user['acc_eth'] . '||||' . 'Ethereum">Ethereum</option>';
                        } ?>
                        <?php if ($user['acc_ust'] && $user['acc_ust'] != "") {
                            echo '<option value="' . $user['acc_ust'] . '||||' . 'USDTRC20">USDTRC20</option>';
                        } ?>
                    </select>

                <?php

                }else{
                ?> 
                <div class="alert alert-danger">You have no wallets added to your account <a href="manage_account.php#section3" class="alert-link">add a wallet</a></div>
                <?php
                }
                    ?>
            </div>
            <div class="m-0">
                <div class="col-lg-3">
                    <label for="amount" class="col-form-label">amount</label>
                </div>

                <div class="col-lg">
                    <input required min="0" minlength="1" max="<?= $user['balance'] ?>" type="number" class="form-control" id="amount" name="amount" value="">
                </div>

                <div>
                    Wallet Balance: $<?= formatAsMoney($user['balance']) ?>
                </div>
            </div>
            <div class="col-lg-8 mt-3">
                <div class="row mt-2">

                    <div class="col-lg-12 mt-2">
                        <div>
                            <input type="hidden" name="submit" id="wallet_id" value="1">

                            <div class="col-12">
                                <button class="btn btn-primary">
                                    Proceed
                                    <i class="fi fi-sr-arrow-circle-right"></i>
                                </button>
                            </div>
                            <script>
                                document.querySelector("#form-control").addEventListener('submit', (e) => {
                                    // e.preventDefault();
                                    let type = document.querySelector('.selected_coin').innerHTML;
                                    let amount = document.querySelector('input[name="amount"]').value;

                                    let data = {
                                        type: type.trim(),
                                        amount: amount
                                    }
                                    let secret = 'jgjkflfkdhdjkfkl0000';

                                    var encrypted = CryptoJS.AES.encrypt(JSON.stringify(data), secret);
                                    //   console.log(type);
                                    document.querySelector("#form-control").setAttribute("action", `/payment?data=${encrypted}`);
                                })
                            </script>
                            <script async src="../cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Livewire Component wire-end:wOmfdIHyTPoGj5fFFC4Y -->
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

<!-- Mirrored from www.empirehedge.co/deposit by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:27 GMT -->

</html>