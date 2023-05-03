<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon ">
            <img class="sidebar-card-illustration mb-2 w-50 " src="img/Group 3.svg" alt="...">
        </div>
        <div class="sidebar-brand-text mx-3 me-3">Ternakku</div>
    </a>
    <hr class="sidebar-divider my-0">\
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">
            <img class="sidebar-card-illustration mb-1 w-25" src="img/Group 4.svg" alt="...">
            <div>
                <p class="text-white mb-1">{{ Auth::user()->username }}</p>
                <span class="text-white  ">{{ Auth::user()->level }}</span>
                <img class="sidebar-card-illustration mx-4" src="img/Vector (1).svg" alt="...">
            </div>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('/') }}">
            <span class="text-white">Dashboard</span>
            <img class="sidebar-card-illustration mb-2 float-right " src="img/home.svg" alt="...">
        </a>

    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <span>Orders</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="{{ url('order') }}">Orders</a>
                <a class="collapse-item" href="manage-orders.html">Manage Orders</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">

            <span>Products</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ url('product') }}">Products</a>
                <a class="collapse-item" href="{{ url('rating') }}">Ratings</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('category') }}">
            <span>Categories</span></a>

    </li>

    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('customer') }}">
            <span>Customers</span></a>
    </li>
</ul>
