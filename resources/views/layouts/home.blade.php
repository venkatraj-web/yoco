<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Venkat</title>
</head>
<body>
    
    @if (Session::has("success"))
    <span style="color:green">{{ Session::get("success") }}</span>
    @endif
    @if (Session::has("fail"))
    <span style="color:red">{{ Session::get("fail") }}</span>
    @endif

    <form action="/contact/store" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="enter name" value="{{ old("name") }}">
            @error("name")
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <input type="email" name="email" placeholder="enter email" value="{{ old("email") }}">
            @error("email")
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <input type="text" name="organization" placeholder="enter organization name" value="{{ old("organization") }}">
            @error("organization")
                <span style="color:red">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" value="submit">
    </form>
</body>
</html>