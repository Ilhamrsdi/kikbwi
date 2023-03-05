<header class="topbar fixed-top" data-navbarbg="skin4">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" style="background-color: #8294FF;" data-logobg="skin6">
            <a class="navbar-brand" href="/Dashboard">
                <li style="list-style-type:none; color:#ffff; font-weight: bold; font-size: 19px;">
                <img class="image" border="0" src="../images/logodinas.png" width="50px" 
                style="margin: 1px; padding: 0px; color:#ffff;">
                KIK BANYUWANGI</li>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin3" style="background-color: #8294FF;">
            <ul class="navbar-nav me-auto mt-md-0 ">
                <li class="nav-item hidden-sm-down">
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark fw-bolder" id="navbarDropdown" 
                    role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-weight: bold;">
                        <i class="bi bi-bell-fill" style="padding:14px"></i>
                        <i class="bi bi-person-circle profile-pic me-2"></i>
                        {{ auth()->user()->name }}
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>