<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>EcoMate</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center 
      navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a> -->
        <h2 style="color: green;" >EcoMate</h2>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <!-- <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li> -->
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="../../images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('welcome') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('userCharts') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Analytics</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('camp') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Campaign</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('faq') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Customer Service</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="font-size: 34px; color: teal;">Why participate in our campaigns?</h4>
                  <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <p class="card-title" style="font-size: 26px; color: green;">What harm does plastic wastage cause?</p>
                          <p class="font-weight-500" style="font-size: 16px;">
                                Plastic wastage wreaks havoc on our planet, causing pollution, endangering wildlife, and posing health risks. Disposed plastics persist for years, contaminating both land and water. Marine life suffers as they ingest or get entangled in plastic debris, leading to injuries and ecological imbalances. Microplastics, the unseen threat, infiltrate our food chain, risking human health. The toxic chemicals in plastics exacerbate the environmental impact. It's time to address this crisis with sustainable solutions before irreversible damage occurs.</p>
                          <p class="font-weight-500" style="font-size: 18px; color:palevioletred; ">
                                #BreakFreeFromPlastic</p>
                          <div class="d-flex flex-wrap mb-5">
                            <div class="mr-4 mt-3">
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                         <div class="d-flex justify-content-between">
                          <p class="card-title" style="font-size: 26px; color: green;">Why Join Our Campaign?</p>
                         </div>
                          <p class="font-weight-500" style="font-size: 16px;">
                            Join our campaign and be more than an advocate for a sustainable future—become a part of a community committed to positive change. Your voice not only raises awareness about the critical issue of plastic pollution but also connects you with like-minded individuals. As a member, you'll have the opportunity to meet new people, strengthen bonds, and collectively shape a cleaner, greener world. Together, let's influence industry practices, inspire eco-conscious choices, and foster a sense of shared responsibility. Break free from plastic with us and join a movement that not only cares for the planet but also builds stronger connections within our society. Your contribution matters. Join us today.</p>
                          <p class="font-weight-500" style="font-size: 18px; color:palevioletred;">
                            #BreakFreeFromPlastic #SustainableImpact</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                  <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="font-size: 34px; color: teal; ">Campaigns Hosted:</h4>
                    <p class="font-weight-500" style="font-size: 16px;">
                      Some insight into our campaigns.
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Duration</th>
                            <th>Location</th>
                            <th>EcoMates Participated</th>
                            <th>Supervisor</th>
                            <th>Sponsors</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>AloBokhara</td>
                            <td>12/05/2017</td>
                            <td>4 Days</td>
                            <td>New York, USA</td>
                            <td>361</td>
                            <td>Derek</td>
                            <td><label class="badge badge-success">Razer</label></td>
                          </tr>
                          <tr>
                            <td>AloBokhara</td>
                            <td>12/05/2017</td>
                            <td>4 Days</td>
                            <td>New York, USA</td>
                            <td>361</td>
                            <td>Derek</td>
                            <td><label class="badge badge-success">Razer</label></td>
                          </tr>
                          <tr>
                            <td>AloBokhara</td>
                            <td>12/05/2017</td>
                            <td>4 Days</td>
                            <td>New York, USA</td>
                            <td>361</td>
                            <td>Derek</td>
                            <td><label class="badge badge-success">Razer</label></td>
                          </tr>
                          <tr>
                            <td>AloBokhara</td>
                            <td>12/05/2017</td>
                            <td>4 Days</td>
                            <td>New York, USA</td>
                            <td>361</td>
                            <td>Derek</td>
                            <td><label class="badge badge-success">Razer</label></td>
                          </tr>
                          <tr>
                            <td>AloBokhara</td>
                            <td>12/05/2017</td>
                            <td>4 Days</td>
                            <td>New York, USA</td>
                            <td>361</td>
                            <td>Derek</td>
                            <td><label class="badge badge-success">Razer</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
      </div>
      
      <div class="accordion" id="faqAccordion">
        <div class="card">
          <div class="card-header" id="faqHeading1">
            <h5 class="mb-0">
              Want to participate? Sign up to our newsletter via mail!
            </h5>
          </div>
          <div class="card-body">
            <!-- Add the checkbox here -->
            <div class="form-check" style="display: flex; align-items: center;">
              <label class="form-check-label" for="newsletterCheckbox" style="margin-right: 10px;">
                Sign up for our newsletter
              </label>
              <input type="checkbox" class="form-check-input" id="newsletterCheckbox" onclick="showThankYouMessage()">
            </div>
            <div id="faqCollapse1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
              <div class="card-body">
                For further inquiry:<br> Send us an Email at - ecomates@gmail.com
                <br> <br>
                <a href="https://www.facebook.com/ecomates1">Facebook</a>
                <br>
                <a href="https://www.instagram.com/ecomates1">Instagram</a>
              </div>
              <div id="thankYouMessage" style="display:none; margin-top: 10px;">
                <p>Thank you for signing up!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <script>
        function showThankYouMessage() {
          var checkbox = document.getElementById("newsletterCheckbox");
          var thankYouMessage = document.getElementById("thankYouMessage");
      
          if (checkbox.checked) {
            // Checkbox is checked, show thank you message
            thankYouMessage.style.display = "block";
          } else {
            // Checkbox is unchecked, hide thank you message
            thankYouMessage.style.display = "none";
          }
        }
      </script>
      

    </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>