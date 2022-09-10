@props(['columns'])
<thead class="bg-gray-100">
    <tr>
        @foreach ($columns as $column)
            <th scope="col" class="p-3 text-left text-xs font-medium text-gray-500 uppercase">
                {{ $column }}
            </th>
        @endforeach
    </tr>
</thead>
