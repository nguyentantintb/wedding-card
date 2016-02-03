@extends('admin.master')
@section('content')
	<div id="ckfinder1"></div>
     <script src="/ckfinder/ckfinder.js"></script>
     <script>
         CKFinder.widget( 'ckfinder1', {
             height: 600
         } );
     </script>
@endsection