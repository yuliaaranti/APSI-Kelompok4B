<nav>
    <ul>
        <div class="nav-left">
            <li><a href="{{ route('kp') }}">Kerja Praktik</a></li>
            <li><a href="{{ route('magang') }}">Magang</a></li>
            @if (Auth::guard('admins')->check())
                <li><a href="{{ route('dosbing') }}">Dosbing</a></li>
                <li><a href="{{ route('matkul') }}">Matkul</a></li>
            @endif
        </div>
        <div class="nav-right">
            @if (Auth::guard('web')->check())
                <li>Hak akses: Mahasiswa</li>
            @elseif (Auth::guard('koors')->check())
                <li>Hak akses: Koordinator KP</li>
            @elseif (Auth::guard('kaprodis')->check())
                <li>Hak akses: Kepala Prodi</li>
            @elseif (Auth::guard('admins')->check())
                <li>Hak akses: Admin</li>
            @endif
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <li>
                    <button type="submit">
                        Log Out
                    </button>
                </li>
            </form>
        </div>
    </ul>
</nav>