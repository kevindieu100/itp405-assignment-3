<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title>DVD Search </title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<style>
		#custom-search-input {
        margin:0;
        margin-top: 10px;
        padding: 0;
	    }
	 
	    #custom-search-input .search-query {
	        padding-right: 3px;
	        padding-right: 4px \9;
	        padding-left: 3px;
	        padding-left: 4px \9;
	        margin-bottom: 0;
	        -webkit-border-radius: 3px;
	        -moz-border-radius: 3px;
	        border-radius: 3px;
	    }
	 
	    #custom-search-input button {
	        border: 0;
	        background: none;
	        padding: 2px 5px;
	        margin-top: 2px;
	        position: relative;
	        left: -28px;
	        margin-bottom: 0;
	        -webkit-border-radius: 3px;
	        -moz-border-radius: 3px;
	        border-radius: 3px;
	        color:#D9230F;
	    }
		</style>

	</head>

	<body>
<!-- 		<h1>DVD Search</h1>
		<form action="/dvds" method="get">
			DVD Title: <input type="text" name="dvdTitle">
			<br>
			<button type="submit">Search</button>
		</form>
 -->
		<div class="container">
			<div class="row">
				<h2>DVD Search</h2>
				<form action="/dvds" method="get">
		           <div id="custom-search-input">
	                    <div class="input-group col-md-12">
		                        <input type="text" class="search-query form-control" placeholder="Search" name="dvdTitle" >
	                    	<span class="input-group-btn">
	                            <button class="btn btn-danger" type="">
	                                <span class=" glyphicon glyphicon-search"></span>
	                            </button>
	                        </span>
	                    </div>
	               </div>
	               <button class="btn btn-danger" style="margin-top:20px" type="submit">Search</button>
	            </form>
			</div>
		</div>
	</body>
</html>