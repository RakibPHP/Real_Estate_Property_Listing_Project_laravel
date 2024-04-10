<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Admin <span>Panel</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">

        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
        </li>


        <li class="nav-item nav-category">RealEstate</li>
         {{-- Property Type Start --}}
        @if(Auth::user()->can('type.menu'))
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Property Type </span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">

             @if(Auth::user()->can('all.type'))
              <li class="nav-item">
                <a href="{{ route('all.type') }}" class="nav-link">All Type</a>
              </li>
                @endif
               @if(Auth::user()->can('add.type'))
              <li class="nav-item">
                <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>
              </li>
              @endif

            </ul>
          </div>
        </li>
        @endif
        {{-- Property Type End --}}

      </ul>
    </div>
  </nav>
