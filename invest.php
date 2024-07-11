<?php include 'partials/dashboard_scripts.php'; ?>

        <div class="container-fluid mb-5">
          <!-- Title -->
<h1 class="h2">
  Contribute to a Package
</h1>
 
    <!--  -->
     
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
                      
                        <option  value="0"  >TRIAL PACKAGE</option>
                      
                        <option  value="1"  >ALUMINIUM PACKAGE</option>
                      
                        <option  value="2"  >IRON PACKAGE</option>
                      
                        <option  value="3"  >PLASTIC PACKAGE</option>
                      
                        <option  value="4"  >COPPER PACKAGE</option>
                      
                        <option  value="5"  >CRYPTO PACKAGE</option>
                      
                        <option  value="6"  >HALAL PACKAGE</option>
                      
                    </select>
                  </div>
                  <div class="mt-5">
                      <p class="mb-0">Choose Quick Amount to Contribute</p>
                      <div class="flex-wrap mt-2 d-flex justify-content-between align-items-center">
                          <button class="mb-2 btn btn-info myLink" >$100</button>
                          <button class="mb-2 rounded-none btn btn-info myLink" >$250</button>
                          <button class="mb-2 rounded-none btn btn-info myLink">$500</button>
                          <button class="mb-2 rounded-none btn btn-info myLink" >$1,000</button>
                          <button class="mb-2 rounded-none btn btn-info myLink" >$1,500</button>
                          <button class="mb-2 rounded-none btn btn-info myLink" >$2,000</button>
                          <script>
                      
                              document.querySelectorAll(".myLink").forEach((item)=>{
                                  item.addEventListener("click", (e)=>{
                                      e.preventDefault();
                                 
                                    document.querySelector("#amt").value = item.textContent.split('$')[1].replace(/,/g, '')
                                    document.querySelector('input[name="amount"]').value = item.textContent.split('$')[1].replace(/,/g, '')
                                    document.querySelector(".amt_invested").innerHTML = formatCurrency(item.textContent.split('$')[1].replace(/,/g, ''))
                                  })
                              })

               
                            </script>
                      </div>
                  </div>

                  <div class="mt-5">
                      <p class="mb-2">Or Enter Your Amount</p>
                      <input type="number" required=""  id="amt" name="amt" value="" class="form-control d-block w-100" placeholder="1000" >

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
                              <span class="fs-3 font-weight-bold">
                                  $0</span>
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
                          <span class="text-primary small naming">TRIAL PACKAGE</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">Plan Price</p>
                          <span class="text-primary small pricing">$50</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">Duration</p>
                          <span class="text-primary small duration">7 Days</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">Minimum Deposit</p>
                          <span class="text-primary small min">$50</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">Maximum Deposit</p>
                          <span class="text-primary small max">$50</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">Dividend</p>
                          <span class="text-primary small dividends">10% daily</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">principal withdrawal</p>
                          <span class="text-primary small principal">Yes</span>
                      </div>
                      <div class="mb-3 col-md-6">
                          <p class="mb-0 small">Minimum withdrawal</p>
                          <span class="text-primary small minimum_withdrawal">$85</span>
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
                      <span class="text-primary font-weight-bold amt_invested" >$0</span>
                  </div>
                  <p class="text-danger text__error mt-2"></p>
                  <div class="mt-3 text-center">
                                                      <form action="https://www.empirehedge.co/investment/success"  enctype="application/x-www-form-urlencoded" method="post">
                                                        <input type="hidden" name="amount" >
                                                        <input type="hidden" name="package" value="TRIAL PACKAGE">
                              <button class="px-3 btn btn-primary button__confirm" disabled>
                                  Confirm &amp; Contribute
                              </button>
                              <script>
                                               
                              function handleSelectChange(selectedIndex) {



                              // Parse the JSON string to convert it into a JavaScript object
                      const pricing = JSON.parse('[{"id":1,"name":"TRIAL PACKAGE","price":"50","minimum_amount":"50","maximum_amount":"50","minimum_withdrawal":85,"dividends":"10% daily","principal_withdrawal":"Yes","duration":"7 Days","rate":10},{"id":2,"name":"ALUMINIUM PACKAGE","price":"10000","minimum_amount":"10000","maximum_amount":"100000","minimum_withdrawal":500,"dividends":"2% daily","principal_withdrawal":"Yes","duration":"90 Days","rate":2},{"id":3,"name":"IRON PACKAGE","price":"5000","minimum_amount":"5000","maximum_amount":"50000","minimum_withdrawal":50,"dividends":"1% daily ","principal_withdrawal":"Yes","duration":"60 Days","rate":1},{"id":4,"name":"PLASTIC PACKAGE","price":"100","minimum_amount":"100","maximum_amount":"20000","minimum_withdrawal":50,"dividends":"2% every 72hours","principal_withdrawal":"Yes","duration":"180 Days","rate":0.66},{"id":5,"name":"COPPER PACKAGE","price":"30000","minimum_amount":"30000","maximum_amount":"500000","minimum_withdrawal":1000,"dividends":"3% every 48hrs","principal_withdrawal":"Yes","duration":"180 Days","rate":1.5},{"id":6,"name":"CRYPTO PACKAGE","price":"200","minimum_amount":"200","maximum_amount":"100000","minimum_withdrawal":50,"dividends":"5% every 3 days","principal_withdrawal":"Yes","duration":"180 Days","rate":1.66},{"id":7,"name":"HALAL PACKAGE","price":"1000","minimum_amount":"1000","maximum_amount":"100000","minimum_withdrawal":50,"dividends":"27%","principal_withdrawal":"Yes","duration":"30 Days","rate":0.9}]');
                      let selectedScheme = pricing[selectedIndex];    
                          // Update other elements as needed
                          document.querySelector('.naming').innerHTML = selectedScheme['name'];
                          document.querySelector('input[name="package"]').value = selectedScheme['name'];
                      document.querySelector('.pricing').innerHTML = formatCurrency(selectedScheme['price']);
                      document.querySelector('.duration').innerHTML = selectedScheme['duration'];
                      document.querySelector('.min').innerHTML = formatCurrency(selectedScheme['minimum_amount']);
                      document.querySelector('.max').innerHTML = formatCurrency(selectedScheme['maximum_amount']);
                      document.querySelector('.dividends').innerHTML =selectedScheme['dividends'];
                      document.querySelector('.principal').innerHTML =selectedScheme['principal_withdrawal'];
                      document.querySelector('.minimum_withdrawal').innerHTML = formatCurrency(selectedScheme['minimum_withdrawal']);



                                                             let amt = parseFloat(document.querySelector("#amt").value || 0);            
                                                              let min = parseFloat(document.querySelector('.min').textContent.split("$")[1].replace(/,/g, ''));
                                                              let max = document.querySelector('.max').textContent === "UNLIMITED" ? 'UNLIMITED' :  parseFloat(document.querySelector('.max').textContent.split("$")[1].replace(/,/g, ''));
                                                              if( min > amt  || amt < 1 || amt > parseFloat("0")){
                                                                  button.disabled = true;
                                                                  error.innerHTML = `Minimum amount to contribute is ${formatCurrency(min)} or you have insufficient balance` ;

                                                              }
                                                              else if ((max !== 'UNLIMITED' && amt > max) || amt > parseFloat("0")){
                                                                  button.disabled = true  
                                                                  error.innerHTML = `Maximum amount to contribute is ${formatCurrency(max)} or you have insufficient balance`;
                                                              }
                                                              else{
                                                                  button.disabled = false  
                                                                  error.innerHTML = ``;
                                                              }
                      }

                      function formatCurrency(amount) {
                          if ( amount == 'UNLIMITED') {
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
                                                          let button  = document.querySelector('.button__confirm');
                                                          let error = document.querySelector(".text__error")
                                                           amt.addEventListener("input", (e) => {
                                                              // Get the value of the input field
                                                              const inputValue = e.target.value;
                                                              document.querySelector(".amt_invested").innerHTML = formatCurrency(inputValue);
                                                              document.querySelector('input[name="amount"]').value = inputValue
                                                              let amt = parseFloat(inputValue || 0);
                                                              let min = parseFloat(document.querySelector('.min').textContent.split("$")[1].replace(/,/g, ''));
                                                              let max = document.querySelector('.max').textContent === "UNLIMITED" ? 'UNLIMITED' :  parseFloat(document.querySelector('.max').textContent.split("$")[1].replace(/,/g, ''));
                                                              if( min > amt  || amt < 1 || amt > parseFloat("0") ){
                                                                  button.disabled = true;
                                                                  error.innerHTML = `Minimum amount to contribute is ${formatCurrency(min)} or you have insufficient balance`;

                                                              }
                                                              else if ((max !== 'UNLIMITED' && amt > max) || amt > parseFloat("0")){
                                                                  button.disabled = true  
                                                                  error.innerHTML = `Maximum amount to contribute is ${formatCurrency(max)} or you have insufficient balance`;
                                                              }
                                                              else{
                                                                  button.disabled = false  
                                                                  error.innerHTML = ``;
                                                              }
                                                             
                                                            
                                                          });
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

      <script src="livewire/livewire6406.html?id=fe747446aa84856d8b66" data-turbo-eval="false" data-turbolinks-eval="false"></script><script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'GybFujKl3iopgdJQTshgS28drpFHIG1g65gFSP7v';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
  <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
  <script src="assets/ext/dist/toastr.min.js"></script>
  <script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '72b452f3afab8a71a5a98a43dc4bf4ae47fee7c5';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='../www.smartsuppchat.com/loaderd41d.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    <noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
    </main> <!-- / main -->


</body>

<!-- Mirrored from www.empirehedge.co/invest by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:28 GMT -->
</html>
