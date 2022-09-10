@props(['colspan', 'value' => 'No data right now'])
<tr>
    <td colspan="{{ $colspan }}" class="p-4 text-sm text-gray-500 whitespace-nowrap">
        {{ $value }}
    </td>
</tr>
