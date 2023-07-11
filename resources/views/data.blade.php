{{-- @foreach ($data as $item) --}}
<tr >
    <td style="">{{ $item->name }}</td>
    <td>{{ $item->contact }}</td>
    <td>{{ $item->country }}</td>
</tr>
{{-- @endforeach --}}
