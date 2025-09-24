<h1>Buku yang Tersedia</h1>

@if ($stat->isEmpty())
<p>Tidak ada buku yang tersedia saat ini.</p>
@else
<ul>
    @foreach ($stat as $bk)
    <li>
        <a href="{{ route('buku.show', $bk['id']) }}">
            {{ $bk['judul'] }} - {{ $bk['penulis'] }}
        </a>
    </li>
    @endforeach
</ul>
@endif
<a href="{{ route('buku.index') }}">Back</a>