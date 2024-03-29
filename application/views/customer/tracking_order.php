<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta name="author" content="RIVALDY SETIAWAN">
  <title>Search Track - POPJASA
  </title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/css/core/menu/menu-types/horizontal-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/css/plugins/forms/wizard.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/app-assets/css/plugins/pickers/daterange/daterange.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets') ?>/assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-menu 1-column   menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="1-column">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand" href="#">
              <h5 class="brand-text">POPJASA TRACKING ORDER</h5>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container">
        <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
          <ul class="nav navbar-nav">
            <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="https://popjasa.id/"><i class="ficon ft-arrow-left"></i></a></li>
              <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="<?php echo site_url('Auth')?>"><i class="ficon ft-unlock"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <br>
  <br>
  <br>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Tracking Order</h3>
        </div>
      </div>
      <div class="content-body">
        <!-- Form wzard with step validation section start -->
        <section id="icon-tabs">
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="card-header">
                   <h4 class="card-title">Tracking Progress Produk Jasa </h4>
                   <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                   <div class="heading-elements">
                     <ul class="list-inline mb-0">
                       <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                       <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                       <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                       <li><a data-action="close"><i class="ft-x"></i></a></li>
                     </ul>
                   </div>
                 </div>
                 <div class="card-content collapse show">
                   <div class="card-body">
                     <form action="#" class="icons-tab-steps wizard-notification">
                       <!-- Step 1 -->
                       <h6><i class="step-icon la la-file"></i> Minuta</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-4 text-left">
                             <img src="https://popjasa.id/wp-content/uploads/2019/01/Pop-Jasa-400x400.png" width="200px">
                           </div>
                           <div class="col-md-8">
                             <div class="row">
                               <h4>
                                 <strong>MINUTA</strong> adalah akta yang ditanda tangani para penghadap, saksi-saksi dan Notaris. Minuta disimpan oleh Notaris menjadi dokumen rahasia dan dijaga. Dibundel per 50 Nomor akta (dijahit). Minuta berisi dokumen-dokumen yang tersebut di dalamnya, copy ataupun asli sesuai penyebutan dan keperluan. Terutama berisi copy identitas para penghadap (KTP, Passport). Umumnya berisi persyaratan yang diperlukan. Minuta tidak boleh difotocopy.
                               </h4>
                             </div>
                           </div>
                         </div>

                       </fieldset>
                       <!-- Step 2 -->
                       <h6><i class="step-icon la la-file"></i> Akte</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="proposalTitle2">Proposal Title :</label>
                               <input type="text" class="form-control" id="proposalTitle2">
                             </div>
                             <div class="form-group">
                               <label for="emailAddress4">Email Address :</label>
                               <input type="email" class="form-control" id="emailAddress4">
                             </div>
                             <div class="form-group">
                               <label for="videoUrl2">Video URL :</label>
                               <input type="url" class="form-control" id="videoUrl2">
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="jobTitle2">Job Title :</label>
                               <input type="text" class="form-control" id="jobTitle2">
                             </div>
                             <div class="form-group">
                               <label for="shortDescription2">Short Description :</label>
                               <textarea name="shortDescription" id="shortDescription2" rows="4" class="form-control"></textarea>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                       <!-- Step 3 -->
                       <h6><i class="step-icon la la-map-o"></i> Domisili</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="eventName2">Event Name :</label>
                               <input type="text" class="form-control" id="eventName2">
                             </div>
                             <div class="form-group">
                               <label for="eventType2">Event Type :</label>
                               <select class="c-select form-control" id="eventType2" data-placeholder="Type to search cities"
                               name="eventType2">
                                 <option value="Banquet">Banquet</option>
                                 <option value="Fund Raiser">Fund Raiser</option>
                                 <option value="Dinner Party">Dinner Party</option>
                                 <option value="Wedding">Wedding</option>
                               </select>
                             </div>
                             <div class="form-group">
                               <label for="eventLocation2">Event Location :</label>
                               <select class="c-select form-control" id="eventLocation2" name="location">
                                 <option value="">Select City</option>
                                 <option value="Amsterdam">Amsterdam</option>
                                 <option value="Berlin">Berlin</option>
                                 <option value="Frankfurt">Frankfurt</option>
                               </select>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label>Event Date - Time :</label>
                               <div class='input-group'>
                                 <input type='text' class="form-control datetime" />
                                 <span class="input-group-addon">
                                   <span class="ft-calendar"></span>
                                 </span>
                               </div>
                             </div>
                             <div class="form-group">
                               <label for="eventStatus2">Event Status :</label>
                               <select class="c-select form-control" id="eventStatus2" name="eventStatus">
                                 <option value="Planning">Planning</option>
                                 <option value="In Progress">In Progress</option>
                                 <option value="Finished">Finished</option>
                               </select>
                             </div>
                             <div class="form-group">
                               <label>Requirements :</label>
                               <div class="c-inputs-stacked">
                                 <div class="d-inline-block custom-control custom-checkbox">
                                   <input type="checkbox" name="status2" class="custom-control-input" id="staffing2">
                                   <label class="custom-control-label" for="staffing2">Staffing</label>
                                 </div>
                                 <div class="d-inline-block custom-control custom-checkbox">
                                   <input type="checkbox" name="status2" class="custom-control-input" id="catering2">
                                   <label class="custom-control-label" for="catering2">Catering</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                       <!-- Step 4 -->
                       <h6><i class="step-icon la la-money"></i> NPWP</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="meetingName2">Name of Meeting :</label>
                               <input type="text" class="form-control" id="meetingName2">
                             </div>
                             <div class="form-group">
                               <label for="meetingLocation2">Location :</label>
                               <input type="text" class="form-control" id="meetingLocation2">
                             </div>
                             <div class="form-group">
                               <label for="participants2">Names of Participants</label>
                               <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="decisions2">Decisions Reached</label>
                               <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                             </div>
                             <div class="form-group">
                               <label>Agenda Items :</label>
                               <div class="c-inputs-stacked">
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                   <label class="custom-control-label" for="item21">1st item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                   <label class="custom-control-label" for="item22">2nd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                   <label class="custom-control-label" for="item23">3rd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                   <label class="custom-control-label" for="item24">4th item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                   <label class="custom-control-label" for="item25">5th item</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                       <!-- Step 5 -->
                       <h6><i class="step-icon la la-building"></i> PN</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="meetingName2">Name of Meeting :</label>
                               <input type="text" class="form-control" id="meetingName2">
                             </div>
                             <div class="form-group">
                               <label for="meetingLocation2">Location :</label>
                               <input type="text" class="form-control" id="meetingLocation2">
                             </div>
                             <div class="form-group">
                               <label for="participants2">Names of Participants</label>
                               <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="decisions2">Decisions Reached</label>
                               <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                             </div>
                             <div class="form-group">
                               <label>Agenda Items :</label>
                               <div class="c-inputs-stacked">
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                   <label class="custom-control-label" for="item21">1st item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                   <label class="custom-control-label" for="item22">2nd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                   <label class="custom-control-label" for="item23">3rd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                   <label class="custom-control-label" for="item24">4th item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                   <label class="custom-control-label" for="item25">5th item</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                       <!-- Step 6 -->
                       <h6><i class="step-icon la la-building"></i> SIUP</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="meetingName2">Name of Meeting :</label>
                               <input type="text" class="form-control" id="meetingName2">
                             </div>
                             <div class="form-group">
                               <label for="meetingLocation2">Location :</label>
                               <input type="text" class="form-control" id="meetingLocation2">
                             </div>
                             <div class="form-group">
                               <label for="participants2">Names of Participants</label>
                               <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="decisions2">Decisions Reached</label>
                               <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                             </div>
                             <div class="form-group">
                               <label>Agenda Items :</label>
                               <div class="c-inputs-stacked">
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                   <label class="custom-control-label" for="item21">1st item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                   <label class="custom-control-label" for="item22">2nd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                   <label class="custom-control-label" for="item23">3rd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                   <label class="custom-control-label" for="item24">4th item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                   <label class="custom-control-label" for="item25">5th item</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                       <!-- Step 7 -->
                       <h6><i class="step-icon la la-building"></i> TDP</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="meetingName2">Name of Meeting :</label>
                               <input type="text" class="form-control" id="meetingName2">
                             </div>
                             <div class="form-group">
                               <label for="meetingLocation2">Location :</label>
                               <input type="text" class="form-control" id="meetingLocation2">
                             </div>
                             <div class="form-group">
                               <label for="participants2">Names of Participants</label>
                               <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="decisions2">Decisions Reached</label>
                               <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                             </div>
                             <div class="form-group">
                               <label>Agenda Items :</label>
                               <div class="c-inputs-stacked">
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                   <label class="custom-control-label" for="item21">1st item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                   <label class="custom-control-label" for="item22">2nd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                   <label class="custom-control-label" for="item23">3rd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                   <label class="custom-control-label" for="item24">4th item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                   <label class="custom-control-label" for="item25">5th item</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                       <!-- Step 8 -->
                       <h6><i class="step-icon la la-building"></i> PKD</h6>
                       <fieldset>
                         <div class="row">
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="meetingName2">Name of Meeting :</label>
                               <input type="text" class="form-control" id="meetingName2">
                             </div>
                             <div class="form-group">
                               <label for="meetingLocation2">Location :</label>
                               <input type="text" class="form-control" id="meetingLocation2">
                             </div>
                             <div class="form-group">
                               <label for="participants2">Names of Participants</label>
                               <textarea name="participants" id="participants2" rows="4" class="form-control"></textarea>
                             </div>
                           </div>
                           <div class="col-md-6">
                             <div class="form-group">
                               <label for="decisions2">Decisions Reached</label>
                               <textarea name="decisions" id="decisions2" rows="4" class="form-control"></textarea>
                             </div>
                             <div class="form-group">
                               <label>Agenda Items :</label>
                               <div class="c-inputs-stacked">
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item21">
                                   <label class="custom-control-label" for="item21">1st item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item22">
                                   <label class="custom-control-label" for="item22">2nd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item23">
                                   <label class="custom-control-label" for="item23">3rd item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item24">
                                   <label class="custom-control-label" for="item24">4th item</label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                   <input type="checkbox" name="agenda2" class="custom-control-input" id="item25">
                                   <label class="custom-control-label" for="item25">5th item</label>
                                 </div>
                               </div>
                             </div>
                           </div>
                         </div>
                       </fieldset>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section>
        <!-- Form wzard with step validation section end -->
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer fixed-bottom footer-dark navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://nuhasmart.com"
        target="_blank">NUHAPOS </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <script src="<?php echo base_url('assets')?>/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url('assets')?>/app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets')?>/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url('assets')?>/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets')?>/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets')?>/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url('assets')?>/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url('assets') ?>/app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets') ?>/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
  type="text/javascript"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/vendors/js/pickers/daterange/daterangepicker.js"
  type="text/javascript"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/vendors/js/forms/validation/jquery.validate.min.js"
  type="text/javascript"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets') ?>/app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <script type="text/javascript" src="<?php echo base_url('assets') ?>/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script type="text/javascript">

  // Wizard tabs with numbers setup

  // Wizard tabs with icons setup
  $(".icons-tab-steps").steps({
      startIndex: 0,
      enableAllSteps: false,
      enablePagination: false,
      headerTag: "h6",
      bodyTag: "fieldset",
      transitionEffect: "fade",
      titleTemplate: '<span class="step">#index#</span> #title#',
      labels: {
          finish: 'Submit'
      },
      onFinished: function (event, currentIndex) {
          alert("Form submitted.");
      },
      labels: {
      cancel: "Cancel",
      current: "current step:",
      pagination: "Pagination",
      finish: "Wes Mari",
      enablePagination: false,
      next: "Lanjut",
      previous: "Mbalek",
      loading: "Loading ..."
  }
  });

  // Validate steps wizard

  // Show form
  var form = $(".steps-validation").show();

  $(".steps-validation").steps({
      headerTag: "h6",
      bodyTag: "fieldset",
      transitionEffect: "fade",
      titleTemplate: '<span class="step">#index#</span> #title#',
      labels: {
          finish: 'Submit'
      },
      onStepChanging: function (event, currentIndex, newIndex)
      {
          // Allways allow previous action even if the current form is not valid!
          if (currentIndex > newIndex)
          {
              return true;
          }
          // Forbid next action on "Warning" step if the user is to young
          if (newIndex === 3 && Number($("#age-2").val()) < 18)
          {
              return false;
          }
          // Needed in some cases if the user went back (clean up)
          if (currentIndex < newIndex)
          {
              // To remove error styles
              form.find(".body:eq(" + newIndex + ") label.error").remove();
              form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
          }
          form.validate().settings.ignore = ":disabled,:hidden";
          return form.valid();
      },
      onFinishing: function (event, currentIndex)
      {
          form.validate().settings.ignore = ":disabled";
          return form.valid();
      },
      onFinished: function (event, currentIndex)
      {
          alert("Submitted!");
      }
  });

  // Initialize validation
  $(".steps-validation").validate({
      ignore: 'input[type=hidden]', // ignore hidden fields
      errorClass: 'danger',
      successClass: 'success',
      highlight: function(element, errorClass) {
          $(element).removeClass(errorClass);
      },
      unhighlight: function(element, errorClass) {
          $(element).removeClass(errorClass);
      },
      errorPlacement: function(error, element) {
          error.insertAfter(element);
      },
      rules: {
          email: {
              email: true
          }
      }
  });


  // Initialize plugins
  // ------------------------------

  // Date & Time Range
  $('.datetime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
          format: 'MM/DD/YYYY h:mm A'
      }
  });
  </script>
</body>
</html>
