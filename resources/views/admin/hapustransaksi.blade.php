@foreach($transaksi as $item)
<tr>
    <td>{{ $item->id }}</td>
    <td>{{ $item->tanggal }}</td>
    <td>{{ $item->nama_pembeli }}</td>
    <td>{{ $item->total_harga }}</td>
    <td>
        <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus transaksi ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
