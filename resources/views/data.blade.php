<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skynet Machine Test</title>
    <link rel="stylesheet" type="text/css" href="{{asset('asset/css/style.css')}}">
</head>
<body>
    <div class="container">
    	@foreach($jsondata as $item)
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="{{asset('storage/images/usermale.png')}}">
                    <h3>User</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content" >
                    <p><b>UserId:-</b> <br>{{$item['userId']}}</p><br><p><b>Id:-</b><br> {{$item['id']}}</p><br><p><b>Title:-</b><br> {{$item['title']}}</p><br><p><b>Body:-</b><br> {{$item['body']}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>