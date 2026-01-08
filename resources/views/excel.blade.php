<tbody>
<tr>
    <th class="bg-dark" style="width: 5%">SL</th>
    <th class="bg-dark" style="width: 25%">Category</th>
    <th class="bg-dark" style="width: 20%">Code</th>

</tr>
@php($i = 0)
@for($i = 0; $i<5; $i++)
    <tr>
        <td>{{ $i + 1 }}</td>
        <td>cat1</td>
        <td>code2</td>
    </tr>
@endfor
<tr>
    <td>total</td>
    <td>{{ $i }}</td>
</tr>
</tbody>
