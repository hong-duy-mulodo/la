@foreach ($data as $k => $item)
    <tr>
        <td>{{ $k }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->role->role_name }}</td>
        <td class="d-flex justify-content-around">
            <a href="{{ route('account.edit', ['id' => $item->id]) }}">
               View
            </a>
            <a href="{{ route('account.show', ['id' => $item->id]) }}">
                Edit
            </a>
            <a href="{{ route('account.destroy', ['id' => $item->id]) }}">
                Delete
            </a>
        </td>
    </tr>
@endforeach
<tr class="paginate">
    <td colspan="5">
        {{ $data->links() }}
    </td>
</tr>