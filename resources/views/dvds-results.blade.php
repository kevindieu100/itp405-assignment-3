<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>Search {{ $search }}</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>

	<body>
<!-- 		<ul>
			@foreach($dvds as $dvd)
				<li>{{ $dvd->title }}</li>
			@endforeach
		</ul> -->

		<div class="container">
		  <h1>Search Results for {{ $search }}</h1>         
		  <table class="table">
		    <thead>
		      <tr>
		        <th>DVD Title</th>
		        <th>Rating</th>
		        <th>Genre</th>
		      </tr>
		    </thead>
		    <tbody>
		    	@foreach($dvds as $dvd)
		    		<tr>
		    			<td>{{ $dvd->title }}</td>
		    			<td> {{$dvd->rating_name }}</td>
		    			<td> {{ $dvd->genre_name }}</td>
		      		<tr>
		      	@endforeach
		    </tbody>
		  </table>
		</div>
	</body>
</html>