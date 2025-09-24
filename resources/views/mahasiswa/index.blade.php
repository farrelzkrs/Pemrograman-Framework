<h1>Daftar Mahasiswa</h1>
<ul>
    @foreach ($mahasiswa as $goat)
    <li>
        <a href="{{ route('mahasiswa.show', $goat['id']) }}">
            {{ $goat['nama'] }}, NPM {{ $goat['npm'] }}
        </a>
    </li>

    @endforeach
</ul>