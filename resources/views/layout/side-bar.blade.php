<nav id="sidebar" class="sidebar">
    <div class="sidebar-content ">
        <a class="sidebar-brand" href="index.html">
            <i class="align-middle" data-feather="box"></i>
            <span class="align-middle">AppStack</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item"><a class="sidebar-link" href="{{ route('profile') }}">Profile</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="{{ route('clients') }}">Clients</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="{{ route('chat') }}">Chat <span class="sidebar-badge badge badge-primary">New</span></a></li>
        </ul>
        <div class="sidebar-bottom d-none d-lg-block">
            <div class="media">
                <img class="rounded-circle mr-3" src="{{ asset('asset/img/avatars/avatar.jpg') }}" alt="Chris Wood" width="40" height="40">
                <div class="media-body">
                    <h5 class="mb-1">Chris Wood</h5>
                    <div>
                        <i class="fas fa-circle text-success"></i> Online
                    </div>
                </div>
            </div>
        </div>

    </div>
</nav>
