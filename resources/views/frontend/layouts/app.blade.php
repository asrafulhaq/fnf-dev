@include("frontend.layouts.popup-product")

@php
	$home_page_data  = App\Model\HomePage::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
	@include("frontend.layouts.header")
</head>
<body>
	
	
	@include("frontend.layouts.page-header")

	
	@section('main-content')
	@show 

	@include("frontend.layouts.footer")	
</body>
</html>