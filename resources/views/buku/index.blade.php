<h1>Daftar Buku</h1>
<ul>
    @foreach ($buku as $bk)
    <li>
        <a href="{{ route('buku.show', $bk['id']) }}">
            {{ $bk['judul'] }} - {{ $bk['penulis'] }}
        </a>
    </li>
    @endforeach
    <h3><a href="{{ route('buku.available') }}">Buku Tersedia</a></h3>
</ul>