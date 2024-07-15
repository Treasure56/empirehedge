<?php
 $pathname = basename($_SERVER['PHP_SELF']);
 // split pathname from . and return the first
 $path = explode('.', $pathname)[0];

?>

<div class="row mt-5">
                <div class="col-6 col-lg-4" <!-- Card -->
                    <a href="accounthistory.php">
                        <div class="card border-0 <?php echo $path == 'accounthistory' ? ' bg-primary text-white' : '' ?>">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <h3 class="card-title h4 mb-0">Deposits</h3>
                                        <span class="fs-6 text-dark">0 records</span>
                                    </div>

                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <i class="fi fi-sr-piggy-bank"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4">
                    <!-- Card -->
                    <a href="withdrawal-history.php">
                        <div class="card border-0 <?php echo $path == 'withdrawal-history' ? ' bg-primary text-white' : '' ?>">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <h3 class="card-title h4 mb-0">Withdrawals</h3>
                                    </div>

                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <i class="fi fi-sr-coins"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-lg-4">
                    <!-- Card -->
                    <a href="profit-history.php">
                        <div class="card border-0 <?php echo $path == 'profit-history' ? ' bg-primary text-white' : '' ?>">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex flex-column">
                                        <h3 class="card-title h4 mb-0">Profit</h3>
                                    </div>

                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <i class="fi fi-br-chat-arrow-grow"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
            <div class="row mt-1 px-4">
                <?php include_once 'partials/message.php'; ?>
            </div>