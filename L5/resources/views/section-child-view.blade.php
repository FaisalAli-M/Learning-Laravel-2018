@extends('section-view')
<!-- Here if we again use section('F_content3') which is define in sction-view so it override and run this section('F_content3')  -->
@section('F_content3')
@parent <!-- parent write to run section-view F_Content data here if we dont use parent so this override section-view F_content3 data and only run this section data not section-view   --> 
<h1>Data From Section Child View which Extends section view</h1>
@endsection