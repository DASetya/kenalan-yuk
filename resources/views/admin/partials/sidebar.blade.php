<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.questions.index') }}">Kenalan Yuk</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.questions.index') }}">St</a>
        </div>
        <ul class="sidebar-menu">
            {{-- Data Master Section --}}
            <li class="menu-header">
                Data Master
            </li>

            <li class="{{ (request()->routeIs('admin.questions.*')) ? 'active':'' }}">
                <a class="nav-link" href="{{ route('admin.questions.index') }}">
                    <i class="far fa-square"></i>
                    <span>Pertanyaan</span>
                </a>
            </li>

            <li class="{{ (request()->routeIs('admin.my-story-categories.*')) ? 'active':'' }}">
                <a class="nav-link" href="{{ route('admin.my-story-categories.index') }}">
                    <i class="far fa-square"></i>
                    <span>Kategori Kisahku</span>
                </a>
            </li>

            <li class="{{ (request()->routeIs('admin.psychologists.*')) ? 'active':'' }}">
                <a class="nav-link" href="{{ route('admin.psychologists.index') }}">
                    <i class="far fa-square"></i>
                    <span>Psikolog</span>
                </a>
            </li>

        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('index') }}" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Cek Website
            </a>
        </div>
    </aside>
</div>
