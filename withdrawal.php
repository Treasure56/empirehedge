<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.empirehedge.co/withdrawal by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:28 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>xcelrise || Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min88f9.css?v1.1.3"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="css/customed88f9.html?v1.1.3" />
    <link rel="shortcut icon" href="images/remove.php" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min88f9.html?v1.1.3" rel="stylesheet" />

    <script src="../unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
  </head>

<!-- Mirrored from www.empirehedge.co/withdrawal by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jun 2024 12:39:33 GMT -->
</html>



    <body id="page-top">
        <div id="wrapper" style="background-color: #121d33 !important;
    background-image: url(images/hero-gradient.svg);
    background-position-y: bottom;
    background-repeat: no-repeat;
    background-size: cover;">
            <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center" href="index.php">
    <div class="sidebar-brand-icon">
      <img src="images/remove.html" style="width: 100%" />
    </div>
  </a>
  <hr class="sidebar-divider my-0" />

  <li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a
    >
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Recycling</span></a
    >
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="runningPlans.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span> Running plans </span></a
    >
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="withdrawal.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Withdraw</span></a
    >
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>History</span></a
    >
  </li>

  <!-- <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Share funds</span></a
        >
      </li> -->

  <hr class="sidebar-divider" />

  <div class="sidebar-heading">MORE</div>

  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Home</span></a
    >
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="index.html#contact">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Support</span></a
    >
  </li>
  <!-- <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Account</span></a
        >
      </li> -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Settings</span></a
    >
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="features.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Features</span></a
    >
  </li>

  <li class="nav-item active">
    <a class="nav-link" href="index.php" id="logout">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Logout</span></a
    >
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
     
    <p id="identity" style="display: none">64</p>
    <p id="username" style="display: none">Flourish Treasure</p>
     
  </div>

  <script src="socket.io/socket.io.js"></script>
  <script src="js/newScript.html"></script>
</ul>



                <div id="content-wrapper" class="d-flex flex-column">

                    <!-- Main Content -->
                    <div id="content">

                        <nav
  class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
>
  <button
    id="sidebarToggleTop"
    class="btn btn-link d-md-none rounded-circle mr-3"
  >
    <i class="fa fa-bars"></i>
  </button>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow mx-1">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="alertsDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <i class="fas fa-bell fa-fw"></i>

        <span class="badge badge-danger badge-counter">0</span>
      </a>
    </li>

    <li class="nav-item dropdown no-arrow mx-1 dropdown_xcel">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="messagesDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <i class="fas fa-envelope fa-fw"></i>
        <span class="badge badge-danger badge-counter badge-counter_xcel"
          >0</span
        >
      </a>
      <div class="dropdown_containers">
        <div class="message_container">Messages</div>
        <ul id="dropdown"></ul>
        <div class="view_all">
          View all
          <script>
            // /usermessage/inbox
            document
              .querySelector(".view_all")
              .addEventListener("click", () => {
                window.location.href = "index.html";
              });
          </script>
        </div>
      </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

     
    <li class="nav-item dropdown no-arrow">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="userDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"
          >Flourish Treasure</span
        >
        <img
          class="img-profile rounded-circle"
          src="images/undraw_profile.html"
        />
      </a>

      <div
        class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown"
      >
        <a class="dropdown-item" href="#">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          flourishflonado.ff@gmail.com
        </a>
      </div>
      <script src="socket.io/socket.io.js"></script>
      <script>
        console.log(window.location.href);
        var socket = io();
        let amt = document.querySelector(".badge-counter_xcel").innerHTML;
        socket.emit("add_online_user", {
          userId: parseFloat("64"),
          username: "Flourish Treasure",
        });
        socket.on("receive_notification", (msg) => {
          let li = document.createElement("li");
          li.innerHTML = `
          <div class="thumbnail">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="desc">
            <span>${msg.title}</span>
            <p>${msg.messages}</p>
            <p>${msg.moment}</p>
          </div>

          `;
          document.querySelector("#dropdown").appendChild(li);
          if (amt) {
            let parseAmt = parseInt(amt);
            parseAmt++;
            document.querySelector(".badge-counter_xcel").innerHTML = parseAmt;
          }
        });

        // handle the information stored on database...
        const sender = "1001";
        // const url = `http://localhost:8000/chat/64/${sender}`;
        const url = `https://empirehedge.co/chat/64/${sender}`;
        fetch(url, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
        })
          .then((response) => response.json())
          .then((data) => {
            console.log(data.res);
            if (data.res?.length > 0) {
              document.querySelector(".badge-counter_xcel").innerHTML = data.res
                ? data.res?.filter((item) => item.viewed === "enable").length
                : 0;
              let thead = document.querySelector("#dropdown");
              thead.innerHTML = "";
              data.res.forEach((item, index) => {
                let li = document.createElement("li");
                li.innerHTML = `
            <div class="thumbnail">
              <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="desc">
            <span>${item.title}</span>
            <p>${item.messages}</p>
            <p>${item.moment}</p>
          </div>

          `;
                thead.appendChild(li);
              });
            }
          });
      </script>
    </li>

     
  </ul>
</nav>



                            <div class="container-fluid">

                                <!-- Page Heading -->
                                <h1 class="h3 mb-2 text-gray-800"> Running Plans </h1>
                                

                                    <p class="mb-4" style="color: rgb(23, 182, 23);" id="www">
                                        
                                    </p>
                                    

                                        <div class="card shadow mb-4">
                                            <div class="card-header py-3">
                                                <h6 class="m-0 font-weight-bold text-primary">Withdraw</h6>
                                            </div>
                                            <!-- <p style="padding-left: 10px; color: rgb(23, 182, 23); display: none;" id="displayWithdrawalInfo" >Your request has been received and will be processed within 24hrs</p> -->
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered" id="dataTable" width="100%"
                                                        cellspacing="0">
                                                        <thead>
                                                            <tr>
                                                                <th>Plan</th>
                                                                <th>Status</th>
                                                                <th>Amount</th>
                                                                <th>Deposit</th>
                                                                <th>Due date</th>
                                                                <th>Profit %</th>
                                                                <th>Compound Profit</th>
                                                                <th>Action</th>
                                                                <!-- <th>Reinvest</th> -->
                                                            </tr>
                                                        </thead>

                                                        <tbody>


                                                                            
                                                                                        <h5 style="color: rgb(230, 66, 66);">You Have No Completed Plans</h5>

                                                                                        


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                            </div>
                    </div>










                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; empirehedge.co 2021</span>
                            </div>
                        </div>
                    </footer>
                </div>

        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


        <script>
            // var info = document.getElementById("www2").innerText;
            // // console.log(info)
            //   if (document.getElementById("www").innerText !== "") {
            //   // console.log(info)
            //   swal("try again", `${info}`, "info")
            //   }
        
            var success2 = document.getElementById("www").innerText
            console.log(success2)
              if (document.getElementById("www").innerText !== "") {
              // console.log(success)
              swal("Request Sent", `${success2}`, "success")
              }
            </script>
        <div
class="modal fade"
id="logoutModal"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true"
>
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button
        class="close"
        type="button"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">
      Select "Logout" below if you are ready to end your current session.
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">
        Cancel
      </button>
      <a class="btn btn-primary" href="index.php">Logout</a>
    </div>
  </div>
</div>
</div>




    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

 
    <script src="js/sb-admin-2.min.html"></script>

 
    <script src="vendor/chart.js/Chart.min.js"></script>


    <script src="js/demo/chart-area-demo.html"></script>
    <script src="js/demo/chart-pie-demo.html"></script>
  </body>
</html>

    </body>

    </html>