@extends('Admin.master')


@section('content')
	
	<main id="main" class="main">
		
		<div class="pagetitle">
			<h1>{{$title}}</h1>
			<nav>
				<ol class="breadcrumb">
					{{$breadcrumbs}}
				</ol>
			</nav>
		</div><!-- End Page Title -->
		
		<section class="section dashboard">
			{{$slot}}
		</section>
	
	</main>
	
@endsection