<!DOCTYPE html>
<html lang="en">

<?php $this->db = \Config\Database::connect();
$this->com_id = session('login')['com_id'];
$this->id = session('login')['id']; ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (isset($title)) ? 'LW | ' . strtoupper($title) : 'LOYAL WINGS' ?></title>

  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?= base_url('uploads/company_logo/favicon.png') ?>">

  <!-- Side bar -->
  <link href="<?= base_url() ?>/assets/css/sidebar.css" rel="stylesheet">

  <!-- icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!--jquery-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery-3.3.1.js"></script>

  <!--moment js-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/moment.js"></script>

  <!--Bootstrap 5 CSS--->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/Bootstrap5/css/bootstrap.min.css">

  <!--Bootstrap Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

  <!--Bootstrap 5 JS--->
  <script type="text/javascript" src="<?= base_url() ?>/assets/Bootstrap5/js/bootstrap.bundle.min.js"></script>

  <!--datatables CSS--->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/css/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/datatables/css/buttons.dataTables.min.css">

  <!-- drag -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>
  <script src="https://kit.fontawesome.com/de952d599f.js" crossorigin="anonymous"></script>

  <!--Datatables js-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/dataTables.responsive.min.js"></script>

  <!--Datatable dropdown----->
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/datatables.pdfmake.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/datatables.vfs_fonts.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/datatables.jszip.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>/assets/js/buttons.print.min.js"></script>

  <!--Dropdown select-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/bootstrap-select.min.css">
  <script src="<?= base_url() ?>/assets/Bootstrap5/js/bootstrap-select.min.js"></script>

  <!-- Toastr -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/toastr.min.css">
  <script src="<?= base_url() ?>/assets/js/toastr.min.js"></script>

  <!--form validation files-->
  <script src="<?= base_url() ?>/assets/js/formValidation.min.js"></script>
  <script src="<?= base_url() ?>/assets/js/bootstrap_validation.min.js"></script>

  <!--Dropdown select-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/Bootstrap5/css/select2.min.css">
  <script src="<?= base_url() ?>/assets/Bootstrap5/js/select2.min.js"></script>

  <!--summernote-->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <!-- datepicker -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/datepicker/bootstrap-datepicker.standalone.min.css">
  <script src="<?= base_url() ?>/assets/datepicker/bootstrap-datepicker.min.js"></script>

  <!-- jquery confirm -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/jquery-confirm/jquery-confirm.min.css">
  <script src="<?= base_url() ?>/assets/jquery-confirm/jquery-confirm.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
  <!--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>-->
  <!--<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />-->

  <!--main style css-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

  <!-- this is for journal entry  -->
  <script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
  <script src="https://jsuites.net/v4/jsuites.js"></script>
  <link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
  <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />
  <!-- this is for journal entry  -->

  <!-- ctrl+v dropzone -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>

  <!--date range picker-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/daterangepicker.css">
  <script src="<?= base_url() ?>/assets/js/daterangepicker.min.js"></script>

  <!--new file upload-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/file_upload/file_upload_style.css">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet" />

  <!-- Include Date Range Picker -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
  <!--Sidebar-->
  <script src="<?= base_url() ?>/assets/js/nav_notification.js"></script>
  <script src="<?= base_url() ?>/assets/js/nav_script.js"></script>
  <!--image navbar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css" />


  <!--tab/accordion-->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/activity.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/tab.css">

  <!-- CRM -->
  <link href="<?= base_url() ?>/assets/css/CRM.css" rel="stylesheet">
  <!-- Include ApexCharts library -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

  <!--payroll-->
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/employee.css">-->
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/advance.css">-->
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/deduction.css">
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/payrun.css">-->
  <!--<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/payroll/setting.css">-->

  <style>
    .help-block {
      margin-left: 10px;
      color: red;
    }

    .acctb {
      margin-bottom: -20px !important;
    }
  </style>

</head>

