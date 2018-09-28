<!-- use for inlude using include() function in test-incl-view.blade.php  -->
<table>
    @foreach($naam as $d)
    <tr>
        <td>
            {{$d['name']}}
        </td>
    </tr>
    @endforeach
</table>