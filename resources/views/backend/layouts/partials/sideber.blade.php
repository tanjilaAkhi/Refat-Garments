<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Factories</div>

            {{-- creative collection limited --}}
            <a class="nav-link collapsed" href="{{ route("ccl.index") }}" >
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                CCL

            </a>


            {{-- next collections limited --}}
            <a class="nav-link collapsed" href="{{ route("ncl.index") }}" >
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                NCL

            </a>

{{-- that's it sportswera limited --}}
<a class="nav-link collapsed" href="{{ route("tiswl.index") }}" >
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    TISWL

</a>


{{-- that's it sportswear limited-RGL-03 --}}


    <a class="nav-link collapsed" href="{{ route("rgl.index") }}">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        RGL

    </a>




</nav>


