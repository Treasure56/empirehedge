<?php include 'partials/dashboard_scripts.php'; ?>

<div class="container-fluid mb-5">
    <!-- Title -->
    <h1 class="h2">
        Contribute to a Package
    </h1>
    <?php include 'partials/message.php'; ?>

    <!--  -->
    <?php
    $plans;
    $query = mysqli_query($connect, "SELECT * FROM plans");
    while ($row = mysqli_fetch_array($query)) {
        $plans[] = $row;
    }
    ?>

    <div wire:id="TweyyYMpHrdI4WsgdIOm">
        <div>
        </div>
        <div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
                        <div class="select-menu" x-data="{ open: false }" :class="open ? 'active' : ''">
                            <select class="form-select" aria-label="Default select example" onchange="handleSelectChange(this.value)">
                                <?php
                                foreach ($plans as $plan) {
                                    echo '<option value="' . $plan['id'] - 1 . '">' . $plan['title'] . '</option>';
                                }
                                ?>

                                <!-- <option  value="0"  >TRIAL PACKAGE</option>
                      
                        <option  value="1"  >ALUMINIUM PACKAGE</option>
                      
                        <option  value="2"  >IRON PACKAGE</option>
                      
                        <option  value="3"  >PLASTIC PACKAGE</option>
                      
                        <option  value="4"  >COPPER PACKAGE</option>
                      
                        <option  value="5"  >CRYPTO PACKAGE</option>
                      
                        <option  value="6"  >HALAL PACKAGE</option> -->

                            </select>
                        </div>
                        <div class="mt-5">
                            <p class="mb-0">Choose Quick Amount to Contribute</p>
                            <div class="flex-wrap mt-2 d-flex justify-content-between align-items-center">
                                <button class="mb-2 btn btn-info myLink">$100</button>
                                <button class="mb-2 rounded-none btn btn-info myLink">$250</button>
                                <button class="mb-2 rounded-none btn btn-info myLink">$500</button>
                                <button class="mb-2 rounded-none btn btn-info myLink">$1,000</button>
                                <button class="mb-2 rounded-none btn btn-info myLink">$1,500</button>
                                <button class="mb-2 rounded-none btn btn-info myLink">$2,000</button>
                                <script>
                                    document.querySelectorAll(".myLink").forEach((item) => {
                                        item.addEventListener("click", (e) => {
                                            e.preventDefault();

                                            document.querySelector("#amt").value = item.textContent.split('$')[1].replace(/,/g, '')
                                            document.querySelector('input[name="amount"]').value = item.textContent.split('$')[1].replace(/,/g, '')
                                            document.querySelector(".amt_invested").innerHTML = formatCurrency(item.textContent.split('$')[1].replace(/,/g, ''))
                                            proces();
                                        })
                                    })
                                </script>
                            </div>
                        </div>

                        <div class="mt-5">
                            <p class="mb-2">Or Enter Your Amount</p>
                            <input type="number" required="" id="amt" name="amt" value="" class="form-control d-block w-100" placeholder="1000">

                        </div>

                        <div class="mt-5">
                            <p class="mb-2">Choose Payment Method</p>
                        </div>
                        <div class="select-menu2">
                            <ul class="options2 d-block text-decoration-none">
                                <li class="mb-3 option2 d-lg-flex justify-content-between align-items-center border border-primary" wire:click="chanegePaymentMethod('Account Balance')">
                                    <div class="d-flex align-items-center">
                                        <i class="fi fi-sr-wallet"></i>
                                        &nbsp; &nbsp;
                                        <span>Account Balance</span>
                                    </div>
                                    <span class="fs-3 font-weight-bold">$<?= formatAsMoney($user['balance']) ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <p>Your contribution Details.</p>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Name of plan</p>
                                <span class="text-primary small naming"><?= $plans[0]['title'] ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Plan Price</p>
                                <span class="text-primary small pricing">$<?= formatAsMoney($plans[0]['min']) ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Duration</p>
                                <span class="text-primary small duration"><?= $plans[0]['duration'] ?> Days</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Minimum Deposit</p>
                                <span class="text-primary small min">$<?= formatAsMoney($plans[0]['min']) ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Maximum Deposit</p>
                                <span class="text-primary small max">$<?= formatAsMoney($plans[0]['max']) ?></span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">Dividend</p>
                                <span class="text-primary small dividends"><?= $plans[0]['roi'] ?>% daily</span>
                            </div>
                            <div class="mb-3 col-md-6">
                                <p class="mb-0 small">principal withdrawal</p>
                                <span class="text-primary small principal">Yes</span>
                            </div>
                            <div class="mb-3 col-md-6 d-none">
                                <p class="mb-0 small">Minimum withdrawal</p>
                                <span class="text-primary small minimum_withdrawal">$<?= formatAsMoney($plans[0]['min']) ?></span>
                            </div>
                        </div>
                        <hr>
                        <div class="justify-content-between d-md-flex">
                            <span class="small d-block d-md-inline">Payment method:</span>
                            <span class="small text-primary">Account Balance</span>
                        </div>
                        <hr>
                        <div class="justify-content-between d-md-flex">
                            <span class="d-block d-md-inline font-weight-bold">Amount to Contribute:</span>
                            <span class="text-primary font-weight-bold amt_invested">$0</span>
                        </div>
                        <p class="text-danger text__error mt-2"></p>
                        <div class="mt-3 text-center">
                            <form action="includes/investsub.php" enctype="application/x-www-form-urlencoded" method="post">
                                <input type="hidden" name="amount">
                                <input type="hidden" name="submit">
                                <input type="hidden" name="package" value="<?= $plans[0]['id'] ?>">
                                <button class="px-3 btn btn-primary button__confirm" disabled>
                                    Confirm &amp; Contribute
                                </button>
                                <script>
                                    function handleSelectChange(selectedIndex) {



                                        // Parse the JSON string to convert it into a JavaScript object
                                        const pricing = (<?= arrayToJsonString($plans) ?>);
                                        // console.log(pricing);
                                        
                                        let selectedScheme = pricing[selectedIndex];
                                        // Update other elements as needed
                                        document.querySelector('.naming').innerHTML = selectedScheme['title'];
                                        document.querySelector('input[name="package"]').value = selectedScheme['id'];
                                        document.querySelector('.pricing').innerHTML = formatCurrency(selectedScheme['min']);
                                        document.querySelector('.duration').innerHTML = selectedScheme['duration'];
                                        document.querySelector('.min').innerHTML = formatCurrency(selectedScheme['min']);
                                        document.querySelector('.max').innerHTML = formatCurrency(selectedScheme['max']);
                                        document.querySelector('.dividends').innerHTML = selectedScheme['roi'] + "% daily";
                                        // document.querySelector('.principal').innerHTML = selectedScheme['principal_withdrawal'];
                                        document.querySelector('.principal').innerHTML = "yes";
                                        // document.querySelector('.minimum_withdrawal').innerHTML = formatCurrency(selectedScheme['minimum_withdrawal']);



                                        let amt = parseFloat(document.querySelector("#amt").value || 0);
                                        let min = parseFloat(document.querySelector('.min').textContent.split("$")[1].replace(/,/g, ''));
                                        let max = document.querySelector('.max').textContent === "UNLIMITED" ? 'UNLIMITED' : parseFloat(document.querySelector('.max').textContent.split("$")[1].replace(/,/g, ''));
                                        if (min > amt || amt < 1 || amt > parseFloat("<?= ($user['balance']) ?>")) {
                                            button.disabled = true;
                                            error.innerHTML = `Minimum amount to contribute is ${formatCurrency(min)} or you have insufficient balance`;

                                        } else if ((max !== 'UNLIMITED' && amt > max) || amt > parseFloat("<?= ($user['balance']) ?>")) {
                                            button.disabled = true
                                            error.innerHTML = `Maximum amount to contribute is ${formatCurrency(max)} or you have insufficient balance`;
                                        } else {
                                            button.disabled = false
                                            error.innerHTML = ``;
                                        }
                                    }

                                    function formatCurrency(amount) {
                                        if (amount == 'UNLIMITED') {
                                            return amount;
                                        }
                                        return new Intl.NumberFormat('en-US', {
                                            style: 'currency',
                                            currency: 'USD'
                                        }).format(amount);
                                    }
                                </script>
                                <script>
                                    let amt = document.querySelector("#amt");
                                    let button = document.querySelector('.button__confirm');
                                    let error = document.querySelector(".text__error")
                                    amt.addEventListener("input", (e) => {
                                        // Get the value of the input field
                                        proces();
                                        
                                        
                                    });
                                    
                                    function proces(){
                                        const inputValue = document.querySelector("#amt").value;
                                        document.querySelector(".amt_invested").innerHTML = formatCurrency(inputValue);
                                        document.querySelector('input[name="amount"]').value = inputValue
                                        let amt = parseFloat(inputValue || 0);
                                        let min = parseFloat(document.querySelector('.min').textContent.split("$")[1].replace(/,/g, ''));
                                        let max = document.querySelector('.max').textContent === "UNLIMITED" ? 'UNLIMITED' : parseFloat(document.querySelector('.max').textContent.split("$")[1].replace(/,/g, ''));
                                        if (min > amt || amt < 1 || amt > parseFloat("<?= ($user['balance']) ?>")) {
                                            button.disabled = true;
                                            error.innerHTML = `Minimum amount to contribute is ${formatCurrency(min)} or you have insufficient balance`;

                                        } else if ((max !== 'UNLIMITED' && amt > max) || amt > parseFloat("<?= ($user['balance']) ?>")) {
                                            button.disabled = true
                                            error.innerHTML = `Maximum amount to contribute is ${formatCurrency(max)} or you have insufficient balance`;
                                        } else {
                                            button.disabled = false
                                            error.innerHTML = ``;
                                        }
                                    }
                                </script>
                            </form>

                            <span class="mt-2 small text-primary" wire:loading="" wire:target="joinPlan">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // 
        </script>
    </div>

    <!-- Livewire Component wire-end:TweyyYMpHrdI4WsgdIOm -->
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

<!-- Mirrored from www.empirehedge.co/invest by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:28 GMT -->

</html>