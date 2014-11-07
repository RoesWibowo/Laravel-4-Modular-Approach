<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Roes Wibowo">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
</head>
<body>
    <h1>{{$title}} - {{Lang::get('User::content.page')}}:</h1>
    
    @if(!$users->isEmpty())
    	<ul>
    	@foreach($users as $user)
    		<li>{{$user->firstname.' '.$user->lastname}} with blog: <a href="{{$user->website}}" target="_blank">{{$user->website}}</a></li>
    	@endforeach
    	</ul>
    @else
    	<p>No record found.</p>
    @endif
</body>
</html>