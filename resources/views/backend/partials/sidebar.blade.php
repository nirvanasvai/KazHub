<div class="sidebar">
  <nav class="sidebar-nav">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="nav-icon fas fa-tachometer-alt"></i> @lang('Панель Приборов')
        </a>
      </li>
      @role('admin')
      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.stat') }}">
          <i class="nav-icon fas fa-chart-line"></i></i> @lang('Statistics')
        </a>
      </li> --}}
      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.allurl') }}">
          <i class="nav-icon fas fa-link"></i> @lang('Все URL-адреса')
        </a>
      </li>
      @endrole
      <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
        <i class="nav-icon fas fa-user-circle"></i> @lang('Пользователи')</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.edit', Auth::user()->name) }}">
              <i class="nav-icon fas fa-user"></i> @lang('Ваш Профиль')
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.change-password', Auth::user()->name) }}">
              <i class="nav-icon fas fa-key"></i> @lang('Сменить Пароль')
            </a>
          </li>
          @role('admin')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
              <i class="nav-icon fas fa-users"></i> @lang('Все пользователи')
            </a>
          </li>
          @endrole
        </ul>
      </li>
    </ul>
  </nav>
  <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
