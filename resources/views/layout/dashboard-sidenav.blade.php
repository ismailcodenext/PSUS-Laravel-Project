<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>@yield('title') - Bricks Pabna</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ asset('back-end/assets/icons/favicon.svg') }}" type="image/x-icon" />

  <!-- Bootstrap Css -->
  <link href="{{ asset('back-end/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
  <!-- Vanilla Datepicker -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css" />




  <link href="{{ asset('back-end/assets/css/navbar-sidebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('back-end/assets/css/all-modal.css.css') }}" rel="stylesheet" />
  <link href="{{ asset('back-end/assets/css/style.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('back-end/assets/css/dark-mode.css') }}" />
  <link rel="stylesheet" href="{{ asset('back-end/assets/css/table-funtion.css') }}" />


  <link href="{{ asset('back-end/assets/css/toastify.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('back-end/assets/css/progress.css') }}" rel="stylesheet" />
  <link href="{{ asset('back-end/assets/css/animate.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('back-end/assets/js/toastify-js.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/axios.min.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/config.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
  <div id="loader" class="LoadingOverlay d-none">
    <div class="Line-Progress">
      <div class="indeterminate"></div>
    </div>
  </div>




  <!-- Navbar Start -->
  <nav id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
      <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <a href="{{url('admin-dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
              <img src="{{ asset('back-end/assets/img/PSUS logo.png') }}" alt=""
                width="38" height="38" />
            </span>
          </a>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
          <i class="fa-solid fa-bars-staggered"></i>
        </button>

        <!-- navbar searchbar -->
        <div class="search-bar-box d-flex align-items-center">
          <input type="text" placeholder="Search..." />
          <button class="nav-src-btn">
            <svg width="22" height="22" viewBox="0 0 27 27" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.2967 16.9811H18.0695L17.6449 16.5566C19.1578 14.8045 20.0686 12.5274 20.0686 10.0343C20.0686 4.49228 15.5763 0 10.0343 0C4.49228 0 0 4.49228 0 10.0343C0 15.5763 4.49228 20.0686 10.0343 20.0686C12.5274 20.0686 14.8045 19.1578 16.5566 17.6527L16.9811 18.0772V19.2967L24.6998 27L27 24.6998L19.2967 16.9811ZM10.0343 16.9811C6.19811 16.9811 3.08748 13.8705 3.08748 10.0343C3.08748 6.19811 6.19811 3.08748 10.0343 3.08748C13.8705 3.08748 16.9811 6.19811 16.9811 10.0343C16.9811 13.8705 13.8705 16.9811 10.0343 16.9811Z"
                fill="#192045" />
            </svg>
          </button>
        </div>
        <!-- end navbar searchbar -->
      </div>

      <div class="d-flex align-items-center">
        <button class="light-mode-button" aria-label="Toggle Light Mode" onclick="toggle_light_mode()">
          <span></span>
          <span></span>
        </button>

        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item search-icon" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <svg width="25" height="25" viewBox="0 0 27 27" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M19.2967 16.9811H18.0695L17.6449 16.5566C19.1578 14.8045 20.0686 12.5274 20.0686 10.0343C20.0686 4.49228 15.5763 0 10.0343 0C4.49228 0 0 4.49228 0 10.0343C0 15.5763 4.49228 20.0686 10.0343 20.0686C12.5274 20.0686 14.8045 19.1578 16.5566 17.6527L16.9811 18.0772V19.2967L24.6998 27L27 24.6998L19.2967 16.9811ZM10.0343 16.9811C6.19811 16.9811 3.08748 13.8705 3.08748 10.0343C3.08748 6.19811 6.19811 3.08748 10.0343 3.08748C13.8705 3.08748 16.9811 6.19811 16.9811 10.0343C16.9811 13.8705 13.8705 16.9811 10.0343 16.9811Z"
                fill="#192045" />
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
            <form class="p-2">
              <div class="search-box">
                <div class="position-relative">
                  <input type="text" class="form-control rounded border-0"
                    placeholder="Search..." />
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex align-items-center toggle-full-screen">
          <button class="js-toggle-fullscreen-btn toggle-fullscreen-btn" aria-label="Enter fullscreen mode"
            hidden>
            <svg width="27" height="27" class="toggle-fullscreen-svg" viewBox="0 0 30 30"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <g class="icon-fullscreen-enter">
                <path
                  d="M2 7.5H0V3C0 2.20435 0.31607 1.44129 0.87868 0.87868C1.44129 0.31607 2.20435 0 3 0H7.5V2H2V7.5Z"
                  fill="#192045" />
                <path
                  d="M30 7.5H28V2H22.5V0H27C27.7956 0 28.5587 0.31607 29.1213 0.87868C29.6839 1.44129 30 2.20435 30 3V7.5Z"
                  fill="#192045" />
                <path
                  d="M7.5 30H3C2.20435 30 1.44129 29.6839 0.87868 29.1213C0.31607 28.5587 0 27.7956 0 27V22.5H2V28H7.5V30Z"
                  fill="#192045" />
                <path
                  d="M27 30H22.5V28H28V22.5H30V27C30 27.7956 29.6839 28.5587 29.1213 29.1213C28.5587 29.6839 27.7956 30 27 30Z"
                  fill="#192045" />
                <path
                  d="M9.00052 10.5C8.80311 10.5011 8.60742 10.4633 8.42466 10.3887C8.24191 10.314 8.07568 10.204 7.93552 10.065L6.43552 8.565C6.15307 8.28255 5.99438 7.89946 5.99438 7.5C5.99438 7.10055 6.15307 6.71746 6.43552 6.435C6.71798 6.15255 7.10107 5.99387 7.50052 5.99387C7.89998 5.99387 8.28307 6.15255 8.56552 6.435L10.0655 7.935C10.2061 8.07445 10.3177 8.24035 10.3939 8.42314C10.47 8.60593 10.5092 8.80199 10.5092 9C10.5092 9.19802 10.47 9.39408 10.3939 9.57687C10.3177 9.75966 10.2061 9.92556 10.0655 10.065C9.92536 10.204 9.75914 10.314 9.57638 10.3887C9.39363 10.4633 9.19793 10.5011 9.00052 10.5Z"
                  fill="#192045" />
                <path
                  d="M20.9995 10.5C20.8021 10.5011 20.6064 10.4633 20.4237 10.3887C20.2409 10.314 20.0747 10.204 19.9345 10.065C19.7939 9.92556 19.6824 9.75966 19.6062 9.57687C19.5301 9.39408 19.4908 9.19802 19.4908 9C19.4908 8.80199 19.5301 8.60593 19.6062 8.42314C19.6824 8.24035 19.7939 8.07445 19.9345 7.935L21.4345 6.435C21.717 6.15255 22.1001 5.99387 22.4995 5.99387C22.899 5.99387 23.2821 6.15255 23.5645 6.435C23.847 6.71746 24.0057 7.10055 24.0057 7.5C24.0057 7.89946 23.847 8.28255 23.5645 8.565L22.0645 10.065C21.9244 10.204 21.7582 10.314 21.5754 10.3887C21.3926 10.4633 21.197 10.5011 20.9995 10.5Z"
                  fill="#192045" />
                <path
                  d="M7.49991 24C7.3025 24.0011 7.10681 23.9633 6.92405 23.8887C6.74129 23.814 6.57507 23.704 6.43491 23.565C6.29432 23.4256 6.18272 23.2597 6.10657 23.0769C6.03042 22.8941 5.99121 22.698 5.99121 22.5C5.99121 22.302 6.03042 22.1059 6.10657 21.9231C6.18272 21.7403 6.29432 21.5744 6.43491 21.435L7.93491 19.935C8.21736 19.6525 8.60046 19.4939 8.99991 19.4939C9.39936 19.4939 9.78245 19.6525 10.0649 19.935C10.3474 20.2175 10.506 20.6006 10.506 21C10.506 21.3995 10.3474 21.7825 10.0649 22.065L8.56491 23.565C8.42475 23.704 8.25852 23.814 8.07577 23.8887C7.89301 23.9633 7.69732 24.0011 7.49991 24Z"
                  fill="#192045" />
                <path
                  d="M22.5 24C22.3026 24.0011 22.1069 23.9633 21.9242 23.8887C21.7414 23.814 21.5752 23.704 21.435 23.565L19.935 22.065C19.6526 21.7825 19.4939 21.3995 19.4939 21C19.4939 20.8022 19.5329 20.6064 19.6085 20.4236C19.6842 20.2409 19.7952 20.0749 19.935 19.935C20.0749 19.7951 20.2409 19.6842 20.4237 19.6085C20.6064 19.5328 20.8022 19.4939 21 19.4939C21.3995 19.4939 21.7826 19.6525 22.065 19.935L23.565 21.435C23.7056 21.5744 23.8172 21.7403 23.8934 21.9231C23.9695 22.1059 24.0087 22.302 24.0087 22.5C24.0087 22.698 23.9695 22.8941 23.8934 23.0769C23.8172 23.2597 23.7056 23.4256 23.565 23.565C23.4249 23.704 23.2587 23.814 23.0759 23.8887C22.8931 23.9633 22.6974 24.0011 22.5 24Z"
                  fill="#192045" />
              </g>
              <g class="icon-fullscreen-leave">
                <path
                  d="M9.00052 10.5C8.80311 10.5011 8.60742 10.4633 8.42466 10.3887C8.24191 10.314 8.07568 10.204 7.93552 10.065L6.43552 8.565C6.15307 8.28255 5.99438 7.89946 5.99438 7.5C5.99438 7.10055 6.15307 6.71746 6.43552 6.435C6.71798 6.15255 7.10107 5.99387 7.50052 5.99387C7.89998 5.99387 8.28307 6.15255 8.56552 6.435L10.0655 7.935C10.2061 8.07445 10.3177 8.24035 10.3939 8.42314C10.47 8.60593 10.5092 8.80199 10.5092 9C10.5092 9.19802 10.47 9.39408 10.3939 9.57687C10.3177 9.75966 10.2061 9.92556 10.0655 10.065C9.92536 10.204 9.75914 10.314 9.57638 10.3887C9.39363 10.4633 9.19793 10.5011 9.00052 10.5Z"
                  fill="#192045" />
                <path
                  d="M20.9995 10.5C20.8021 10.5011 20.6064 10.4633 20.4237 10.3887C20.2409 10.314 20.0747 10.204 19.9345 10.065C19.7939 9.92556 19.6824 9.75966 19.6062 9.57687C19.5301 9.39408 19.4908 9.19802 19.4908 9C19.4908 8.80199 19.5301 8.60593 19.6062 8.42314C19.6824 8.24035 19.7939 8.07445 19.9345 7.935L21.4345 6.435C21.717 6.15255 22.1001 5.99387 22.4995 5.99387C22.899 5.99387 23.2821 6.15255 23.5645 6.435C23.847 6.71746 24.0057 7.10055 24.0057 7.5C24.0057 7.89946 23.847 8.28255 23.5645 8.565L22.0645 10.065C21.9244 10.204 21.7582 10.314 21.5754 10.3887C21.3926 10.4633 21.197 10.5011 20.9995 10.5Z"
                  fill="#192045" />
                <path
                  d="M7.49991 24C7.3025 24.0011 7.10681 23.9633 6.92405 23.8887C6.74129 23.814 6.57507 23.704 6.43491 23.565C6.29432 23.4256 6.18272 23.2597 6.10657 23.0769C6.03042 22.8941 5.99121 22.698 5.99121 22.5C5.99121 22.302 6.03042 22.1059 6.10657 21.9231C6.18272 21.7403 6.29432 21.5744 6.43491 21.435L7.93491 19.935C8.21736 19.6525 8.60046 19.4939 8.99991 19.4939C9.39936 19.4939 9.78245 19.6525 10.0649 19.935C10.3474 20.2175 10.506 20.6006 10.506 21C10.506 21.3995 10.3474 21.7825 10.0649 22.065L8.56491 23.565C8.42475 23.704 8.25852 23.814 8.07577 23.8887C7.89301 23.9633 7.69732 24.0011 7.49991 24Z"
                  fill="#192045" />
                <path
                  d="M22.5 24C22.3026 24.0011 22.1069 23.9633 21.9242 23.8887C21.7414 23.814 21.5752 23.704 21.435 23.565L19.935 22.065C19.6526 21.7825 19.4939 21.3995 19.4939 21C19.4939 20.8022 19.5329 20.6064 19.6085 20.4236C19.6842 20.2409 19.7952 20.0749 19.935 19.935C20.0749 19.7951 20.2409 19.6842 20.4237 19.6085C20.6064 19.5328 20.8022 19.4939 21 19.4939C21.3995 19.4939 21.7826 19.6525 22.065 19.935L23.565 21.435C23.7056 21.5744 23.8172 21.7403 23.8934 21.9231C23.9695 22.1059 24.0087 22.302 24.0087 22.5C24.0087 22.698 23.9695 22.8941 23.8934 23.0769C23.8172 23.2597 23.7056 23.4256 23.565 23.565C23.4249 23.704 23.2587 23.814 23.0759 23.8887C22.8931 23.9633 22.6974 24.0011 22.5 24Z"
                  fill="#192045" />
              </g>
            </svg>
          </button>
        </div>

        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item noti-icon right-bar-toggle notification-icon"
            id="right-bar-toggle-v">
            <svg class="topbar-setting" width="30" height="30" viewBox="0 0 32 32"
              fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15.9998 20.6154C18.7551 20.6154 20.9888 18.549 20.9888 16C20.9888 13.451 18.7551 11.3846 15.9998 11.3846C13.2444 11.3846 11.0108 13.451 11.0108 16C11.0108 18.549 13.2444 20.6154 15.9998 20.6154Z"
                stroke="#192045" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
              <path
                d="M30.6649 9.49923L29.4176 7.50077C28.7291 6.39654 27.2037 6.01923 26.0101 6.65615L25.3541 7.00692C22.8596 8.33846 19.7415 6.67346 19.7415 4.00923V3.30769C19.7415 2.03269 18.6252 1 17.247 1H14.7525C13.3743 1 12.258 2.03269 12.258 3.30769V4.00923C12.258 6.67346 9.13986 8.33962 6.64537 7.00692L5.98931 6.65615C4.7957 6.01923 3.27031 6.39654 2.58183 7.50077L1.33459 9.49923C0.646106 10.6035 1.05396 12.0146 2.24757 12.6515L2.90362 13.0023C5.39812 14.335 5.39812 17.665 2.90362 18.9977L2.24757 19.3485C1.05396 19.9854 0.646106 21.3965 1.33459 22.5008L2.58183 24.4992C3.27031 25.6035 4.7957 25.9808 5.98931 25.3438L6.64537 24.9931C9.13986 23.6604 12.258 25.3265 12.258 27.9908V28.6923C12.258 29.9673 13.3743 31 14.7525 31H17.247C18.6252 31 19.7415 29.9673 19.7415 28.6923V27.9908C19.7415 25.3265 22.8596 23.6604 25.3541 24.9931L26.0101 25.3438C27.2037 25.9808 28.7291 25.6035 29.4176 24.4992L30.6649 22.5008C31.3533 21.3965 30.9455 19.9854 29.7519 19.3485L29.0958 18.9977C26.6013 17.665 26.6013 14.335 29.0958 13.0023L29.7519 12.6515C30.9455 12.0146 31.3546 10.6035 30.6649 9.49923Z"
                stroke="#192045" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                stroke-linejoin="round" />
            </svg>
          </button>
        </div>

        <div class="dropdown d-inline-block language-switch">
          <button type="button" class="btn header-item language-switch-icon" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M15 0C6.72937 0 0 6.72937 0 15C0 23.2706 6.72937 30 15 30C23.2706 30 30 23.2706 30 15C30 6.72937 23.2706 0 15 0ZM16.25 1.30938V2.86625L14.1163 5H13.3837L10.4206 2.03687C11.8538 1.52875 13.3944 1.25 15 1.25C15.4219 1.25 15.8381 1.27188 16.25 1.30938ZM1.25 15C1.25 11.9625 2.24187 9.15312 3.91625 6.875H9.11625L10.625 8.38375V10.9913L8.49125 13.125L10.3663 15L9.11625 16.25H4.7025L6.4525 20.625H11.875V24.1162L8.75 27.2412C4.3025 24.9612 1.25 20.3319 1.25 15ZM15 28.75C13.2238 28.75 11.5269 28.4075 9.96688 27.7919L13.125 24.6338V19.375H7.29813L6.54813 17.5H9.63438L12.1344 15L10.2594 13.125L11.8756 11.5087V7.86625L9.63375 5.625H4.95438C6.14437 4.35063 7.5725 3.3025 9.16813 2.55188L12.8663 6.25H14.6337L17.5 3.38375V1.48188C19.1644 1.78875 20.7256 2.39313 22.1231 3.2425L17.5 7.86625V13.125H20.625V20.2588L24.8969 24.5306C22.3944 27.1287 18.8838 28.75 15 28.75ZM25.7244 23.5906L21.875 19.7412V11.875H18.75V8.38375L23.1787 3.955C26.5569 6.4625 28.75 10.4794 28.75 15C28.75 18.2488 27.615 21.235 25.7244 23.5906Z"
                fill="#192045" />
            </svg>
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
              <img src="./assets/img/flags/us.jpg" alt="user-image" class="me-1" height="12" />
              <span class="align-middle">English</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
              <img src="assets/img/flags/spain.jpg" alt="user-image" class="me-1" height="12" />
              <span class="align-middle">Spanish</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
              <img src="assets/img/flags/germany.jpg" alt="user-image" class="me-1"
                height="12" />
              <span class="align-middle">German</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
              <img src="assets//img/flags/italy.jpg" alt="user-image" class="me-1" height="12" />
              <span class="align-middle">Italian</span>
            </a>

            <!-- item-->
            <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
              <img src="assets/img/flags/russia.jpg" alt="user-image" class="me-1" height="12" />
              <span class="align-middle">Russian</span>
            </a>
          </div>
        </div>

        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item noti-icon"
            id="page-header-notifications-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M9.45455 3.4881C6.04947 4.61889 3.63669 7.33014 3.63653 10.5164V16.7253L0.375499 19.3629C0.144442 19.5409 0 19.7945 0 20.0759V20.2035C0 21.2802 1.05824 22.153 2.36364 22.153H8.30287C8.56913 24.0982 10.5705 25.6098 13 25.6098C15.4295 25.6098 17.4309 24.0982 17.6971 22.153H23.6364C24.9418 22.153 26 21.2802 26 20.2035V20.0761C26.0001 19.7947 25.8557 19.541 25.6245 19.3629L22.3638 16.7256V10.5167C22.3637 7.33036 19.9507 4.61872 16.5455 3.48799V2.43688C16.5455 1.16681 15.3593 0.540947 14.8932 0.348687C14.2864 0.0983808 13.6138 0 13 0C12.3862 0 11.7136 0.0983808 11.1068 0.348687C10.6407 0.540947 9.45455 1.16681 9.45455 2.43688V3.4881ZM14.0955 2.92425C14.0894 2.94107 14.083 2.95765 14.0764 2.97398C13.723 2.94113 13.364 2.92425 13.0001 2.92425C12.6362 2.92425 12.2771 2.94114 11.9237 2.97401C11.917 2.95767 11.9106 2.94108 11.9045 2.92425H11.8182V2.43688C11.8182 2.16773 12.3468 1.9495 13 1.9495C13.6532 1.9495 14.1818 2.16773 14.1818 2.43688V2.92425H14.0955ZM15.3025 22.153H10.6975C10.9403 23.0167 11.879 23.6603 13 23.6603C14.121 23.6603 15.0597 23.0167 15.3025 22.153ZM6.00016 10.5164C6.00035 7.41792 9.11241 4.87375 13.0001 4.87375C16.8879 4.87375 20 7.41792 20.0001 10.5164H6.00016ZM6.00016 10.5164H20.0001V16.7256C20.0001 17.2493 20.2555 17.7509 20.7089 18.1175L23.288 20.2035H2.71208L5.6376 17.8373C5.86065 17.6605 6.00016 17.4119 6.00016 17.1347V10.5164Z"
                fill="#192045" />
            </svg>

            <span class="noti-dot"></span>
          </button>
          <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 page-header-notifications-dropdown-v"
            aria-labelledby="page-header-notifications-dropdown-v">
            <div class="p-3">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="m-0 font-size-15">Notifications</h5>
                </div>
                <div class="col-auto">
                  <a href="#!" class="small fw-semibold text-decoration-underline">
                    Mark all as read</a>
                </div>
              </div>
            </div>
            <div data-simplebar style="max-height: 250px">
              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <img src="assets/img/navbar-profile-logo.png" class="rounded-circle avatar-sm"
                      alt="user-pic" />
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      1 hour ago
                    </p>
                    <h6 class="mb-1">James Lemire</h6>
                    <div>
                      <p class="mb-0">
                        It will seem like simplified English.
                      </p>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 avatar-sm me-3">
                    <span class="avatar-title bg-primary rounded-circle font-size-18">
                      <i class="fa-regular fa-user"></i>
                    </span>
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      3 min ago
                    </p>
                    <h6 class="mb-1">Your order is placed</h6>
                    <div>
                      <p class="mb-0">
                        If several languages coalesce the grammar
                      </p>
                    </div>
                  </div>
                </div>
              </a>
              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 avatar-sm me-3">
                    <span class="avatar-title bg-success rounded-circle font-size-18">
                      <i class="fa-regular fa-user"></i>
                    </span>
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      8 min ago
                    </p>
                    <h6 class="mb-1">Your item is shipped</h6>
                    <div>
                      <p class="mb-0">
                        If several languages coalesce the grammar
                      </p>
                    </div>
                  </div>
                </div>
              </a>

              <a href="#!" class="text-reset notification-item">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <img src="assets/img/navbar-profile-logo.png" class="rounded-circle avatar-sm"
                      alt="user-pic" />
                  </div>
                  <div class="flex-grow-1">
                    <p class="text-muted font-size-13 mb-0 float-end">
                      1 hour ago
                    </p>
                    <h6 class="mb-1">Salena Layfield</h6>
                    <div>
                      <p class="mb-1">
                        As a skeptical Cambridge friend of mine occidental.
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="p-2 border-top d-grid">
              <a class="btn btn-link font-size-14 btn-block text-center"
                style="display: inline-block; cursor: pointer; z-index: 1">
                <i class="uil-arrow-circle-right me-1"></i>
                <span>View More..</span>
              </a>
            </div>
          </div>
        </div>

        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item user text-start d-flex align-items-center"
            id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <img class="rounded-circle header-profile-user"
              src="{{ asset('back-end/assets/img/navbar-profile-logo.png') }}" alt="Header Avatar" />
          </button>
          <div class="dropdown-menu dropdown-menu-end pt-0 profile-dropdown">
            <div class="p-3 border-bottom">
              <h6 class="mb-0">Martin Gurley</h6>
              <a href="# " class="mb-0 font-size-11 text-muted">
                martin.gurley@email.com
              </a>
            </div>
            <a class="dropdown-item" href="contacts-profile.html"><i
                class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i>
              <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i
                class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i>
              <span class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i
                class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i>
              <span class="align-middle">Help</span></a>
            <a class="dropdown-item d-flex align-items-center" href="#"><i
                class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i>
              <span class="align-middle me-3">Settings</span><span
                class="badge badge-soft-success ms-auto">New</span></a>
            <a class="dropdown-item" href="auth-lock-screen.html"><i
                class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i>
              <span class="align-middle">Lock screen</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="auth-logout.html"><i
                class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i>
              <span class="align-middle">Logout</span></a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Right Sidebar setting Start -->
  <div class="right-bar">
    <div data-simplebar class="h-100">
      <div class="rightbar-title d-flex align-items-center bg-dark p-3">
        <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

        <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
          <i class="mdi mdi-close noti-icon"></i>
        </a>
      </div>
      <!-- Settings -->
      <hr class="m-0" />

      <div class="p-4">
        <h6 class="mt-4 mb-3">Layout Mode</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light"
            value="light" />
          <label class="form-check-label" for="layout-mode-light">Light</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark"
            value="dark" />
          <label class="form-check-label" for="layout-mode-dark">Dark</label>
        </div>

        <h6 class="mt-4 mb-3">Topbar Type</h6>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light"
            value="light" onchange="document.body.setAttribute('data-topbar', 'light')" />
          <label class="form-check-label" for="topbar-color-light">Light</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark"
            value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')" />
          <label class="form-check-label" for="topbar-color-dark">Dark</label>
        </div>

        <div id="sidebar-setting">
          <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

          <div class="form-check sidebar-setting mt-2">
            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default"
              value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')" />
            <label class="form-check-label" for="sidebar-size-default">Default</label>
          </div>
          <div class="form-check sidebar-setting mt-2">
            <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small"
              value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')" />
            <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
          </div>

          <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

          <div class="form-check sidebar-setting mt-2">
            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light"
              value="light" onchange="document.body.setAttribute('data-sidebar', 'light')" />
            <label class="form-check-label" for="sidebar-color-light">Light</label>
          </div>
          <div class="form-check sidebar-setting mt-2">
            <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark"
              value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')" />
            <label class="form-check-label" for="sidebar-color-dark">Dark</label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Right Sidebar bar overlay-->
  <div class="rightbar-overlay"></div>
  <!-- Navbar End -->

  <!-- Left Sidebar Start -->
  <div class="vertical-menu">
    <button type="button"
      class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn vertical-menu-btn2">
      <i class="fa-solid fa-angles-right"></i>
    </button>
    <!-- LOGO Box -->
    <div class="navbar-brand-box">
      <a href="{{url('admin-dashboard')}}" class="logo logo-dark">
        <span class="logo-sm">
          <img src="{{ asset('back-end/assets/img/PSUS logo.png') }}" alt="" width="38"
            height="38" />
        </span>
        <span class="logo-sm2">
          <img src="{{ asset('back-end/assets/img/PSUS icon.png') }}" alt="" />
        </span>
        <span class="logo-lg">
          <img src="{{ asset('back-end/assets/img/PSUS icon.png') }}" alt="" />
          <span class="brand-name">
            <img src="{{ asset('back-end/assets/img/PSUS logo.png') }}" alt="">
          </span>
        </span>
      </a>
    </div>
    <!-- Logo Box End -->

    <!--- Side Menu -->
    <div data-simplebar class="sidebar-menu-scroll">
      <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <div class="nav">
          <div class="menu">
            <ul>
              <li class="active-link hidemenu">
                <a href="{{ url('admin-dashboard') }}">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M8.5 3H5.5C4.83696 3 4.20107 3.26339 3.73223 3.73223C3.26339 4.20107 3 4.83696 3 5.5C3 6.16304 3.26339 6.79893 3.73223 7.26777C4.20107 7.73661 4.83696 8 5.5 8H8.5C9.16304 8 9.79893 7.73661 10.2678 7.26777C10.7366 6.79893 11 6.16304 11 5.5C11 4.83696 10.7366 4.20107 10.2678 3.73223C9.79893 3.26339 9.16304 3 8.5 3ZM8.5 7H5.5C5.10218 7 4.72064 6.84196 4.43934 6.56066C4.15804 6.27936 4 5.89782 4 5.5C4 5.10218 4.15804 4.72064 4.43934 4.43934C4.72064 4.15804 5.10218 4 5.5 4H8.5C8.89782 4 9.27936 4.15804 9.56066 4.43934C9.84196 4.72064 10 5.10218 10 5.5C10 5.89782 9.84196 6.27936 9.56066 6.56066C9.27936 6.84196 8.89782 7 8.5 7ZM8.5 10H5.5C4.83696 10 4.20107 10.2634 3.73223 10.7322C3.26339 11.2011 3 11.837 3 12.5V18.5C3 19.163 3.26339 19.7989 3.73223 20.2678C4.20107 20.7366 4.83696 21 5.5 21H8.5C9.16304 21 9.79893 20.7366 10.2678 20.2678C10.7366 19.7989 11 19.163 11 18.5V12.5C11 11.837 10.7366 11.2011 10.2678 10.7322C9.79893 10.2634 9.16304 10 8.5 10ZM10 18.5C10 18.8978 9.84196 19.2794 9.56066 19.5607C9.27936 19.842 8.89782 20 8.5 20H5.5C5.10218 20 4.72064 19.842 4.43934 19.5607C4.15804 19.2794 4 18.8978 4 18.5V12.5C4 12.1022 4.15804 11.7206 4.43934 11.4393C4.72064 11.158 5.10218 11 5.5 11H8.5C8.89782 11 9.27936 11.158 9.56066 11.4393C9.84196 11.7206 10 12.1022 10 12.5V18.5ZM18.5 16H15.5C14.837 16 14.2011 16.2634 13.7322 16.7322C13.2634 17.2011 13 17.837 13 18.5C13 19.163 13.2634 19.7989 13.7322 20.2678C14.2011 20.7366 14.837 21 15.5 21H18.5C19.163 21 19.7989 20.7366 20.2678 20.2678C20.7366 19.7989 21 19.163 21 18.5C21 17.837 20.7366 17.2011 20.2678 16.7322C19.7989 16.2634 19.163 16 18.5 16ZM18.5 20H15.5C15.1022 20 14.7206 19.842 14.4393 19.5607C14.158 19.2794 14 18.8978 14 18.5C14 18.1022 14.158 17.7206 14.4393 17.4393C14.7206 17.158 15.1022 17 15.5 17H18.5C18.8978 17 19.2794 17.158 19.5607 17.4393C19.842 17.7206 20 18.1022 20 18.5C20 18.8978 19.842 19.2794 19.5607 19.5607C19.2794 19.842 18.8978 20 18.5 20ZM18.5 3H15.5C14.837 3 14.2011 3.26339 13.7322 3.73223C13.2634 4.20107 13 4.83696 13 5.5V11.5C13 12.163 13.2634 12.7989 13.7322 13.2678C14.2011 13.7366 14.837 14 15.5 14H18.5C19.163 14 19.7989 13.7366 20.2678 13.2678C20.7366 12.7989 21 12.163 21 11.5V5.5C21 4.83696 20.7366 4.20107 20.2678 3.73223C19.7989 3.26339 19.163 3 18.5 3ZM20 11.5C20 11.8978 19.842 12.2794 19.5607 12.5607C19.2794 12.842 18.8978 13 18.5 13H15.5C15.1022 13 14.7206 12.842 14.4393 12.5607C14.158 12.2794 14 11.8978 14 11.5V5.5C14 5.10218 14.158 4.72064 14.4393 4.43934C14.7206 4.15804 15.1022 4 15.5 4H18.5C18.8978 4 19.2794 4.15804 19.5607 4.43934C19.842 4.72064 20 5.10218 20 5.5V11.5Z"
                      fill="#008AEE" />
                  </svg>

                  <span class="text">Dashboard</span>
                </a>
              </li>
     
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Events Page Manegment</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-news-event-page') }}">
                    <span class="text">New Event List</span>
                  </a>
                </li>
            </ul>
            </li>
     
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Success Stories Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-success-stories-page') }}">
                    <span class="text">Success Stories List</span>
                  </a>
                </li>
            </ul>
            </li>
     
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Volunteer Registration Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-volunteer-registration-page') }}">
                    <span class="text">Volunteer Registration List</span>
                  </a>
                </li>
            </ul>
            </li>
     
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Hero Slider Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-hero-slider-page') }}">
                    <span class="text">Slider List</span>
                  </a>
                </li>
            </ul>
            </li>
     
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Menu Managment</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-menu-page') }}">
                    <span class="text">menu List</span>
                  </a>
                </li>
            </ul>
            </li>


            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">About Us Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-home-about-page') }}">
                    <span class="text">About List</span>
                  </a>
                </li>
            </ul>
            </li>
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Mission Vision Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-mission-vision-page') }}">
                    <span class="text">Mission Vision List</span>
                  </a>
                </li>
            </ul>
            </li>
            <!-- <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">We Do Home Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-we-do-page') }}">
                    <span class="text">We Do List</span>
                  </a>
                </li>
            </ul>
            </li> -->
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">What We Do Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-we-do-menu-page') }}">
                    <span class="text">We Do Menu List</span>
                  </a>
                </li>
            </ul>
            </li>


            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">News & Events Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-news-event-page') }}">
                    <span class="text">News & Events Info List</span>
                  </a>
                </li>
            </ul>
            </li>
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Message Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-message-page') }}">
                    <span class="text">Message List</span>
                  </a>
                </li>
            </ul>
            </li>
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Company Info Page</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-company-info-page') }}">
                    <span class="text">Company Info List</span>
                  </a>
                </li>

              </ul>
            </li>
            <li class="submenu-active">
              <a>
                <svg
                  width="21"
                  height="21"
                  viewBox="0 0 21 21"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10.66 10.7908C10.6029 10.7908 10.5462 10.7807 10.4926 10.7608L2.61518 7.87499C2.52145 7.84065 2.44053 7.77835 2.38336 7.69652C2.32619 7.61469 2.29553 7.51728 2.29553 7.41746C2.29553 7.31763 2.32619 7.22022 2.38336 7.13839C2.44053 7.05656 2.52145 6.99427 2.61518 6.95993L7.1269 5.30782C7.18696 5.28581 7.25076 5.27586 7.31467 5.27851C7.37857 5.28117 7.44133 5.29638 7.49935 5.32329C7.55738 5.3502 7.60953 5.38827 7.65284 5.43534C7.69616 5.4824 7.72977 5.53754 7.75177 5.59759C7.77378 5.65765 7.78374 5.72145 7.78108 5.78536C7.77843 5.84926 7.76321 5.91202 7.7363 5.97004C7.70939 6.02807 7.67132 6.08023 7.62426 6.12354C7.57719 6.16685 7.52206 6.20046 7.462 6.22247L4.20003 7.41766L10.66 9.78467L17.1212 7.41766L13.8604 6.22288C13.7403 6.17756 13.6429 6.08664 13.5894 5.96989C13.5359 5.85313 13.5307 5.71999 13.5749 5.59941C13.619 5.47882 13.709 5.38054 13.8252 5.32594C13.9414 5.27134 14.0745 5.26483 14.1955 5.30782L18.7073 6.95993C18.801 6.99427 18.8819 7.05656 18.9391 7.13839C18.9962 7.22022 19.0269 7.31763 19.0269 7.41746C19.0269 7.51728 18.9962 7.61469 18.9391 7.69652C18.8819 7.77835 18.801 7.84065 18.7073 7.87499L10.8282 10.7608C10.7743 10.7808 10.7174 10.7909 10.66 10.7908Z"
                    fill="black" />
                  <path
                    d="M10.66 19.8106C10.5959 19.8107 10.5325 19.7981 10.4732 19.7737C10.414 19.7493 10.3602 19.7134 10.3149 19.6681C10.2695 19.6229 10.2336 19.5691 10.209 19.5099C10.1845 19.4508 10.1719 19.3873 10.1719 19.3233V10.3035C10.1718 10.2026 10.2031 10.1041 10.2614 10.0217C10.3197 9.93924 10.4022 9.87697 10.4974 9.84347C10.5927 9.80996 10.696 9.80687 10.7931 9.83463C10.8902 9.86238 10.9762 9.9196 11.0394 9.99839L12.9162 12.3363L19.4923 9.60177L18.1387 7.69946C18.0641 7.59395 18.0345 7.46311 18.0563 7.33573C18.0782 7.20835 18.1497 7.09487 18.2552 7.02024C18.3608 6.94562 18.4916 6.91597 18.619 6.93782C18.7463 6.95966 18.8598 7.03121 18.9345 7.13673L20.6411 9.53655C20.6836 9.59617 20.712 9.66459 20.7244 9.73673C20.7368 9.80887 20.7327 9.88287 20.7125 9.95322C20.6924 10.0236 20.6566 10.0885 20.6079 10.1431C20.5591 10.1977 20.4987 10.2406 20.4311 10.2687L12.9536 13.3773C12.8561 13.4177 12.7481 13.4254 12.6459 13.3992C12.5437 13.373 12.4527 13.3144 12.3867 13.2321L11.1472 11.6895V19.3233C11.1472 19.4525 11.0959 19.5765 11.0045 19.6678C10.9131 19.7592 10.7892 19.8106 10.66 19.8106Z"
                    fill="#008AEE" />
                  <path
                    d="M18.5391 7.9029C18.4575 7.90287 18.3772 7.88234 18.3056 7.84321C18.234 7.80407 18.1733 7.74757 18.1293 7.6789C18.0852 7.61023 18.059 7.53159 18.0532 7.45018C18.0475 7.36878 18.0622 7.28723 18.0961 7.21301L19.3303 4.51173L12.3121 2.26899L11.8199 3.27018C11.7617 3.38399 11.6612 3.47038 11.5399 3.51073C11.4186 3.55107 11.2863 3.54215 11.1715 3.48587C11.0568 3.42959 10.9687 3.33046 10.9263 3.20986C10.884 3.08926 10.8907 2.95685 10.9451 2.84116L11.6214 1.46221C11.673 1.35738 11.7605 1.27455 11.868 1.22878C11.9755 1.18301 12.0958 1.17736 12.2071 1.21284L20.1498 3.74842C20.2154 3.76938 20.2759 3.80403 20.3272 3.85008C20.3784 3.89612 20.4194 3.95252 20.4472 4.01555C20.4751 4.07858 20.4893 4.14681 20.4889 4.21572C20.4884 4.28463 20.4734 4.35267 20.4447 4.41534L18.98 7.61825C18.9414 7.70285 18.8793 7.77462 18.8012 7.82507C18.7231 7.87551 18.6321 7.90252 18.5391 7.9029ZM2.785 7.9029C2.70674 7.90293 2.62963 7.88412 2.56017 7.84807C2.49071 7.81202 2.43094 7.75978 2.38592 7.69577L0.357287 4.81196C0.314335 4.75039 0.28619 4.67973 0.275049 4.60548C0.263908 4.53124 0.270072 4.45543 0.29306 4.38396C0.316049 4.3125 0.35524 4.24731 0.407575 4.19349C0.45991 4.13966 0.523974 4.09866 0.594768 4.07368L8.56492 1.27518C8.6657 1.23997 8.77524 1.2388 8.87674 1.27184C8.97825 1.30489 9.06611 1.37032 9.12684 1.45811L10.0571 2.80466C10.1305 2.91093 10.1587 3.04203 10.1355 3.1691C10.1122 3.29617 10.0395 3.40881 9.93321 3.48223C9.82693 3.55566 9.69583 3.58386 9.56876 3.56063C9.44169 3.5374 9.32905 3.46464 9.25563 3.35837L8.53662 2.3178L1.525 4.77874L3.18326 7.13672C3.23453 7.20969 3.26479 7.29532 3.27075 7.38429C3.27671 7.47326 3.25814 7.56217 3.21707 7.64131C3.17599 7.72046 3.11399 7.78682 3.0378 7.83316C2.96162 7.8795 2.87417 7.90405 2.785 7.90413V7.9029ZM10.66 19.8106C10.6029 19.8104 10.5463 19.8003 10.4927 19.7806L2.6152 16.8948C2.53568 16.8656 2.46515 16.8162 2.41055 16.7515C2.35596 16.6868 2.31919 16.6089 2.30389 16.5256C2.29539 16.4816 2.29318 16.4366 2.29733 16.3919V12.3404C2.29733 12.2111 2.34866 12.0872 2.44004 11.9958C2.53142 11.9044 2.65536 11.8531 2.78459 11.8531C2.91382 11.8531 3.03776 11.9044 3.12914 11.9958C3.22052 12.0872 3.27186 12.2111 3.27186 12.3404V16.0974L10.66 18.8044L18.0498 16.0974V12.2378C18.0498 12.1086 18.1011 11.9847 18.1925 11.8933C18.2839 11.8019 18.4078 11.7506 18.5371 11.7506C18.6663 11.7506 18.7902 11.8019 18.8816 11.8933C18.973 11.9847 19.0243 12.1086 19.0243 12.2378V16.4255C19.0266 16.5272 18.9971 16.6271 18.9399 16.7112C18.8827 16.7953 18.8006 16.8595 18.7052 16.8948L10.8282 19.7806C10.7743 19.8003 10.7174 19.8104 10.66 19.8106Z"
                    fill="black" />
                  <path
                    d="M8.62394 13.4285C8.56259 13.4285 8.50178 13.417 8.44471 13.3945L0.827284 10.381C0.758639 10.3539 0.697056 10.3115 0.647186 10.2571C0.597316 10.2027 0.560462 10.1376 0.539407 10.0669C0.518353 9.99615 0.513647 9.92154 0.525646 9.8487C0.537644 9.77587 0.566034 9.70672 0.608671 9.64646L2.38506 7.13671C2.4213 7.08278 2.46796 7.03665 2.5223 7.00102C2.57664 6.96539 2.63755 6.94099 2.70146 6.92925C2.76537 6.91752 2.83097 6.91868 2.89443 6.93267C2.95788 6.94667 3.01789 6.97321 3.07093 7.01074C3.12397 7.04827 3.16897 7.09603 3.20328 7.15121C3.23759 7.20639 3.26051 7.26787 3.27071 7.33205C3.2809 7.39622 3.27816 7.46178 3.26264 7.52487C3.24713 7.58797 3.21915 7.64732 3.18035 7.69945L1.76367 9.70306L8.46357 12.3535L10.2744 10.0078C10.3534 9.9055 10.4698 9.83875 10.598 9.82225C10.7261 9.80575 10.8556 9.84085 10.9579 9.91983C11.0602 9.9988 11.127 10.1152 11.1435 10.2434C11.16 10.3716 11.1249 10.501 11.0459 10.6034L9.00949 13.2411C8.96379 13.2997 8.90529 13.347 8.83846 13.3795C8.77163 13.412 8.69825 13.4288 8.62394 13.4285ZM10.66 8.46111C10.5959 8.46121 10.5325 8.44869 10.4732 8.42425C10.414 8.39981 10.3602 8.36394 10.3149 8.31868C10.2695 8.27342 10.2336 8.21967 10.209 8.1605C10.1845 8.10133 10.1719 8.0379 10.1719 7.97384V4.54616C10.1719 4.41693 10.2232 4.293 10.3146 4.20162C10.406 4.11024 10.5299 4.0589 10.6591 4.0589C10.7884 4.0589 10.9123 4.11024 11.0037 4.20162C11.0951 4.293 11.1464 4.41693 11.1464 4.54616V7.97384C11.1464 8.10293 11.0952 8.22674 11.004 8.3181C10.9128 8.40946 10.789 8.46089 10.66 8.46111Z"
                    fill="#008AEE" />
                  <path
                    d="M10.6599 8.58416C10.5405 8.58443 10.4251 8.54062 10.3359 8.46111L8.69529 6.99808C8.64606 6.95593 8.60573 6.90437 8.57666 6.84644C8.5476 6.78851 8.53039 6.72536 8.52603 6.66069C8.52168 6.59603 8.53027 6.53114 8.5513 6.46983C8.57233 6.40853 8.60538 6.35203 8.64852 6.30366C8.69166 6.25528 8.74401 6.216 8.80252 6.18811C8.86102 6.16022 8.9245 6.14428 8.98925 6.14123C9.05399 6.13817 9.11869 6.14807 9.17956 6.17033C9.24043 6.19259 9.29625 6.22677 9.34375 6.27087L10.6599 7.44433L11.9765 6.27046C12.073 6.18442 12.1996 6.14021 12.3287 6.14755C12.4577 6.1549 12.5785 6.2132 12.6646 6.30963C12.7506 6.40607 12.7948 6.53273 12.7875 6.66176C12.7801 6.7908 12.7218 6.91163 12.6254 6.99767L10.9848 8.4607C10.8954 8.54051 10.7797 8.58448 10.6599 8.58416ZM4.55599 15.8558C4.49202 15.8559 4.42867 15.8433 4.36955 15.8189C4.31044 15.7944 4.25672 15.7586 4.21147 15.7134C4.16622 15.6681 4.13032 15.6145 4.10582 15.5554C4.08133 15.4963 4.06873 15.4329 4.06873 15.369V14.0372C4.06873 13.908 4.12006 13.784 4.21144 13.6926C4.30282 13.6013 4.42676 13.5499 4.55599 13.5499C4.68522 13.5499 4.80916 13.6013 4.90054 13.6926C4.99192 13.784 5.04326 13.908 5.04326 14.0372V15.369C5.04326 15.4329 5.03065 15.4963 5.00616 15.5554C4.98167 15.6145 4.94577 15.6681 4.90052 15.7134C4.85526 15.7586 4.80154 15.7944 4.74243 15.8189C4.68331 15.8433 4.61996 15.8559 4.55599 15.8558ZM5.85619 16.3C5.72696 16.3 5.60302 16.2487 5.51164 16.1573C5.42026 16.0659 5.36892 15.942 5.36892 15.8127V14.481C5.36892 14.3517 5.42026 14.2278 5.51164 14.1364C5.60302 14.045 5.72696 13.9937 5.85619 13.9937C5.98542 13.9937 6.10936 14.045 6.20074 14.1364C6.29212 14.2278 6.34345 14.3517 6.34345 14.481V15.8127C6.34345 15.942 6.29212 16.0659 6.20074 16.1573C6.10936 16.2487 5.98542 16.3 5.85619 16.3Z"
                    fill="#008AEE" />
                </svg>

                <span class="text">Contact Info</span>
                <i class="arrow fa-solid fa-angle-down"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{ url('admin-dashboard-contact-info-page') }}">
                    <span class="text">Contact Info List</span>
                  </a>
                </li>

              </ul>
            </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Sidebar -->
    </div>
    <li class="log-out">
      <a href="#" onclick="userlogout(event)">
        <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M19.0556 2.76261H23.2222C24.7564 2.76261 26 3.96443 26 5.44695V6.78912M19.0556 24.2374H23.2222C24.7564 24.2374 26 23.0356 26 21.553V20.2108M2.97958 23.4691L11.3129 25.885C13.0951 26.4018 14.8889 25.1121 14.8889 23.3138V3.6861C14.8889 1.88797 13.0951 0.598274 11.3129 1.11497L2.97958 3.53088C1.80464 3.87151 1 4.91658 1 6.10201V20.8979C1 22.0834 1.80464 23.1285 2.97958 23.4691Z"
            stroke="#008AEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M9.33431 13.5H9.33331" stroke="#008AEE" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" />
          <path d="M19.0555 13.5H26M26 13.5L23.2222 10.8156M26 13.5L23.2222 16.1843" stroke="#008AEE"
            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>

        <span class="text">Log Out</span>
      </a>
    </li>
  </div>
  <!-- Left Sidebar End -->


  @yield('content')



  <script>
    async function userlogout(event) {
      event.preventDefault(); // Prevent the default behavior of the link

      try {
        let res = await axios.get("/naxus-pos-logout", HeaderToken());
        localStorage.clear();
        sessionStorage.clear();
        window.location.href = "/login-page";
      } catch (e) {
        console.error("Logout error:", e);

        // Show error message if available, or a default message
        errorToast(e.response?.data?.message || "Something went wrong");
      }
    }
  </script>

  {{-- <script>
    // Disable right-click
    document.addEventListener('contextmenu', function (e) {
      e.preventDefault();
    });

    // Disable F12 and Ctrl+Shift+I (Developer Tools)
    document.addEventListener('keydown', function (e) {
      if (e.key === 'F12' || (e.ctrlKey && e.shiftKey && e.key === 'I')) {
        e.preventDefault();
      }
    });
  </script> --}}




  <script>
    document.addEventListener("DOMContentLoaded", function() {
      getUserProfile();

      async function getUserProfile() {
        try {
          const response = await axios.get("/user-profile", HeaderToken());
          const user = response.data;

          // Check if user role is admin
          if (user.role === 'admin') {
            // Show all menus for admin
            showAdminMenus();
          } else {
            // Hide specific menus for regular users
            hideAdminMenus();
          }
        } catch (error) {
          console.error('Error fetching user profile:', error);
          // Handle unauthorized error
          unauthorized(error.response?.status);
        }
      }

      function hideAdminMenus() {
        // Hide menus meant for admin only
        document.querySelectorAll('.hidemenu').forEach(menu => menu.style.display = 'none');
      }

      function showAdminMenus() {
        // Show all admin menus (if hidden by default)
        document.querySelectorAll('.hidemenu').forEach(menu => menu.style.display = 'block');
      }
    });
  </script>


  <!-- Popper.js for tooltips and popovers in Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <!-- XLSX.js for reading and writing Excel files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
  <!-- jsPDF for generating PDF documents -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <!-- jsPDF-AutoTable for adding tables to PDFs created with jsPDF -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.26/jspdf.plugin.autotable.min.js"></script>



  <!-- JAVASCRIPT -->
  <script src="{{ asset('back-end/assets/js/fontawesome.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/simplebar.min.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/full-screen-toggle.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/all-modals.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/table-funtion.js') }}"></script>
  <script src="{{ asset('back-end/assets/js/app.js') }}"></script>

  <script src="{{ asset('back-end/assets/js/style.js') }}"></script>

</body>

</html>