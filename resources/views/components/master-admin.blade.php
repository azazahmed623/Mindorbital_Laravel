<!-- Sidebar -->
<x-partials.sidebar />
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <x-partials.header />
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        {{ $slot }}
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <x-partials.footer />
