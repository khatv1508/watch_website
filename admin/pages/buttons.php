<?php
  // Include settings file
  require_once "../utils/auth.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Label - Premium Responsive Bootstrap 4 Admin & Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../../../assets/vendors/css/vendor.addons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../../assets/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="../../../assets/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="../../../assets/images/favicon.ico" />
  </head>
  <body class="header-fixed">
    <!-- partial:../../partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="../../index.html">
          <img class="logo" src="../../../assets/images/logo.svg" alt="">
          <img class="logo-mini" src="../../../assets/images/logo_mini.svg" alt="">
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Notifications</h6>
                  <p class="dropdown-title-text">You have 4 unread notification</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                      <i class="mdi mdi-alert"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Storage Full</small>
                      <small class="content-text">Server storage almost full</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                      <i class="mdi mdi-cloud-upload"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Upload Completed</small>
                      <small class="content-text">3 Files uploded successfully</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                      <i class="mdi mdi-security"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Authentication Required</small>
                      <small class="content-text">Please verify your password to continue using cloud services</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-message-outline mdi-1x"></i>
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Messages</h6>
                  <p class="dropdown-title-text">You have 4 unread messages</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="../../../assets/images/profile/male/image_1.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Clifford Gordon</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="../../../assets/images/profile/female/image_2.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Rachel Doyle</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="../../../assets/images/profile/male/image_3.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-warning"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Lewis Guzman</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-apps mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Apps</h6>
                  <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                </div>
                <div class="dropdown-body border-top pt-0">
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                    <span class="grid-tittle">Jira</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                    <span class="grid-tittle">Trello</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                    <span class="grid-tittle">Artstation</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                    <span class="grid-tittle">Bitbucket</span>
                  </a>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:../../partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="../../../assets/images/profile/male/image_1.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name">Allen Clerk</p>
            <h6 class="display-income">$3,400,00</h6>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="nav-category-divider">MAIN</li>
          <li>
            <a href="../../index.html">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Sample Pages</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li>
                <a href="../../pages/sample-pages/login_1.html" target="_blank">Login</a>
              </li>
              <li>
                <a href="../../pages/sample-pages/error_2.html" target="_blank">Error</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">UI Elements</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
              <li>
                <a href="../../pages/ui-components/buttons.html">Buttons</a>
              </li>
              <li>
                <a href="../../pages/ui-components/tables.html">Tables</a>
              </li>
              <li>
                <a href="../../pages/ui-components/typography.html">Typography</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="../../pages/forms/form-elements.html">
              <span class="link-title">Forms</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li>
            <a href="../../pages/charts/chartjs.html">
              <span class="link-title">Charts</span>
              <i class="mdi mdi-chart-donut link-icon"></i>
            </a>
          </li>
          <li>
            <a href="../../pages/icons/material-icons.html">
              <span class="link-title">Icons</span>
              <i class="mdi mdi-flower-tulip-outline link-icon"></i>
            </a>
          </li>
          <li class="nav-category-divider">DOCS</li>
          <li>
            <a href="../../../docs/docs.html">
              <span class="link-title">Documentation</span>
              <i class="mdi mdi-asterisk link-icon"></i>
            </a>
          </li>
        </ul>
        <div class="sidebar-upgrade-banner">
          <p class="text-gray">Upgrade to <b class="text-primary">PRO</b> for more exciting features</p>
          <a class="btn upgrade-btn" target="_blank" href="http://www.uxcandy.co/product/label-pro-admin-template/">Upgrade to PRO</a>
        </div>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="viewport-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">UI Elements</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Buttons</li>
              </ol>
            </nav>
          </div>
          <div class="content-viewport">
            <div class="row">
              <div class="col-lg-6">
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Rounded Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <div class="btn btn-success btn-rounded">Success</div>
                        <div class="btn btn-warning btn-rounded">Warning</div>
                        <div class="btn btn-primary btn-rounded">Primary</div>
                        <div class="btn btn-danger btn-rounded">Danger</div>
                        <div class="btn btn-info btn-rounded">Info</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Rounded Outline Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <div class="btn btn-outline-success btn-rounded">Success</div>
                        <div class="btn btn-outline-warning btn-rounded">Warning</div>
                        <div class="btn btn-outline-primary btn-rounded">Primary</div>
                        <div class="btn btn-outline-danger btn-rounded">Danger</div>
                        <div class="btn btn-outline-info btn-rounded">Info</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Animated Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button class="btn btn-outline-primary" type="button" disabled>
                          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                          <span class="sr-only">Loading...</span>
                        </button>
                        <button class="btn btn-outline-success" type="button" disabled>
                          <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                          <span class="sr-only">Loading...</span>
                        </button>
                        <button class="btn action-btn btn-refresh btn-outline-primary btn-rounded component-flat">
                          <i class="text-info mdi mdi-autorenew"></i>
                        </button>
                        <button class="btn action-btn btn-like btn-outline-danger btn-rounded">
                          <i class="mdi mdi-heart-outline"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Square Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button type="button" class="btn btn-primary">Primary</button>
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <button type="button" class="btn btn-success">Success</button>
                        <button type="button" class="btn btn-danger">Danger</button>
                        <button type="button" class="btn btn-warning">Warning</button>
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-dark">Dark</button>
                        <button type="button" class="btn btn-link">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Buttons With Icons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <div class="btn btn-success has-icon">
                          <i class="mdi mdi-account-plus-outline"></i>Add</div>
                        <div class="btn btn-warning has-icon">
                          <i class="mdi mdi-content-copy"></i>Copy</div>
                        <div class="btn btn-primary has-icon">
                          <i class="mdi mdi mdi-autorenew"></i>Reload</div>
                        <div class="btn btn-danger has-icon">
                          <i class="mdi mdi-heart-outline"></i>Like</div>
                        <div class="btn btn-info has-icon">
                          <i class="mdi mdi-comment-processing-outline"></i>Messsage</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Outlined Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button type="button" class="btn btn-outline-danger">Danger</button>
                        <button type="button" class="btn btn-outline-warning">Warning</button>
                        <button type="button" class="btn btn-outline-info">Info</button>
                        <button type="button" class="btn btn-outline-dark">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Radio Button Group</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <div class="btn-group mb-0" data-toggle="buttons">
                          <label class="btn btn-primary active">
                            <input type="radio" name="options" id="option1" checked>
                            <i class="mdi mdi-account"></i>
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2">
                            <i class="mdi mdi-account-multiple"></i>
                          </label>
                          <label class="btn btn-primary">
                            <input type="radio" name="options" id="option3">
                            <i class="mdi mdi-account-group"></i>
                          </label>
                        </div>
                        <div class="btn-group mb-0" data-toggle="buttons">
                          <label class="btn btn-outline-info active">
                            <input type="radio" name="options" id="option1_1" checked>
                            <i class="mdi mdi-walk"></i>
                          </label>
                          <label class="btn btn-outline-info">
                            <input type="radio" name="options" id="option1_2">
                            <i class="mdi mdi-car"></i>
                          </label>
                          <label class="btn btn-outline-info">
                            <input type="radio" name="options" id="option1_3">
                            <i class="mdi mdi-train"></i>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Button Block</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button type="button" class="btn btn-primary btn-block mt-0">Button Block</button>
                        <button type="button" class="btn btn-success has-icon btn-block mt-0">
                          <i class="mdi mdi-comment-processing-outline"></i>Button Block</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Buttons Sizes</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button type="button" class="btn btn-primary btn-lg">Large</button>
                        <button type="button" class="btn btn-primary">Medium</button>
                        <button type="button" class="btn btn-primary btn-sm">Small</button>
                        <button type="button" class="btn btn-primary btn-xs">Extra Small</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Rounded Button With Icons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <div class="btn btn-success has-icon btn-rounded">
                          <i class="mdi mdi-account-plus-outline"></i>Add</div>
                        <div class="btn btn-warning has-icon btn-rounded">
                          <i class="mdi mdi-content-copy"></i>Copy</div>
                        <div class="btn btn-primary has-icon btn-rounded">
                          <i class="mdi mdi mdi-autorenew"></i>Reload</div>
                        <div class="btn btn-danger has-icon btn-rounded">
                          <i class="mdi mdi-heart-outline"></i>Like</div>
                        <div class="btn btn-info has-icon btn-rounded">
                          <i class="mdi mdi-comment-processing-outline"></i>Messsage</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Social Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <p class="demo-description">Square</p>
                        <div class="btn social-icon-btn btn-facebook">
                          <i class="mdi mdi-facebook"></i>
                        </div>
                        <div class="btn social-icon-btn btn-linkedin">
                          <i class="mdi mdi-linkedin"></i>
                        </div>
                        <div class="btn social-icon-btn btn-twitter">
                          <i class="mdi mdi-twitter"></i>
                        </div>
                        <div class="btn social-icon-btn btn-instagram">
                          <i class="mdi mdi-instagram"></i>
                        </div>
                        <div class="btn social-icon-btn btn-dribbble">
                          <i class="mdi mdi-dribbble"></i>
                        </div>
                        <div class="btn social-icon-btn btn-google">
                          <i class="mdi mdi-google-plus"></i>
                        </div>
                        <div class="btn social-icon-btn btn-pinterest">
                          <i class="mdi mdi-pinterest"></i>
                        </div>
                        <div class="btn social-icon-btn btn-github">
                          <i class="mdi mdi-github-circle"></i>
                        </div>
                        <div class="btn social-icon-btn btn-behance">
                          <i class="mdi mdi-behance"></i>
                        </div>
                        <div class="btn social-icon-btn btn-reddit">
                          <i class="mdi mdi-reddit"></i>
                        </div>
                        <p class="demo-description">Rounded</p>
                        <div class="btn btn-rounded social-icon-btn btn-facebook">
                          <i class="mdi mdi-facebook"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-linkedin">
                          <i class="mdi mdi-linkedin"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-twitter">
                          <i class="mdi mdi-twitter"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-instagram">
                          <i class="mdi mdi-instagram"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-dribbble">
                          <i class="mdi mdi-dribbble"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-google">
                          <i class="mdi mdi-google-plus"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-pinterest">
                          <i class="mdi mdi-pinterest"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-github">
                          <i class="mdi mdi-github-circle"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-behance">
                          <i class="mdi mdi-behance"></i>
                        </div>
                        <div class="btn btn-rounded social-icon-btn btn-reddit">
                          <i class="mdi mdi-reddit"></i>
                        </div>
                        <p class="demo-description">Button With Text</p>
                        <div class="btn btn-rounded social-btn btn-facebook">
                          <i class="mdi mdi-facebook"></i>Facebook</div>
                        <div class="btn btn-rounded social-btn btn-linkedin">
                          <i class="mdi mdi-linkedin"></i>Linkedin</div>
                        <div class="btn btn-rounded social-btn btn-twitter">
                          <i class="mdi mdi-twitter"></i>Twitter</div>
                        <div class="btn btn-rounded social-btn btn-instagram">
                          <i class="mdi mdi-instagram"></i>Instagram</div>
                        <div class="btn btn-rounded social-btn btn-dribbble">
                          <i class="mdi mdi-dribbble"></i>Dribbble</div>
                        <div class="btn btn-rounded social-btn btn-google">
                          <i class="mdi mdi-google-plus"></i>GooglePlus</div>
                        <div class="btn btn-rounded social-btn btn-pinterest">
                          <i class="mdi mdi-pinterest"></i>Pinterest</div>
                        <div class="btn btn-rounded social-btn btn-github">
                          <i class="mdi mdi-github-circle"></i>Github</div>
                        <div class="btn btn-rounded social-btn btn-behance">
                          <i class="mdi mdi-behance"></i>Behance</div>
                        <div class="btn btn-rounded social-btn btn-reddit">
                          <i class="mdi mdi-reddit"></i>Reddit</div>
                        <p class="demo-description">Button Outlined With Text</p>
                        <div class="btn btn-rounded social-btn-outlined btn-facebook">
                          <i class="mdi mdi-facebook"></i>Facebook</div>
                        <div class="btn btn-rounded social-btn-outlined btn-linkedin">
                          <i class="mdi mdi-linkedin"></i>Linkedin</div>
                        <div class="btn btn-rounded social-btn-outlined btn-twitter">
                          <i class="mdi mdi-twitter"></i>Twitter</div>
                        <div class="btn btn-rounded social-btn-outlined btn-instagram">
                          <i class="mdi mdi-instagram"></i>Instagram</div>
                        <div class="btn btn-rounded social-btn-outlined btn-dribbble">
                          <i class="mdi mdi-dribbble"></i>Dribbble</div>
                        <div class="btn btn-rounded social-btn-outlined btn-google">
                          <i class="mdi mdi-google-plus"></i>GooglePlus</div>
                        <div class="btn btn-rounded social-btn-outlined btn-pinterest">
                          <i class="mdi mdi-pinterest"></i>Pinterest</div>
                        <div class="btn btn-rounded social-btn-outlined btn-github">
                          <i class="mdi mdi-github-circle"></i>Github</div>
                        <div class="btn btn-rounded social-btn-outlined btn-behance">
                          <i class="mdi mdi-behance"></i>Behance</div>
                        <div class="btn btn-rounded social-btn-outlined btn-reddit">
                          <i class="mdi mdi-reddit"></i>Reddit</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Inverse Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button type="button" class="btn btn-inverse-primary">Primary</button>
                        <button type="button" class="btn btn-inverse-secondary">Secondary</button>
                        <button type="button" class="btn btn-inverse-success">Success</button>
                        <button type="button" class="btn btn-inverse-danger">Danger</button>
                        <button type="button" class="btn btn-inverse-warning">Warning</button>
                        <button type="button" class="btn btn-inverse-info">Info</button>
                        <button type="button" class="btn btn-inverse-dark">Dark</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Checkbox Button Group</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <div class="btn-group mb-1 mb-md-0" data-toggle="buttons">
                          <label class="btn btn-outline-success">
                            <input type="checkbox">
                            <i class="mdi mdi-basket-fill"></i>
                          </label>
                          <label class="btn btn-outline-success  active">
                            <input type="checkbox" checked>
                            <i class="mdi mdi-basket"></i>
                          </label>
                          <label class="btn btn-outline-success">
                            <input type="checkbox">
                            <i class="mdi mdi-basket-unfill"></i>
                          </label>
                        </div>
                        <div class="btn-group mb-0" data-toggle="buttons">
                          <label class="btn btn-info">
                            <input type="checkbox">
                            <i class="mdi mdi-human-male"></i>Male</label>
                          <label class="btn btn-info  active">
                            <input type="checkbox" checked>
                            <i class="mdi mdi-human-female"></i>Female</label>
                          <label class="btn btn-info">
                            <input type="checkbox">
                            <i class="mdi mdi-baby"></i>Infant</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Disabled Buttons</h2>
                    <div class="item-wrapper">
                      <div class="demo-wrapper">
                        <button type="button" class="btn btn-primary disabled">Primary</button>
                        <button type="button" class="btn btn-secondary disabled">Secondary</button>
                        <button type="button" class="btn btn-success disabled">Success</button>
                        <button type="button" class="btn btn-danger disabled">Danger</button>
                        <button type="button" class="btn btn-warning disabled">Warning</button>
                        <button type="button" class="btn btn-info disabled">Info</button>
                        <button type="button" class="btn btn-dark disabled">Dark</button>
                        <button type="button" class="btn btn-link disabled">Link</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2019 <a href="http://www.uxcandy.co" target="_blank">UXCANDY</a>. All rights reserved</small>
              <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="../../../assets/vendors/js/core.js"></script>
    <script src="../../../assets/vendors/js/vendor.addons.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="../../../assets/js/template.js"></script>
    <!-- endbuild -->
  </body>
</html>