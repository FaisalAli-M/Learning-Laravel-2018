@extends('F_layout.F_Master2')

@section('F_content') <!-- this section override in section-child-view.blade.php -->
<h1>Data form stack-view it extends F-Master2</h1>
@endsection

@push('cs') <!-- if we want to change the color of h1 in master layout to other view run so override this with different color in different view with same push name so in differnt views h1 color different

agr hum chahty hen is view py h1 ya header footer etc ka color aisa ho is view page py aisa hoto isy stack sy kr skty hen alag alag page mai push ko override kr kr k same stack name sy
-->
    <style>
        h1 {color:orange}
    </style>
@endpush

@push('cs')
    <link rel="stylesheet" href="" > 
@endpush

@push('js')
    <script>
        // to write some javascript code to add in master layout
    </script> 
@endpush

@push('js')
    <script src=""></script> 
@endpush