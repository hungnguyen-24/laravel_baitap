<table border="1" style="border-collapse: collapse;">
    @for ($i = 0; $i < $n; $i++)
        <tr>
            @for ($j = 0; $j < $n; $j++)
                <td style="width: 50px; height: 50px; background-color: {{ ($i + $j) % 2 == 0 ? 'white' : 'black' }};">
                </td>
            @endfor
        </tr>
    @endfor
</table>