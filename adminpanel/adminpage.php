<?php
include("developers.php");
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <link
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
    />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"
    />
    <meta
      name="description"
      content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard."
    />
    <meta
      name="keywords"
      content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard"
    />
    <meta name="author" content="PIXINVENT" />
    <title>Admin Panel</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
      rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/vendors.min.css"
    />
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap-extended.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/colors.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/components.min.css"
    />
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="css/vertical-menu-modern.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/palette-gradient.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/palette-callout.min.css"
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
      rel="stylesheet"
      type="text/css"
      href="../../../assets/css/style.css"
    />
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body
    class="vertical-layout vertical-menu-modern 2-columns fixed-navbar"
    data-open="click"
    data-menu="vertical-menu-modern"
    data-col="2-columns"
  >
    <!-- BEGIN: Header-->
    <nav
      class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow"
    >
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-lg-none mr-auto">
              <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"
                ><i class="ft-menu font-large-1"></i
              ></a>
            </li>
            <li class="nav-item mr-auto">
              <a class="navbar-brand" href="adminpage.php"
                ><!-- <img
                  class="brand-logo"
                  alt="modern admin logo"
                  src="images/logout.png"
                /> -->
                <h3 style="font-size: 26px;" class="brand-text">Admin Panel</h3></a
              >
            </li>
            <li class="nav-item d-none d-lg-block nav-toggle">
              <!-- <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"
                ><i
                  class="toggle-icon ft-toggle-right font-medium-3 white"
                  data-ticon="ft-toggle-right"
                ></i
              ></a> -->
            </li>
            <li class="nav-item d-lg-none">
              <a
                class="nav-link open-navbar-container"
                data-toggle="collapse"
                data-target="#navbar-mobile"
                ><i class="fa fa-ellipsis-v"></i
              ></a>
            </li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-language nav-item">
              </li>
              
              <li class="dropdown dropdown-notification nav-item">
                <!-- <a
                  class="nav-link nav-link-label"
                  href="#"
                  data-toggle="dropdown"
                  ><i class="fa fa-mail"></i
                ></a> -->
                <ul
                  class="dropdown-menu dropdown-menu-media dropdown-menu-right"
                >
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item">
                <a
                  class="dropdown-toggle nav-link dropdown-user-link"><span class="mr-1 user-name text-bold-700">Admin</span
                  ><span class="avatar avatar-online"
                    ><img
                      src="images/avatar-s-19.png"
                      alt="avatar" /><i></i></span
                ></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="user-profile.html"
                    ><i class="fa fa-user-circle-o" aria-hidden="true"></i> Edit Profile</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="login-with-bg-image.html"
                    ><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a
                  >
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->
    <!-- BEGIN: Main Menu -->

    <div
      class="main-menu menu-fixed menu-dark menu-accordion menu-shadow"
      data-scroll-to-active="true"
    >
      <div class="main-menu-content">
        <ul
          class="navigation navigation-main"
          id="main-menu-navigation"
          data-menu="menu-navigation"
        >
          <li class="navigation-header">
            <span data-i18n="Tables">Tables</span
            ><i
              
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Tables"
            ></i>
          </li>
          <li class="nav-item">
            <a href=""
              ><i class="fa fa-list-ul">&nbsp;&nbsp;</i
              ><span class="menu-title" data-i18n="Bootstrap Tables"
                >User Data</span
              ></a
            >
            <ul class="menu-content">
              <li class="active">
                <a class="menu-item" href="table-basic.html"
                  ><i></i><span data-i18n="Basic Tables">Basic Tables</span></a
                >
              </li>
              <!-- <li>
                <a class="menu-item" href="table-border.html"
                  ><i></i><span data-i18n="Table Border">Table Border</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="table-sizing.html"
                  ><i></i><span data-i18n="Table Sizing">Table Sizing</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="table-styling.html"
                  ><i></i
                  ><span data-i18n="Table Styling">Table Styling</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="table-components.html"
                  ><i></i
                  ><span data-i18n="Table Components">Table Components</span></a
                >
              </li> -->
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="#"
              ><i class="fa fa-th"></i
              ><span class="menu-title" data-i18n="DataTables"
                >DataTables</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="dt-basic-initialization.html"
                  ><i></i
                  ><span data-i18n="Basic Initialization"
                    >Basic Initialization</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-advanced-initialization.html"
                  ><i></i
                  ><span data-i18n="Advanced initialization"
                    >Advanced initialization</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-styling.html"
                  ><i></i><span data-i18n="Styling">Styling</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-data-sources.html"
                  ><i></i><span data-i18n="Data Sources">Data Sources</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-api.html"
                  ><i></i><span data-i18n="API">API</span></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-th-large"></i
              ><span class="menu-title" data-i18n="DataTables Ext."
                >DataTables Ext.</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="dt-extensions-autofill.html"
                  ><i></i><span data-i18n="AutoFill">AutoFill</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="#"
                  ><i></i><span data-i18n="Buttons">Buttons</span></a
                >
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="dt-extensions-buttons-basic.html"
                      ><i></i
                      ><span data-i18n="Basic Buttons">Basic Buttons</span></a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="dt-extensions-buttons-html-5-data-export.html"
                      ><i></i
                      ><span data-i18n="HTML 5 Data Export"
                        >HTML 5 Data Export</span
                      ></a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="dt-extensions-buttons-flash-data-export.html"
                      ><i></i
                      ><span data-i18n="Flash Data Export"
                        >Flash Data Export</span
                      ></a
                    >
                  </li>
                  <li>
                    <a
                      class="menu-item"
                      href="dt-extensions-buttons-column-visibility.html"
                      ><i></i
                      ><span data-i18n="Column Visibility"
                        >Column Visibility</span
                      ></a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="dt-extensions-buttons-print.html"
                      ><i></i><span data-i18n="Print">Print</span></a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="dt-extensions-buttons-api.html"
                      ><i></i><span data-i18n="API">API</span></a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-column-reorder.html"
                  ><i></i
                  ><span data-i18n="Column Reorder">Column Reorder</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-fixed-columns.html"
                  ><i></i
                  ><span data-i18n="Fixed Columns">Fixed Columns</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-key-table.html"
                  ><i></i><span data-i18n="Key Table">Key Table</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-row-reorder.html"
                  ><i></i><span data-i18n="Row Reorder">Row Reorder</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-select.html"
                  ><i></i><span data-i18n="Select">Select</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-fix-header.html"
                  ><i></i><span data-i18n="Fix Header">Fix Header</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-responsive.html"
                  ><i></i><span data-i18n="Responsive">Responsive</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="dt-extensions-column-visibility.html"
                  ><i></i
                  ><span data-i18n="Column Visibility"
                    >Column Visibility</span
                  ></a
                >
              </li>
            </ul>
          </li> -->
          <!-- <li class="navigation-header">
            <span data-i18n="Add Ons">Add Ons</span
            ><i
              class="fa fa-ellipsis-h"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Add Ons"
            ></i>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-edit"></i
              ><span class="menu-title" data-i18n="Editors">Editors</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="editor-quill.html"
                  ><i></i><span data-i18n="Quill">Quill</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="editor-ckeditor.html"
                  ><i></i><span data-i18n="CKEditor">CKEditor</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="editor-summernote.html"
                  ><i></i><span data-i18n="Summernote">Summernote</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="editor-tinymce.html"
                  ><i></i><span data-i18n="TinyMCE">TinyMCE</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="#"
                  ><i></i><span data-i18n="Code Editor">Code Editor</span></a
                >
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="code-editor-codemirror.html"
                      ><i></i><span data-i18n="CodeMirror">CodeMirror</span></a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="code-editor-ace.html"
                      ><i></i><span data-i18n="Ace">Ace</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-calendar"></i
              ><span class="menu-title" data-i18n="Pickers">Pickers</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="pickers-date-%26-time-picker.html"
                  ><i></i
                  ><span data-i18n="Date &amp; Time Picker"
                    >Date &amp; Time Picker</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="pickers-color-picker.html"
                  ><i></i><span data-i18n="Color Picker">Color Picker</span></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-code-fork"></i
              ><span class="menu-title" data-i18n="jQuery UI"
                >jQuery UI</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="jquery-ui-interactions.html"
                  ><i></i><span data-i18n="Interactions">Interactions</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="jquery-ui-navigations.html"
                  ><i></i><span data-i18n="Navigations">Navigations</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="jquery-ui-date-pickers.html"
                  ><i></i><span data-i18n="Date Pickers">Date Pickers</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="jquery-ui-autocomplete.html"
                  ><i></i><span data-i18n="Autocomplete">Autocomplete</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="jquery-ui-buttons-select.html"
                  ><i></i
                  ><span data-i18n="Buttons &amp; Select"
                    >Buttons &amp; Select</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="jquery-ui-slider-spinner.html"
                  ><i></i
                  ><span data-i18n="Slider &amp; Spinner"
                    >Slider &amp; Spinner</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="jquery-ui-dialog-tooltip.html"
                  ><i></i
                  ><span data-i18n="Dialog &amp; Tooltip"
                    >Dialog &amp; Tooltip</span
                  ></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="add-on-block-ui.html"
              ><i class="fa fa-terminal"></i
              ><span class="menu-title" data-i18n="Block UI">Block UI</span></a
            >
          </li>
          <li class="nav-item">
            <a href="add-on-image-cropper.html"
              ><i class="fa fa-crop"></i
              ><span class="menu-title" data-i18n="Image Cropper"
                >Image Cropper</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="add-on-drag-drop.html"
              ><i class="fa fa-mouse-pointer"></i
              ><span class="menu-title" data-i18n="Drag &amp; Drop"
                >Drag &amp; Drop</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-cloud-upload"></i
              ><span class="menu-title" data-i18n="File Uploader"
                >File Uploader</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="file-uploader-dropzone.html"
                  ><i></i><span data-i18n="Dropzone">Dropzone</span></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="internationalization.html"
              ><i class="fa fa-flag-o"></i
              ><span class="menu-title" data-i18n="Internationalization"
                >Internationalization</span
              ></a
            >
          </li> -->
          <!-- <li class="navigation-header">
            <span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span
            ><i
              class="fa fa-ellipsis-h"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Charts &amp; Maps"
            ></i>
          </li>
          <li class="nav-item">
            <a href="charts-apexcharts.html"
              ><i class="fa fa-pie-chart"></i
              ><span class="menu-title" data-i18n="Apex Charts"
                >Apex Charts</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-area-chart"></i
              ><span class="menu-title" data-i18n="Chartjs">Chartjs</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="chartjs-line-charts.html"
                  ><i></i><span data-i18n="Line charts">Line charts</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartjs-bar-charts.html"
                  ><i></i><span data-i18n="Bar charts">Bar charts</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartjs-pie-doughnut-charts.html"
                  ><i></i
                  ><span data-i18n="Pie &amp; Doughnut charts"
                    >Pie &amp; Doughnut charts</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartjs-scatter-charts.html"
                  ><i></i
                  ><span data-i18n="Scatter charts">Scatter charts</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartjs-polar-radar-charts.html"
                  ><i></i
                  ><span data-i18n="Polar &amp; Radar charts"
                    >Polar &amp; Radar charts</span
                  ></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartjs-advance-charts.html"
                  ><i></i
                  ><span data-i18n="Advance charts">Advance charts</span></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-line-chart"></i
              ><span class="menu-title" data-i18n="D3 Charts"
                >D3 Charts</span
              ></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="d3-line-chart.html"
                  ><i></i><span data-i18n="Line Chart">Line Chart</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="d3-bar-chart.html"
                  ><i></i><span data-i18n="Bar Chart">Bar Chart</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="d3-pie-chart.html"
                  ><i></i><span data-i18n="Pie Chart">Pie Chart</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="d3-circle-diagrams.html"
                  ><i></i
                  ><span data-i18n="Circle Diagrams">Circle Diagrams</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="d3-tree-chart.html"
                  ><i></i><span data-i18n="Tree Chart">Tree Chart</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="d3-other-charts.html"
                  ><i></i><span data-i18n="Other Charts">Other Charts</span></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-pie-chart"></i
              ><span class="menu-title" data-i18n="Chartist">Chartist</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="chartist-line-charts.html"
                  ><i></i><span data-i18n="Line charts">Line charts</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartist-bar-charts.html"
                  ><i></i><span data-i18n="Bar charts">Bar charts</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="chartist-pie-charts.html"
                  ><i></i><span data-i18n="Pie charts">Pie charts</span></a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="morris-charts.html"
              ><i class="fa fa-share-alt"></i
              ><span class="menu-title" data-i18n="Morris Charts"
                >Morris Charts</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="rickshaw-charts.html"
              ><i class="fa fa-bullseye"></i
              ><span class="menu-title" data-i18n="Rickshaw Charts"
                >Rickshaw Charts</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a href="#"
              ><i class="fa fa-map"></i
              ><span class="menu-title" data-i18n="Maps">Maps</span></a
            >
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="maps-leaflet.html"
                  ><i></i><span data-i18n="Leaflet Maps">Leaflet Maps</span></a
                >
              </li>
              <li>
                <a class="menu-item" href="#"
                  ><i></i><span data-i18n="Vector Maps">Vector Maps</span></a
                >
                <ul class="menu-content">
                  <li>
                    <a class="menu-item" href="vector-maps-jvector.html"
                      ><i></i
                      ><span data-i18n="jVector Map">jVector Map</span></a
                    >
                  </li>
                  <li>
                    <a class="menu-item" href="vector-maps-jvq.html"
                      ><i></i><span data-i18n="JQV Map">JQV Map</span></a
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li> -->
          <!-- <li class="navigation-header">
            <span data-i18n="Support">Support</span
            ><i
              class="fa fa-ellipsis-h"
              data-toggle="tooltip"
              data-placement="right"
              data-original-title="Support"
            ></i>
          </li>
          <li class="nav-item">
            <a href="https://pixinvent.ticksy.com/" target="_blank"
              ><i class="fa fa-support"></i
              ><span class="menu-title" data-i18n="Raise Support"
                >Raise Support</span
              ></a
            >
          </li>
          <li class="nav-item">
            <a
              href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"
              target="_blank"
              ><i class="fa fa-text-height"></i
              ><span class="menu-title" data-i18n="Documentation"
                >Documentation</span
              ></a
            >
          </li> -->
        </ul>
      </div>
    </div>

    <!-- END: Main Menu -->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">
              Tables
            </h3>
            <div class="row breadcrumbs-top d-inline-block">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a>User Data</a>
                  </li>
                  <!-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active">Basic Tables</li> -->
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
          </div>
        </div>
        <div class="content-body">
          <!-- Basic Tables start -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Basic Tables</h4>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <p class="card-text">
                      This is the data of the registered user. The <code>0</code> under the verified column conveys that the user has not verified the link through his Email where as the <code>1</code> says he/she has verified.
                    </p>
                    <p>
                      <span class="text-bold-600">Table 1:</span> Registered Users
                    </p>
                    <?php echo $deleteMsg??''; ?>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>S. No</th>
                            <th>Username</th>
                            <th>Email ID</th>
                            <th>Phone Number</th>
                            <th>Passing Year</th>
                            <th>Verified Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if(is_array($fetchData)){      
                          $sn=1;
                          foreach($fetchData as $data){
                          ?>
                          <tr>
                          <td style="text-align:left"><?php echo $sn; ?></td>
                          <td style="text-align:left"><?php echo $data['username']??''; ?></td>
                          <td style="text-align:left"><?php echo $data['email']??''; ?></td>
                          <td style="text-align:left"><?php echo $data['phone_number']??''; ?></td>
                          <td style="text-align:left"><?php echo $data['passing_year']??''; ?></td>
                          <td style="text-align:left"><?php echo $data['verified']??''; ?></td>
                          </tr>
                          <?php 
                          $sn++;}}else{ ?>
                          <tr>
                            <td><?php echo $fetchData; ?></td>
                          </tr>
                          <?php
                          }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->
    <!-- BEGIN: Footer-->
    <footer
      class="footer footer-static footer-light navbar-border navbar-shadow"
    >
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
        <a href="logout.php"><span class="float-md-left d-block d-md-inline-block"
          >Logout</span
        ></a>
        <span class="float-md-right d-none d-lg-block"
          >Hand-crafted & Made with <i class="fa fa-heart-o" aria-hidden="true"></i><span id="scroll-top"></span
        ></span>
      </p>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <script src="../../../app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
  </body>
  <!-- END: Body-->
</html>
