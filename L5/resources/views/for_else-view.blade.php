<!-- new Function only in laravel 

<table>
@if(isset($data))
    @foreach($data as $d)
    <tr>
        <td>{{$d->name  or $d[]}}</td>
    </tr>
@endforeach    
@else
    <tr>
        <td> No Record Found</td>
    </tr>
         
@endif    
    
</table>    
if we can to use if and foreach both condition use at a time so we can use short code in laravel choice yours use above code or below code bpth perform same function
-->

<table>
    @forelse($data as $d)
    <tr>
        <td>{{$d}}</td>
    </tr>
   
@empty
    <tr>
        <td> No Record Found</td>
    </tr>
         
@endforelse   
</table> 