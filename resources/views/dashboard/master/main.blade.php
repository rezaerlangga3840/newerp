
<!--
=========================================================
* Material Dashboard 3 - v3.2.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
@include('dashboard.master.header')
<body class="g-sidenav-show  bg-gray-100">
  @include('dashboard.master.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('dashboard.master.navbar')
    <div class="container-fluid py-2">
      <div class="row">
        <div class="ms-3">
          <h3 class="mb-0 h4 font-weight-bolder">
            @yield('pagetitle')
          </h3>
          <p class="mb-4">
            @yield('pagedescription')
          </p>
        </div>
      </div>
      @yield('pagecontent')
    </div>
    @include('dashboard.master.footer')
  </main>
  @include('dashboard.master.fixedplugin')
  @include('dashboard.master.scripts')
</body>

</html>