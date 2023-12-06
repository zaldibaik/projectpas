<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-info" style="width: 200px; min-height:100vh;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto  text-white">
        <li class="nav-item">
                <a href="/kategori" class="nav-link" {{ request()->is('kategori*') ? 'active' : '' }}
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>

                Kategori
            </a>
        </li>
        <li>
        <a href="/berita" class="nav-link" {{ request()->is('berita*') ? 'active' : '' }}
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                </svg>
               Berita
            </a>

            <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://th.bing.com/th?id=ORMS.75e9e194a1f540fac403aeebf74b9ccb&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>#</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#"
            href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form></a>
                           
                    </li>
            
        </ul>
    </div>
        </li>
    </ul>
    <hr>

</div>