<body class="antialiased" onloadstart="hideAccordians()">

  <div class="sidebar  close5">
    <div class="logo">
      <!-- <i class="fab fa-trade-federation"></i> -->
      <img src="https://login.loyalwings.com/assets/img/logo.png" alt="test">
      <span class="logo-name">Loyal Wings</span>
      <div class="hamburger hamburger--elastic is-active">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>

    </div>

    <div class="scrollbox overflow-y-scroll">
      <div class="scrollbox-inner">
        <ul class="nav-list" ViewportSize="NaN">

          <li class="dull-group srchhide" id="search-box">
            <div class="flex-shrink-0 hidden md:block">
              <div x-data="{ showDropdown: false, searchText: '' }">
                <div class="relative flex items-center h-10  focus-within:shadow-lg ps-2 mb-2">
                  <input x-model="searchText" @input="showDropdown = searchText.length > 0" @click.away="showDropdown = false" class="bdrsearch peer search h-full outline-none text-sm text-white px-10    input-with-custom-placeholder nav-search-box " type="text" id="search1" placeholder="Search..." />
                  <svg class="z-10   absolute" style="left: -15px; pointer-events: none;" width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                      <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                  </svg>
                </div>
              </div>
            </div>
          </li>

          <!--dasboard menu-->
          <li class="dull-group">
            <a href="<?= base_url('dashboard') ?>">
              <i class="bi bi-house-heart" style="font-size: 18px;"></i>
              <span class="link-name dull">DASHBOARD</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url('dashboard') ?>" class="link-name">DASHBOARD</a></li>
            </ul>
          </li>

          <!--lead menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/lead">
              <i class="bi bi-file-bar-graph" style="font-size: 18px;"></i>
              <span class="link-name dull">LEAD</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/lead" class="link-name">LEAD</a></li>
            </ul>
          </li>

          <!--customer menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/customer">
              <i class="bi bi-person-check" style="font-size: 18px;"></i>
              <span class="link-name dull">CUSTOMER</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/customer" class="link-name">CUSTOMER</a></li>
            </ul>
          </li>

          <!--task menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/tasks/index">
              <i class="bi bi-menu-button-wide" style="font-size: 18px;"></i>
              <span class="link-name dull">TASKS</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/tasks/index" class="link-name">TASKS</a></li>
            </ul>
          </li>

          <!--accounting menu -->
          <li class="menu-item-compiler menu-item hover-show dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fab fa-codepen"></i> -->
                <i class="bi bi-calculator" style="font-size: 18px;"></i>
                <span class="link-name dull ">ACCOUNTING</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>
            <ul class="sub-menu hover-sub-menu hover-sub-menu-blog">
              <li><a href="#" class="link-name">ACCOUNTING</a></li>

              <li><a class="for-the-padding" id="blockChain" href="<?= base_url() ?>/accounting/chart-of-accounts"><span class="px-3"><i class="bi bi-bar-chart-steps"></i></span> Chart Of Accounts</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/accounting/journal-entry"><span class="px-3"><i class="bi bi-journal-text"></i></span> Journal Entry</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/accounting/transfer"><span class="px-3"><i class="bi bi-repeat"></i></span> Transfer</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/accounting/transactions"><span class="px-3"><i class="bi bi-credit-card-2-front"></i></i></span> Transactions</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/accounting/budget"><span class="px-3"><i class="bi bi-piggy-bank"></i></span> Budget</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/accounting/Settings"><span class="px-3"><i class="bi bi-sliders"></i></span> Setting</a></li>
            </ul>

          </li>

          <!-- hr record -->
          <li class="menu-item-compiler menu-item-blog dull-group">
            <div class="icon-link ">
              <a href="#">
                <!-- <i class="fab fa-blogger"></i> -->
                <i class="bi bi-journal-bookmark" style="font-size: 18px;"></i>
                <span class="link-name dull">HR RECORDS</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-blog ">
              <li><a href="#" class="link-name">HR RECORDS</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/dependants"><span class="px-3"><i class="bi bi-bezier2"></i></span> Dependants</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/layoff"><span class="px-3"><i class="bi bi-cloud-haze2"></i></span> Layoff</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/contracts"><span class="px-3"><i class="bi bi-hand-thumbs-up"></i></span> Contracts</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/org"><span class="px-3"><i class="bi bi-buildings"></i></span> Organisation</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/training"><span class="px-3"><i class="bi bi-book"></i></span> Training</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/job_description"><span class="px-3"><i class="bi bi-body-text"></i></span> Job Description</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/hr_profile/knowledge_base_q_a"><span class="px-3"><i class="bi bi-question-diamond"></i></span> Q & A</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/settingshr"><span class="px-3"><i class="bi bi-question-diamond"></i></span> Settings</a></li>
            </ul>
          </li>

          <!-- pay roll -->
          <li class="menu-item-compiler menu-item-blog dull-group">
            <div class="icon-link ">
              <a href="#">
                <!-- <i class="fab fa-blogger"></i> -->
                <i class="bi bi-journal-bookmark" style="font-size: 18px;"></i>
                <span class="link-name dull">PAY ROLL</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-blog ">
              <li><a href="#" class="link-name">PAY ROLL</a></li>

              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/Deduction_Type"><span class="px-3"><i class="bi bi-bezier2"></i></span> Deduction Type</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/Advance_Loan"><span class="px-3"><i class="bi bi-bezier2"></i></span> Advance/Loan</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/Branch"><span class="px-3"><i class="bi bi-bezier2"></i></span> Branch</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/Deductions"><span class="px-3"><i class="bi bi-bezier2"></i></span> Deductions</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/Earnings"><span class="px-3"><i class="bi bi-bezier2"></i></span> Earnings</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/EarningType"><span class="px-3"><i class="bi bi-bezier2"></i></span> Earning Type</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/Employee"><span class="px-3"><i class="bi bi-bezier2"></i></span> Employee</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/payroll/payroll"><span class="px-3"><i class="bi bi-bezier2"></i></span> Payroll</a></li>
              <li><a class="for-the-padding" href="<?= base_url() ?>/Payroll/Settings"><span class="px-3"><i class="bi bi-bezier2"></i></span> Settings</a></li>

            </ul>
          </li>

          <!--expense menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/expenses">
              <!-- <i class="fas fa-heart"></i>
             -->
              <i class="bi bi-receipt-cutoff" style="font-size: 18px;"></i>
              <span class="link-name dull">EXPENSES</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/expenses" class="link-name">EXPENSE</a></li>
            </ul>
          </li>

          <!--sales menu -->
          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-box2-heart" style="font-size: 18px;"></i>

                <span class="link-name dull">SALES</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">SALES</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/proposal"><span class="px-3"><i class="bi bi-laptop"></i></span> Proposals</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/estimate"><span class="px-3"><i class="bi bi-currency-dollar"></i></span> Estimates</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/invoice"><span class="px-3"><i class="bi bi-file-earmark-text"></i></span> Invoices</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/payment"><span class="px-3"><i class="bi bi-wallet2"></i></span> Payments</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/credit-notes"><span class="px-3"><i class="bi bi-credit-card-2-front"></i></span> Credit Notes</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/orders"><span class="px-3"><i class="bi bi-receipt"></i></span> Sales Order</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/sales/delivery-challan"><span class="px-3"><i class="bi bi-postcard"></i></span> Delivery Challan</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/invoice-item"><span class="px-3"><i class="bi bi-boxes"></i></span> Items</a></li>
            </ul>
          </li>

          <!--purchase menu -->
          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-bag-heart" style="font-size: 18px;"></i>

                <span class="link-name dull">PURCHASE</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">PURCHASE</a></li>

              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/item-purchase"><span class="px-3"><i class="bi bi-file-earmark-break"></i></span> Items</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/vendor"><span class="px-3"><i class="bi bi-file-earmark-break"></i></span> Vendor</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/vendor-item"><span class="px-3"><i class="bi bi-file-earmark-break"></i></span> Vendor Item</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/purchase-request"><span class="px-3"><i class="bi bi-file-earmark-break"></i></span> Request</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/purchase-quotation"><span class="px-3"><i class="bi bi-file-earmark-break"></i></span> Quotation</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/Purchase/Contract"><span class="px-3"><i class="bi bi-hand-thumbs-up"></i></span> Contract</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/purchase-order"><span class="px-3"><i class="bi bi-hand-thumbs-up"></i></span> Purchase Order</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/purchase/debit-notes"><span class="px-3"><i class="bi bi-credit-card-2-back"></i></span> Debit Notes</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/purchase-settings"><span class="px-3"><i class="bi bi-gear"></i></span> Settings</a></li>
            </ul>
          </li>

          <!--inventory menu -->
          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-clipboard-plus" style="font-size: 18px;"></i>

                <span class="link-name dull">INVENTORY</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">INVENTORY</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/comoditylist"><span class="px-3"><i class="bi bi-boxes"></i></span> Items</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/Inventory/assemblyItems"><span class="px-3"><i class="bi bi-boxes"></i></span>Assembly Items</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/Inventory/receiving/0"><span class="px-3"><i class="bi bi-columns"></i></span> Inventory Receiving Voucher</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/Inventory/manageDelivery/0"><span class="px-3"><i class="bi bi-columns-gap"></i></span> Inventory Delivery Voucher</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/packing"><span class="px-3"><i class="bi bi-list-columns"></i></span> Packing Lists</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/index"><span class="px-3"><i class="bi bi-truck"></i></span> Internal Delivery Note</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/loss-adjustment"><span class="px-3"><i class="bi bi-circle-half"></i></span> Loss & Adjustment</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/warehouse-mangement"><span class="px-3"><i class="bi bi-house-gear"></i></span> Warehouse</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/Inv-history"><span class="px-3"><i class="bi bi-list-columns-reverse"></i></span> Inventory History</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/"><span class="px-3"><i class="bi bi-graph-up"></i></span> Report</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/settings"><span class="px-3"><i class="bi bi-sliders"></i></span> Settings</a></li>
            </ul>
          </li>
          <!--CRM -->
          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-person-video3" style="font-size: 18px;"></i>

                <span class="link-name dull">CRM</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">CRM</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/Deals/index"><span class="px-3"><i class="bi bi-geo-alt"></i></span>Deals</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/zone"><span class="px-3"><i class="bi bi-geo-alt"></i></span>Zone</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/campaign"><span class="px-3"><i class="bi bi-megaphone"></i></span>Campaign</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/salesteam"><span class="px-3"><i class="bi bi-person-video3"></i></span>Sales Team</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/visit_report"><span class="px-3"><i class="bi bi-journal-code"></i></span>Visiting Report</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/telecall"><span class="px-3"><i class="bi bi-phone-vibrate"></i></span>Tele Calling</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/sale"><span class="px-3"><i class="bi bi-person-add"></i></span>Sales Member</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/commission"><span class="px-3"><i class="bi bi-percent"></i></span>Commission Management</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/reimbursement"><span class="px-3"><i class="bi bi-file-ruled"></i></span>Reimbursement Category</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/reimburse"><span class="px-3"><i class="bi bi-currency-rupee"></i></span>Reimbursement</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/tele_status"><span class="px-3"><i class="bi bi-pip"></i></span>Telecalling Status</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/data_collector"><span class="px-3"><i class="bi bi-collection"></i></span>Data Collector</a></li>
              <li class="for-the-padding"><a href="<?= base_url() ?>/call_schedule"><span class="px-3"><i class="bi bi-calendar2-week"></i></span>Call Schedule</a></li>
            </ul>
          </li>

          <!--lead menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/Projects/index">
              <i class="bi bi-file-bar-graph" style="font-size: 18px;"></i>
              <span class="link-name dull">PROJECTS</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/Projects/index" class="link-name">PROJECTS</a></li>
            </ul>
          </li>

          <!--lead menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/Attendance/attendance">
              <i class="bi bi-file-bar-graph" style="font-size: 18px;"></i>
              <span class="link-name dull">ATTENDANCE</span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/lead" class="link-name">ATTENDANCE</a></li>
            </ul>
          </li>

          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-file-earmark-spreadsheet" style="font-size: 18px;"></i>

                <span class="link-name dull">TIMESHEETS</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">TIMESHEET</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url('/timesheets/get-attendance') ?>"><span class="px-3"><i class="bi bi-clock-history"></i></span> Attendance</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url('/timesheets/shift') ?>"><span class="px-3"><i class="bi bi-clock-history"></i></span> Shift</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url('/timesheets/shift_categories') ?>"><span class="px-3"><i class="bi bi-clock-history"></i></span> Shift Categories</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url('/timesheets/get-workshift') ?>"><span class="px-3"><i class="bi bi-clock-history"></i></span> Work Shifts</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url('/timesheets/workplace') ?>"><span class="px-3"><i class="bi bi-clock-history"></i></span> Workplace</a></li>

              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/TimeSheet/leaveManagement"><span class="px-3"><i class="bi bi-box-arrow-right"></i></span> Leave</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/TimeSheet/workroutes"><span class="px-3"><i class="bi bi-reception-3"></i></span> Work routes</a></li>
              <!--<li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/TimeSheet/shiftCategories"><span class="px-3"><i class="bi bi-diagram-3"></i></span> Shift Categories</a></li>-->
              <!--<li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/TimeSheet/workPlace"><span class="px-3"><i class="bi bi-pc-display-horizontal"></i></span> Workplace</a></li>-->
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/TimeSheet"><span class="px-3"><i class="bi bi-sliders"></i></span> Settings</a></li>
            </ul>
          </li>

          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-folder-symlink" style="font-size: 18px;"></i>

                <span class="link-name dull">FILE SHARING</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">FILE SHARING</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/manage-sharing"><span class="px-3"><i class="bi bi-share"></i></span> Manage Sharing</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/manage-download"><span class="px-3"><i class="bi bi-download"></i></span> Manage Downloads</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/filesharing-report"><span class="px-3"><i class="bi bi-list-ol"></i></span> Reports</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/filesharing-settings"><span class="px-3"><i class="bi bi-sliders"></i></span> Settings</a></li>
            </ul>
          </li>

          <li class="menu-item-compiler dull-group">
            <div class="icon-link">
              <a href="#">
                <!-- <i class="fas fa-laptop-code"></i> -->
                <i class="bi bi-headset" style="font-size: 18px;"></i>

                <span class="link-name dull">SALES AGENT</span>
                <!-- <span class="circular-bg"></span> -->
              </a>
              <i class="fa-solid fa-angle-down arrow"></i>
            </div>

            <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
              <li><a href="#" class="link-name">SALES AGENT</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/management"><span class="px-3"><i class="bi bi-building-gear"></i></span> Management</a></li>
              <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/agent-program"><span class="px-3"><i class="bi bi-person-lines-fill"></i></span> Agent Program</a></li>
            </ul>
          </li>

          <!--custom module menu -->
          <li class="dull-group">
            <a href="<?= base_url() ?>/custom/newView">
              <i class="bi bi-menu-button" style="font-size: 18px;"></i>
              <span class="link-name dull">ADD CUSTOM MENU</span>
              <!-- <span class="circular-bg"></span> -->
            </a>
            <?php
            $com_id = $this->com_id;
            $custom_menu_h = $this->db->table('custom_menu')->getWhere(['com_id' => $this->com_id])->getResult();
            foreach ($custom_menu_h as $cus_menu) {
              $role_chechs = $this->db->table('staff')->getWhere(['id' => $this->id])->getRow();
              $array_role = explode('-', $cus_menu->permission);
              $array_id = explode('-', $cus_menu->staff_per);
              if (in_array($role_chechs->role, $array_role) && in_array($role_chechs->id, $array_id) && $cus_menu->view == 1 || $role_chechs == 0 || $cus_menu->all == 1) {

            ?>
                <ul class="sub-menu blank">
                  <li><a href="<?= base_url() ?>/custom/newView" class="link-name">ADD CUSTOM MENU</a></li>
                </ul>


          <li class="dull-group">
            <a>
              <i class="bi bi-person" style="font-size: 18px;"></i>
              <span class="link-name dull"><?= ucfirst($cus_menu->name) ?></span>
              <!-- <span class="circular-bg"></span> -->
            </a>

            <ul class="sub-menu blank">
              <li><a href="<?= base_url() ?>/custom/newPage/<?= $cus_menu->name ?>" class="link-name"><?= ucfirst($cus_menu->name) ?></a></li>
            </ul>
          </li>
      <?php }
            } ?>

      </li>

      <!--setup menu -->
      <li class="menu-item-compiler dull-group">
        <div class="icon-link">
          <a href="#">
            <!-- <i class="fas fa-laptop-code"></i> -->
            <i class="bi bi-building-check" style="font-size: 18px;"></i>

            <span class="link-name dull">SETUP</span>
            <!-- <span class="circular-bg"></span> -->
          </a>
          <i class="fa-solid fa-angle-down arrow"></i>
        </div>

        <ul class="sub-menu hover-sub-menu hover-sub-menu-compiler ">
          <li><a href="#" class="link-name">SETUP</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/contract-type"><span class="px-3"><i class="bi bi-file-earmark-lock"></i></span> Contract Type</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/currency"><span class="px-3"><i class="bi bi-currency-bitcoin"></i></span> Currencies</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/tax"><span class="px-3"><i class="bi bi-newspaper"></i></span> Tax</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/exp-cate"><span class="px-3"><i class="bi bi-bank"></i></span> Expense Category</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/pay-mode"><span class="px-3"><i class="bi bi-terminal-plus"></i></span> Payment Mode</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/cus-group"><span class="px-3"><i class="bi bi-people"></i></span> Customer Group</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/staff"><span class="px-3"><i class="bi bi-person-badge"></i></span> Staff</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/staff-role"><span class="px-3"><i class="bi bi-person-gear"></i></span> Staff Role</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/designation"><span class="px-3"><i class="bi bi-person-gear"></i></span> Staff Designation</a></li>
          <li class="new-list-align for-the-padding"><a href="<?= base_url() ?>/setup/setting"><span class="px-3"><i class="bi bi-sliders"></i></span> Setting</a></li>
        </ul>
      </li>


      <li class="dull-group">
        <a>
          <i class="bi bi-bell" style="font-size: 18px;"></i>
          <span class="link-name dull">SUBSCRIPTION</span>
          <!-- <span class="circular-bg"></span> -->
        </a>

        <ul class="sub-menu blank">
          <li><a href="#" class="link-name">SUBSCRIPTION</a></li>
        </ul>
      </li>

        </ul>
      </div>
    </div>

  </div>

  <div class="home-section">


    <div class="nav-height">
      <nav x-data="{ open: false }" @keydown.window.escape="open = false" class="flex">
        <!-- <div class="hamburger hamburger--elastic is-active">
          <div class="hamburger-box">
            <div class="hamburger-inner"></div>
          </div>
        </div> -->
        <div class="w-full px-0 ml-[1rem] mr-0 lg:px-8">
          <div class="flex items-center justify-between h-16">
            <div class="flex items-center justify-end md:justify-between flex-grow">
              <div class="flex-shrink-0 hidden md:block">
                <div x-data="{ showDropdown: false, searchText: '' }">
                  <div class="relative flex items-center w-full h-10  focus-within:shadow-lg  px-5  ">
                    <input x-model="searchText" @input="showDropdown = searchText.length > 0" @click.away="showDropdown = false" class="bdrsearch peer search h-full w-full outline-none text-sm text-gray-900 px-10    input-with-custom-placeholder nav-search-box " type="text" id="search" placeholder="Search..." />
                    <svg class="z-10   absolute" style="left: 55px; pointer-events: none;" width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </svg>
                    <div x-show="showDropdown" class="absolute z-10 right-0 mt-10  origin-top-left rounded-md shadow-lg nav-search-pop" style="top: 1px; width: 20rem; left: 1px;display:none;">
                      <div class="py-1 bg-white rounded-md shadow-xs">
                        <div class="flex flex-col  text-sm text-gray-700">
                          <h2 class=" px-4 py-2 text-gray-700 font-semibold">RECENT SEARCHES</h2>
                          <div>
                            <div class="text-sm px-4 py-2 flex gap-3 ">
                              <span class="bg-blue-200 text-blue-500 px-2  py-1 
                          rounded-full flex gap-1 justify-center items-center"><span>how to setup </span>

                                <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                  <g id="SVGRepo_iconCarrier">
                                    <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#4299e1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                  </g>
                                </svg></span>


                              <span class="bg-blue-200 text-blue-500 px-2  py-1 
                          rounded-full flex gap-1 justify-center items-center"><span>buttons </span>

                                <svg width="14px" height="14px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                  <g id="SVGRepo_iconCarrier">
                                    <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#4299e1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                  </g>
                                </svg></span>

                            </div>

                          </div>

                        </div>

                        <div class="flex flex-col  text-sm text-gray-700">
                          <h2 class=" px-4 py-2 text-gray-700 font-semibold">Pages</h2>
                          <div>
                            <div class="text-sm px-4 py-2 text-gray-700 hover:text-gray-900 hover:bg-blue-100/20">
                              <p>Analytics</p>
                            </div>
                            <div class="text-sm px-4 py-2 text-gray-700 hover:text-gray-900 hover:bg-blue-100/20">
                              <p>My account settings</p>
                            </div>
                          </div>

                        </div>

                        <div class="px-4 py-2 text-sm text-center">
                          <button class="text-white bg-gray-700 rounded-md px-3 py-1 hover:bg-blue-800/20" @click="viewAllResults">
                            View All Results
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class=" lg:block">
                <div class="flex items-center">
                  <button id="dashboard" onclick="toggleFullScreen()" class="flex flex-row items-center px-3 py-3 text-sm font-medium text-white rounded-md focus:outline-none focus:text-white  navbar-hover rounded-full">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#495057">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.94358 1.25L10 1.25C10.4142 1.25 10.75 1.58579 10.75 2C10.75 2.41421 10.4142 2.75 10 2.75C8.09318 2.75 6.73851 2.75159 5.71085 2.88976C4.70476 3.02502 4.12511 3.27869 3.7019 3.7019C3.27869 4.12511 3.02502 4.70476 2.88976 5.71085C2.75159 6.73851 2.75 8.09318 2.75 10C2.75 10.4142 2.41421 10.75 2 10.75C1.58579 10.75 1.25 10.4142 1.25 10L1.25 9.94358C1.24998 8.10582 1.24997 6.65019 1.40314 5.51098C1.56076 4.33856 1.89288 3.38961 2.64124 2.64124C3.38961 1.89288 4.33856 1.56076 5.51098 1.40314C6.65019 1.24997 8.10582 1.24998 9.94358 1.25ZM18.2892 2.88976C17.2615 2.75159 15.9068 2.75 14 2.75C13.5858 2.75 13.25 2.41421 13.25 2C13.25 1.58579 13.5858 1.25 14 1.25L14.0564 1.25C15.8942 1.24998 17.3498 1.24997 18.489 1.40314C19.6614 1.56076 20.6104 1.89288 21.3588 2.64124C22.1071 3.38961 22.4392 4.33856 22.5969 5.51098C22.75 6.65019 22.75 8.10583 22.75 9.94359V10C22.75 10.4142 22.4142 10.75 22 10.75C21.5858 10.75 21.25 10.4142 21.25 10C21.25 8.09318 21.2484 6.73851 21.1102 5.71085C20.975 4.70476 20.7213 4.12511 20.2981 3.7019C19.8749 3.27869 19.2952 3.02502 18.2892 2.88976ZM2 13.25C2.41421 13.25 2.75 13.5858 2.75 14C2.75 15.9068 2.75159 17.2615 2.88976 18.2892C3.02502 19.2952 3.27869 19.8749 3.7019 20.2981C4.12511 20.7213 4.70476 20.975 5.71085 21.1102C6.73851 21.2484 8.09318 21.25 10 21.25C10.4142 21.25 10.75 21.5858 10.75 22C10.75 22.4142 10.4142 22.75 10 22.75H9.94359C8.10583 22.75 6.65019 22.75 5.51098 22.5969C4.33856 22.4392 3.38961 22.1071 2.64124 21.3588C1.89288 20.6104 1.56076 19.6614 1.40314 18.489C1.24997 17.3498 1.24998 15.8942 1.25 14.0564L1.25 14C1.25 13.5858 1.58579 13.25 2 13.25ZM22 13.25C22.4142 13.25 22.75 13.5858 22.75 14V14.0564C22.75 15.8942 22.75 17.3498 22.5969 18.489C22.4392 19.6614 22.1071 20.6104 21.3588 21.3588C20.6104 22.1071 19.6614 22.4392 18.489 22.5969C17.3498 22.75 15.8942 22.75 14.0564 22.75H14C13.5858 22.75 13.25 22.4142 13.25 22C13.25 21.5858 13.5858 21.25 14 21.25C15.9068 21.25 17.2615 21.2484 18.2892 21.1102C19.2952 20.975 19.8749 20.7213 20.2981 20.2981C20.7213 19.8749 20.975 19.2952 21.1102 18.2892C21.2484 17.2615 21.25 15.9068 21.25 14C21.25 13.5858 21.5858 13.25 22 13.25Z" fill="#fff"></path>
                      </g>
                    </svg>
                    <!-- <span class="ml-2">Full Screen</span> -->
                  </button>

                  <!-- <div class="relative" x-data="{ open: false}">
                      <button
                        @click="open = !open"
                        class="flex flex-row items-center px-3 py-2 ml-0 md:ml-4 text-sm font-medium text-gray-300 rounded-md hover:text-white hover:bg-blue-100/20 focus:outline-none focus:text-white focus:bg-blue-900"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="w-4 h-4"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-folder"
                        >
                          <path
                            d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"
                          ></path>
                        </svg>
                      
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          :class="{'rotate-180': open, 'rotate-0': !open}"
                          class="w-4 h-4 mt-1 transform"
                          viewBox="0 0 24 24"
                          fill="none"
                          stroke="currentColor"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-chevron-down"
                        >
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </button>
                      <div
                        @click.away="open = false"
                        x-show="open"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="transform opaity-0 scale-95"
                        x-transition:enter-end="transform opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-95"
                        class="absolute right-0 w-48 mt-2 origin-top-right rounded-md shadow-lg"
                      >
                        <div class="py-1 bg-white rounded-md shadow-xs">
                          <a
                            href="#"
                            class="flex flex-row items-center px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100"
                          >
                            Pages-1
                          </a>
                          <a
                            href="#"
                            class="flex flex-row items-center px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100"
                          >
                            Pages-2
                          </a>
                          <a
                            href="#"
                            class="flex flex-row items-center px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100"
                          >
                            Pages-3
                          </a>
                        </div>
                      </div>
                    </div> -->

                  <!-- notification -->
                  <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="flex flex-row items-center px-2 py-2 ml-0 text-sm font-medium text-gray-300 rounded-md hover:text-white  focus:outline-none focus:text-white rounded-full leading-none navbar-hover ">
                      <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path d="M9.00195 17H5.60636C4.34793 17 3.71872 17 3.58633 16.9023C3.4376 16.7925 3.40126 16.7277 3.38515 16.5436C3.37082 16.3797 3.75646 15.7486 4.52776 14.4866C5.32411 13.1835 6.00031 11.2862 6.00031 8.6C6.00031 7.11479 6.63245 5.69041 7.75766 4.6402C8.88288 3.59 10.409 3 12.0003 3C13.5916 3 15.1177 3.59 16.2429 4.6402C17.3682 5.69041 18.0003 7.11479 18.0003 8.6C18.0003 11.2862 18.6765 13.1835 19.4729 14.4866C20.2441 15.7486 20.6298 16.3797 20.6155 16.5436C20.5994 16.7277 20.563 16.7925 20.4143 16.9023C20.2819 17 19.6527 17 18.3943 17H15.0003M9.00195 17L9.00031 18C9.00031 19.6569 10.3435 21 12.0003 21C13.6572 21 15.0003 19.6569 15.0003 18V17M9.00195 17H15.0003" stroke="#495057" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </svg>

                    </button>
                    <div @click.away="open = false" x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opaity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0  mt-3 z-10 origin-top-right notification-pop   shadow-lg notification-box-border " style="width: 310px;display:none;" id="notificationWrapper">

                      <div class="notification-top flex flex-col    ">
                        <div class="flex justify-between p-4 ">
                          <p class="text-white font-semibold">Notifications</p>
                          <p class="bg-white text-black noti-number rounded-md ">4 New</p>
                        </div>

                        <div class=" px-3 mt-5 flex flex-row text-xs " id="notificationCategories">
                          <p class="px-3 py-2  noti-active-true" data-category="all">All (4)</p>
                          <p class="px-3 py-2 noti-active-false" data-category="messages">Messages</p>
                          <p class="px-3 py-2 noti-active-false " data-category="alerts">Alerts</p>
                        </div>
                      </div>




                      <div class="bg-white noti-second-half">
                        <div id="contentAll" style="display: block;">

                          <label x-data="{ dismissed: false }" x-show="!dismissed" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="flex flex-row items-center justify-between px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-blue-100">
                            <span>Notification 1</span>
                            <input type="checkbox" @click="dismissed = true" />
                          </label>
                          <label x-data="{ dismissed: false }" x-show="!dismissed" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="flex flex-row items-center justify-between px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100">
                            <span>Notification 2</span>
                            <input type="checkbox" @click="dismissed = true" />
                          </label>
                          <label x-data="{ dismissed: false }" x-show="!dismissed" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="flex flex-row items-center justify-between px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100">
                            <span>Notification 3</span>
                            <input type="checkbox" @click="dismissed = true" />
                          </label>
                        </div>
                        <div id="contentMessages" style="display: none;"><label x-data="{ dismissed: false }" x-show="!dismissed" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="flex flex-row items-center justify-between px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-blue-100">
                            <span>Notification 1</span>
                            <input type="checkbox" @click="dismissed = true" />
                          </label>
                          <label x-data="{ dismissed: false }" x-show="!dismissed" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="flex flex-row items-center justify-between px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100">
                            <span>Notification 2</span>
                            <input type="checkbox" @click="dismissed = true" />
                          </label>
                          <label x-data="{ dismissed: false }" x-show="!dismissed" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="flex flex-row items-center justify-between px-4 py-2 text-sm text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100">
                            <span>Notification 3</span>
                            <input type="checkbox" @click="dismissed = true" />
                          </label>
                        </div>
                        <div id="contentAlerts" style="display: none; padding: 1.5rem;">
                          <div class="flex flex-col items-center justify-center">

                            <img src="./images/bell.svg" height="100" width="100" alt="">

                            <div class="text-center pb-4 mt-2">
                              <p class="alert-text">Hey! You have no any notifications </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>


                </div>
              </div>
            </div>

            <!-- profile  -->
            <div class=" lg:block profile-bg">
              <div class="flex items-center  ">
                <div @click.away="open = false" class="relative  " x-data="{ open: false }">
                  <div class="flex flex-row gap-3  px-3 ">
                    <button @click="open = !open" class="flex items-center max-w-xs text-sm text-white rounded-full focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true" x-bind:aria-expanded="open">
                      <img class="w-8 h-8 rounded-full" src="<?= base_url(session('login')['user_profile'] ?? '') ?>" alt="" />
                      <div class="hidden xl:block flex-col gap-1 px-3 " style="text-align: start;">

                        <p class="font-for-profile"><?= session('login')['user_name'] ?></p>
                        <p class="font-for-profile-2"><?= session('login')['role_name'] ?></p>
                      </div>
                    </button>
                    <!-- <div class="hidden xl:block flex-col gap-1 ">

                      <p class="font-for-profile">Anna Adame</p>
                      <p class="font-for-profile-2">Founder</p>
                    </div> -->
                  </div>
                  <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opaity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-48 mt-3 z-10 origin-top-right    rounded-md shadow-lg profile-pop" style="display:none;">
                    <div class="py-1  bg-white rounded-md shadow-xs" style="font-size: 0.8125rem;">
                      <span class="flex flex-row items-center px-4 py-2 text-sm text-gray-700 " href="" style="font-size: .7109375rem; color: #878a99; font-weight: 500; line-height: 1.2;">Welcome
                        Anna!</span>
                      <a href="#" class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#878A99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                          <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-2">Your Profile</span>
                      </a>
                      <a class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100" href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z" fill="rgba(135,138,153,1)"></path>
                        </svg><span class="ml-2">Messages</span></a>
                      <a class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100" href=""> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path d="M9 1V3H15V1H17V3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3H7V1H9ZM20 8H4V19H20V8ZM15.0355 10.136L16.4497 11.5503L11.5 16.5L7.96447 12.9645L9.37868 11.5503L11.5 13.6716L15.0355 10.136Z" fill="rgba(135,138,153,1)"></path>
                        </svg><span class="ml-2">Taskboard</span></a>
                      <a class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path d="M2.04932 12.9999H7.52725C7.70624 16.2688 8.7574 19.3053 10.452 21.8809C5.98761 21.1871 2.5001 17.5402 2.04932 12.9999ZM2.04932 10.9999C2.5001 6.45968 5.98761 2.81276 10.452 2.11902C8.7574 4.69456 7.70624 7.73111 7.52725 10.9999H2.04932ZM21.9506 10.9999H16.4726C16.2936 7.73111 15.2425 4.69456 13.5479 2.11902C18.0123 2.81276 21.4998 6.45968 21.9506 10.9999ZM21.9506 12.9999C21.4998 17.5402 18.0123 21.1871 13.5479 21.8809C15.2425 19.3053 16.2936 16.2688 16.4726 12.9999H21.9506ZM9.53068 12.9999H14.4692C14.2976 15.7828 13.4146 18.3732 11.9999 20.5915C10.5852 18.3732 9.70229 15.7828 9.53068 12.9999ZM9.53068 10.9999C9.70229 8.21709 10.5852 5.62672 11.9999 3.40841C13.4146 5.62672 14.2976 8.21709 14.4692 10.9999H9.53068Z" fill="rgba(135,138,153,1)"></path>
                        </svg>
                        <span class="ml-2">Help</span></a>
                      <hr>
                      <a class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path d="M22.0049 7.99979H13.0049C12.4526 7.99979 12.0049 8.4475 12.0049 8.99979V14.9998C12.0049 15.5521 12.4526 15.9998 13.0049 15.9998H22.0049V19.9998C22.0049 20.5521 21.5572 20.9998 21.0049 20.9998H3.00488C2.4526 20.9998 2.00488 20.5521 2.00488 19.9998V3.99979C2.00488 3.4475 2.4526 2.99979 3.00488 2.99979H21.0049C21.5572 2.99979 22.0049 3.4475 22.0049 3.99979V7.99979ZM15.0049 10.9998H18.0049V12.9998H15.0049V10.9998Z" fill="rgba(135,138,153,1)"></path>
                        </svg>
                        <span class="ml-2">Balance</span></a>
                      <a href="#" class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#878A99" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                          <circle cx="12" cy="12" r="3"></circle>
                          <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                          </path>
                        </svg>
                        <span class="ml-2">Settings</span>
                      </a>
                      <a class="flex flex-row items-center px-4 py-2  text-gray-700 focus:text-gray-900 hover:text-gray-900 focus:outline-none hover:bg-blue-100 focus:bg-gray-100" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16">
                          <path fill="none" d="M0 0h24v24H0z"></path>
                          <path d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z" fill="rgba(135,138,153,1)"></path>
                        </svg>
                        <span class="ml-2">Lockscreen</span></a>
                      <a href="<?= base_url() ?>/login/logout" class="flex flex-row items-center px-4 py-2  text-red-500 hover:text-red-700 hover:bg-red-100 focus:outline-none focus:text-red-700 focus:bg-red-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                          <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                          <polyline points="16 17 21 12 16 7"></polyline>
                          <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ml-2">Logout</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </nav>
    </div>

    <div id="sidebarRight" class="z-10 sidebarRight">
      <div class="sidebar-content" style="display: flex; justify-content: space-between">
        <span>sidebar content </span>
        <span class="close-btn"><svg class="close-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0z"></path>
            <path d="M11.9997 10.5865L16.9495 5.63672L18.3637 7.05093L13.4139 12.0007L18.3637 16.9504L16.9495 18.3646L11.9997 13.4149L7.04996 18.3646L5.63574 16.9504L10.5855 12.0007L5.63574 7.05093L7.04996 5.63672L11.9997 10.5865Z" fill="currentColor"></path>
          </svg></span>
      </div>
      <div style="
            display: flex;
            flex-direction: column;
            padding: 0px 10px 0px 0px;       
            overflow-y: auto;
            overflow-x: hidden;
            height: 90vh;
          ">
        <div class="widgets-container">
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-person-check"></i></div>
            <div class="wid-title"><span>CUSTOMER</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-menu-button-wide"></i></div>
            <div class="wid-title"><span>TASKS</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-calculator"></i></div>
            <div class="wid-title"><span>ACCOUNTING</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"> <i class="bi bi-journal-bookmark"></i></div>
            <div class="wid-title"><span>HR RECORDS</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-receipt-cutoff"></i></div>
            <div class="wid-title"><span>EXPENSE</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-box2-heart"></i></div>
            <div class="wid-title"><span>SALES</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-bag-heart"></i></div>
            <div class="wid-title"><span>PURCHASE</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-clipboard-plus"></i></div>
            <div class="wid-title"><span>INVENTORY</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-person-video3"></i></div>
            <div class="wid-title"><span>CRM</span></div>
          </div>
          <div class="widget">
            <div class="wid-icon"><i class="bi bi-building-check"></i></div>
            <div class="wid-title"><span>SETUP</span></div>
          </div>
        </div>
        <div class="bar-chart" id="chart"></div>
        <div style="display: flex; justify-content: space-between" class="bottom-buttons">
          <div class="reset-button">Reset</div>
          <div class="buy-button-1">Buy now</div>
        </div>
      </div>
    </div>

    <div class="toggle-section">
      <!-- <div class="col-md-5 col-11">
        <button type="button" class="hrbtns contractbtn addbttn"
          onclick="showLgModal('<?= base_url() ?>/lead/addLead','Add New Lead')"><i class="fa fa-plus"></i> NEW LEAD</button>
        <button type="button" class="impbtn-default"><a href="<?= base_url() ?>/import_lead" class="link-class"
            style="color:white"><i class="fa-solid fa-arrow-down-wide-short"></i> IMPORT LEAD</a></button>
        <button type="button" role="button" class="  hrbtns itemgrnbtn" data-bs-toggle="collapse"
          data-bs-target="#collapseOne"><i class="fa-solid fa-sliders" style="font-size: 12px"></i> FILTER</button>
        <button type="button" class=" hrbtns grpBttn " data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="true">SWITCH TO KAN BAN</button>
      </div> -->
      <div class="page-title">
        <h2></h2>
        <!-- <span class="page-title-capsule"></span> -->
      </div>
      <div id="rightSliderToggle"></div>
    </div>

    <!--- Coupon  modal-->
    <div id="coupon_modal_md" class="modal fade custom-content pe-0" role="dialog">
      <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header coupon-header ">
            <!-- <button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button> -->
          </div>
          <div class="modal-body coupon-body">


            <h2>Discount Automaticall Applied</h2>
            <span class="claim-btn">Claim Now ! </span>
            <div>
              <div class="col-md-12">
                <div class="row ">
                  <div class="col-md-12">
                    <div class="purchasegrp mobile-number">
                      <!-- <label for="mobile-num" class="purchaseinfo">Mobile Number </label> -->
                      <select name="" id="">
                        <option value="+91">+91</option>
                        <option value="+1">+1</option>
                        <option value="+02">+02</option>
                      </select>
                      <input type="number" id="mobile-num" class="" placeholder="Enter Mobile Number ...">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row ">

                  <div class="col-md-12">
                    <div class="purchasegrp">
                      <label for="years" class="bold me-1 "> Years in Operation </label>
                      <input type="radio" name="year" id="year-0-5" class=" ">
                      <label for="year-0-5" class="purchaseinfo">0-5 </label>
                      <input type="radio" name="year" id="year-great-5" class=" ">
                      <label for="year-great-5" class="purchaseinfo"> Greater than 5 </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!---- coupon modal script--->
    <script>
      let couponHeader = document.querySelector('.coupon-header');


      function showCouponModal() {
        $('#coupon_modal_md').modal('show', {
          backdrop: 'true'
        });
      }

      window.addEventListener('load', () => {
        setTimeout(() => {
          showCouponModal();
          setTimeout(() => {
            couponHeader.insertAdjacentHTML('afterbegin', `<button type="button" class="btn-close closebtn " data-bs-dismiss="modal"></button>`)
          }, 4000)


        }, 1000)
      });
    </script>
    <script>
      var options = {
        series: [{
            name: "Net Profit",
            data: [44, 55, 57, 56], // Reduced to 4 months
          },
          {
            name: "Revenue",
            data: [76, 85, 101, 98], // Reduced to 4 months
          },
          {
            name: "Free Cash Flow",
            data: [35, 41, 36, 26], // Reduced to 4 months
          },
        ],
        chart: {
          type: "bar",
          height: 350,
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
          },
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        xaxis: {
          categories: ["Feb", "Mar", "Apr", "May"], // Reduced to 4 months
        },
        // yaxis: {
        //   title: {
        //     text: '$ (thousands)'
        //   }
        // },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function(val) {
              return "$ " + val + " thousands";
            },
          },
        },
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
    </script>
    <div class="main-content container-fluid">
    </div>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
    <script>
      var forEach = function(t, o, r) {
        if ("[object Object]" === Object.prototype.toString.call(t))
          for (var c in t)
            Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
        else
          for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t);
      };

      window.onload = function() {
        var hamburger = document.querySelector(".hamburger");
        var taskFooter = document.querySelector('.taskfooter');
        hamburger.addEventListener('click', function() {
          taskFooter.classList.toggle("give-left-margin");

        })

      }

      var hamburgers = document.querySelectorAll(".hamburger");
      if (hamburgers.length > 0) {
        forEach(hamburgers, function(hamburger) {
          hamburger.addEventListener(
            "click",
            function() {
              this.classList.toggle("is-active");
            },
            false
          );
        });
      }
    </script>
    <script src="script.js"></script>
    <script src="notification.js"></script>

    <script>
      function toggleFullScreen() {
        if (!document.fullscreenElement) {
          document.documentElement.requestFullscreen().catch((err) => {
            console.error(
              `Error attempting to enable full-screen mode: ${err.message}`
            );
          });
        } else {
          document.exitFullscreen();
        }
      }
    </script>

    <!-- Your JavaScript code -->
    <script>
      const dropdown = {
        viewAllResults() {
          // Redirect or show all search results
          console.log("View All Results clicked");
        },
      };
    </script>

    <!--  Rightsidebar -->

    <script>
      const rightSliderToggle = document.getElementById('rightSliderToggle');
      const sidebarRight = document.getElementById('sidebarRight');
      rightSliderToggle.addEventListener('click', () => {
        sidebarRight.style.display = "flex";
        sidebarRight.style.right = "0vw";
      })
    </script>

    <!-- show page title dynamically  -->

    <script>
      const pageTitle = document.querySelector('.page-title h2');
      let title = window.location.pathname.replace('/', ' ').split('/')[0];
      pageTitle.innerHTML = `${title}`;
    </script>

    <script>
      // JavaScript to toggle navbar background color on scroll
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
          // document.querySelector('.nav-height').style.background = 'rgb(86 115 162)'; // Change background color on scroll
          document.querySelector('.nav-height').style.background = '#000'; // Change background color on scroll
        } else {
          document.querySelector('.nav-height').style.background = ''; // Restore original background color
        }
      }
    </script>

    <script>
      const sidebarRight1 = document.querySelectorAll('.sidebarRight');
      const antialiaseds = document.querySelectorAll('.antialiased');

      antialiaseds.forEach(content => {
        antialiaseds.addEventListener('mousemove', function(e) {
          const mouseXFromRight = window.innerWidth - e.clientX;
          sidebarRight1.forEach(sidebarRight => {
            if (mouseXFromRight < 30) {
              sidebarRight.classList.add('hide1');
            } else {
              sidebarRight.classList.remove('hide1');
            }
          });
        });
      });
    </script>

    <!--  Menu Active  -->
    <script>
      let sidebar = document.querySelector('.sidebar');
      let = document.querySelector('.sidebar .nav-list li a');
      let hamburger = document.querySelector('.hamburger');



      let menuItems = document.querySelectorAll('.sidebar .dull-group');
      // window.addEventListener('load',()=>{
      menuItems.forEach((menuItem) => {
        let menuText = `${ menuItem.innerText.toLowerCase().replace(' ','')}`;
        let titleText = `${title.toLowerCase().trim()}`;
        if (titleText.includes(menuText)) {
          menuItem.style.backgroundColor = '#817d7d70';
        }
      });
      // });

      // close sidebar in mobile view

      if (screen.availWidth < 768) {
        sidebar.classList.add('close');
        hamburger.classList.remove('is-active');
        scrollbox.classList.remove('overflow-y-scroll')

      }
    </script>

    <script>
      let menuItemCompilers = document.querySelectorAll('.menu-item-compiler');
      let subMenus = document.querySelectorAll('.menu-item-compiler .sub-menu');


      menuItemCompilers.forEach((menuItemCompiler) => {
        menuItemCompiler.addEventListener('click', () => {
          subMenus.forEach((subMenu) => {
            if (subMenu.classList.length > 3) {
              if (subMenu.style.display == 'block') {
                subMenu.style.display = 'none';
              } else {
                subMenu.style.display = 'block';

              }

              // subMenu.parentElement.classList.toggle('show');
            }
          });

          menuItemCompiler.children[1].style.display = 'none';
        })
      })
    </script>