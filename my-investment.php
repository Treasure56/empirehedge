<?php include 'partials/dashboard_scripts.php';
$_status = $_GET['status'] ?? '';
?>

<div class="container-fluid">
  <div class="d-flex align-items-baseline justify-content-between">
    <!-- Title -->
    <h1 class="h2 d-flex align-items-center justify-content-between">
      <span>
        My Packages
      </span>
    </h1>
    <div class="m-0">
      <label class="form-label">Sort</label>
      <select class="form-select" wire:model="sortValue" onchange="handleSelectChange(this.value)">
        <option <?= $_status == "" ? 'selected' : '' ?> value="">All</option>
        <option <?= $_status == "1" ? 'selected' : '' ?> value="1">Active</option>
        <option <?= $_status == "0" ? 'selected' : '' ?> value="0">Completed</option>
      </select>
    </div>
    <script>
      function handleSelectChange(value) {
        window.location.href = 'my-investment.php?status=' + value;
      }
    </script>
  </div>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5>Deposit history</h5>
          <div class="table-responsive">
            <table class="table text-center">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Amount</th>
                  <th>Payout Amount</th>
                  <th>Plan</th>
                  <th>Status</th>
                  <th>Date</th>
                  <th>Payment Date</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $uid = $user['id'];
                $query = $_status == '' ? mysqli_query($connect, "SELECT * FROM investments WHERE user_id = '$uid' ORDER BY id DESC") : mysqli_query($connect, "SELECT * FROM investments WHERE user_id = '$uid' AND pending = '$_status' ORDER BY id DESC");
                if (mysqli_num_rows($query) > 0) {
                  while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    $amount = $row['amount'];
                    $payout_amount = $row['payout_amount'];
                    $planId = $row['plan_id'];
                    $plan = getQueryDetails($connect, "SELECT * FROM plans WHERE id = '$planId'");
                    $status = $row['pending'] == 1 ? 'Pending' : 'Completed';
                    $date_created = $row['created_at'];
                    $payout_at = $row['payout_at'];


                ?>

                    <tr>
                      <td>
                        <?= $id ?>
                      </td>
                      <td>
                        $<?= $amount ?>
                      </td>
                      <td>
                        $<?= $payout_amount ?>
                      </td>
                      <td>
                        <?= $plan['title'] ?>
                      </td>
                      <td>
                        <p class="<?= $status == 'Pending' ? 'text-warning' : 'text-success' ?>">
                          <?= $status ?>
                        </p>
                      </td>
                      <td>
                        <?= formatDate($date_created) ?>
                      </td>
                      <td>
                        <?= formatDate($payout_at) ?>
                      </td>
                    </tr>

                  <?php  }
                } else { ?>

                  <!-- Render "No referrals yet" message when referral.length is 0 -->
                  <tr>
                    <td class="py-5" colspan="7">
                      <div class="text-center card-body">
                        <i class="bi bi-database-fill-exclamation" style="font-size: 50px"></i>
                        <p class="h3">
                          You have not made any contributions at the moment
                        </p>
                        <a href="invest.php" class="px-3 btn btn-primary">Buy a Package</a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>



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
  </div>

</div>
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

<!-- Mirrored from www.empirehedge.co/my-investment by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:28 GMT -->

</html>