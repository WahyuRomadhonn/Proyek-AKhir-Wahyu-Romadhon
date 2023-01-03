<li class="nav-item">
    <a href="{{ route('pendaftarans.index') }}"
       class="nav-link {{ Request::is('pendaftarans*') ? 'active' : '' }}">
        <p>Pendaftaran</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('jadwals.index') }}"
       class="nav-link {{ Request::is('jadwals*') ? 'active' : '' }}">
        <p>Jadwal</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('informasis.index') }}"
       class="nav-link {{ Request::is('informasis*') ? 'active' : '' }}">
        <p>Informasis</p>
    </a>
</li>


