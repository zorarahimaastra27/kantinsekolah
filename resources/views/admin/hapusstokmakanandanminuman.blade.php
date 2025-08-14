@foreach ($stok as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->nama }}</td>
    <td>{{ $item->kategori }}</td>
    <td>{{ $item->stok }}</td>
    <td>{{ $item->satuan }}</td>
    <td>
        <a href="{{ route('stok.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('stok.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
