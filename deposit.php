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
            <?php
            $query = mysqli_query($connect, "SELECT * FROM wallets");
            while ($rows = mysqli_fetch_assoc($query)) {
            ?>
                <div class="col-6 col-xl-3 ">
                    <!-- Card -->
                    <a href="#" onclick="handleClick(event, '<?= $rows['title'] ?>', <?= $rows['id'] ?>)" class="card border border-3 <?= $rows['id'] == 1 ? 'border-primary' : '' ?> ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                                    <img src="image/<?= $rows['img'] ?>" alt="" srcset="" width="42px" height="37px">
                                </div>
                            </div>
                            <!-- Title -->
                            <h3 class="card-title mt-3 mb-0 text-dark"> <?= $rows['title'] ?></h3>
                            <span class="text-muted m-0 p-0">Pay via <?= $rows['title'] ?></span>
                        </div>
                    </a>
                </div>

            <?php }

            /**
             *  <div class="col-6 col-xl-3 ">
                        <!-- Card -->
                        <a href="#" onclick="handleClick(event, 'USDTRC20', 1)" class="card border border-3 border-primary">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                                        <img src="../res.cloudinary.com/dgzmeamz8/image/upload/v1696772175/usdc_ogjmnf.jpg" alt="" srcset="" width="42px" height="37px">
                                    </div>
                                </div>
                                <!-- Title -->
                                <h3 class="card-title mt-3 mb-0 text-dark"> USDT TRC20</h3>
                                <span class="text-muted m-0 p-0">Pay via USDT TRC20</span>
                            </div>
                        </a>
                    </div>



                    <div class="col-6 col-xl-3 ">
                        <!-- Card -->
                        <a href="#" onclick="handleClick(event, 'Bitcoin', 2)" class="card ">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                                        <img src="https://res.cloudinary.com/dgjbwijik/image/upload/v1695542425/vuddfcam7lykvrvf4rzw.svg" alt="" srcset="" width="42px" height="37px">
                                    </div>
                                </div>
                                <!-- Title -->
                                <h3 class="card-title mt-3 mb-0 text-dark">Bitcoin</h3>
                                <span class="text-muted m-0 p-0">Pay via Bitcoin</span>
                            </div>
                        </a>
                    </div>



                    <div class="col-6 col-xl-3 ">
                        <!-- Card -->
                        <a href="#" onclick="handleClick(event, 'Ethereum', 3)" class="card ">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="avatar avatar-lg text-bg-gray-300 d-flex align-items-center justify-content-center">
                                        <img src="../res.cloudinary.com/dgzmeamz8/image/upload/v1696772146/busd_koi0xd.jpg" alt="" srcset="" width="42px" height="37px">
                                    </div>
                                </div>
                                <!-- Title -->
                                <h3 class="card-title mt-3 mb-0 text-dark">Ethereum</h3>
                                <span class="text-muted m-0 p-0">Pay via Ethereum</span>
                            </div>
                        </a>
                    </div>
             */
            ?>







            <script>
                function handleClick(event, wallet, id) {
                    // Prevent the default behavior of the anchor element
                    event.preventDefault();
                    document.querySelector('.selected_coin').innerHTML = wallet
                    document.querySelector('#wallet_id').value = id
                }
                const cards = document.querySelectorAll(".card");
                cards.forEach((card) => {
                    card.addEventListener("click", (e) => {
                        cards.forEach((card) => {
                            card.classList.remove("border", "border-3", "border-primary");
                        })
                        card.classList.add("border", "border-3", "border-primary");
                        let defaultWalletName = card.querySelector(".card-title").textContent;


                    })
                })
            </script>

        </div>
        <div class="row mt-3">
            <div class="col-12">
                <h1 class="m-0 p-0 selected_coin">
                    USDC TRC20
                </h1>
                <span class="badge rounded-pill text-bg-primary m-0">selected</span>
            </div>

            <div class="col-lg-8 mt-3">
                <p class="m-0">Select an amount</p>
                <div class="row mt-2">
                    <div class="col-lg-4 col-3">
                        <a href="#" class="myLink">
                            <div class="card text-center py-2 fw-bold">
                                $ 100
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-3">
                        <a href="#" class="myLink">
                            <div class="card text-center py-2 fw-bold">
                                $ 200
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-3">
                        <a href="#" class="myLink">
                            <div class="card text-center py-2 fw-bold">
                                $ 400
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-3">
                        <a href="#" class="myLink">
                            <div class="card text-center py-2 fw-bold">
                                $ 500
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-3">
                        <a href="#" class="myLink">
                            <div class="card text-center py-2 fw-bold">
                                $ 800
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-3">
                        <a href="#" class="myLink">
                            <div class="card text-center py-2 fw-bold">
                                $ 1000
                            </div>
                        </a>
                        <script>
                            document.querySelectorAll(".myLink").forEach((item) => {
                                item.addEventListener("click", (e) => {
                                    e.preventDefault();
                                    document.querySelector("#amt").value = item.children[0].textContent.trim().split(" ")[1]
                                })
                            })
                        </script>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Enter amount</label>
                        <form action="payment.php" method="GET" class="row row-cols-lg-auto g-3 align-items-center" id="form-control" enctype="multipart/form-data">
                            <input type="hidden" name="wallet_id" id="wallet_id" value="1">
                            <!-- <input type="hidden" name="submit" value="1"> -->
                            <div class="col-12">
                                <input class="form-control w-100" id="amt" placeholder="Enter Amount" min="5" type="number" step="any" name="amount" wire:model.defer="amount" value="" required="">

                            </div>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
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