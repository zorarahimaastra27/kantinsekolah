@foreach ($kategoriMenu as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_kategori }}</td>
    <td>{{ $item->deskripsi }}</td>
    <td>
        <!-- Tombol Edit -->
        <a href="{{ route('kategorimenu.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <!-- Tombol Hapus -->
        <form action="{{ route('kategorimenu.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
