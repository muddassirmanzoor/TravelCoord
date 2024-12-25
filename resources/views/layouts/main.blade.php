<!DOCTYPE html>
<html lang="en">
@include('includes.head')

<body class="loading"
      data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @include('includes.left-sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('includes.nav')
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">
                @php $title = 'Dashboard' @endphp

            @if (Auth::user()->role =='minister')
                    @php $title = 'Dashboard' @endphp
{{--                @elseif(Auth::user()->role =='operations')--}}
{{--                    @php--}}
{{--                        $title = \Illuminate\Support\Facades\Route::currentRouteName() === 'edit-interviewer' ? 'Edit Interviewer' : 'Add Interviewer';--}}
{{--                        @endphp--}}
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">{{$title}}</h4>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- start page title -->

                <!-- end page title -->

                <!---------Filter Start Here---------->
                @if (Auth::user()->role !='interviewer' && Auth::user()->role != 'invigilator' && Auth::user()->role != 'minister'&& Auth::user()->role != 'operations')
{{--                @include('includes.filterForm')--}}
                @endif
                @if (Auth::user()->role =='minister')
{{--                    @include('includes.ministerFilterForm')--}}
                @endif
                <!---------Filter Start Here---------->

                @yield('content')
                <!-- content -->

                <!-- Footer Start -->
                @include('includes.footer')
                <!-- end Footer -->

            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- bundle -->
@include('includes.js')
</body>
</html>
