@props(['username'])

<nav class="navbar">
    <div class="inner">
        <span class="brand">PerpusKu</span>
        <div class="menu">
            <a href="{{ route('dashboard', ['username' => $username]) }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a>
            <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="{{ request()->routeIs('pengelolaan') ? 'active' : '' }}">Pengelolaan</a>
            <a href="{{ route('profile', ['username' => $username]) }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Profile</a>
            <a href="{{ route('login') }}">Keluar</a>
        </div>
    </div>
</nav>
