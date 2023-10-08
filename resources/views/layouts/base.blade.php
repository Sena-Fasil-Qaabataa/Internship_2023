<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="../css/app.css">
    <style>
        div{
        background-color: aquamarine;
        margin-top: 50px;
        border-radius: 10px;
        text-align: center;
        }
       nav
       li{
            display:inline-block; margin-right:80px; padding:10;list-style-type:none;display:inline;
            margin-top: 20px;
font-size: 30px;
        }
        nav a {
  text-decoration: none;
  color: hsl(266, 78%, 45%); /* Link text color */
  font-weight: 500;

}
.Student{
    text-align: center
}

    </style>
    <!-- Include your CSS and JavaScript files here -->
</head>
<body>
    <header>
      <div>
        <nav>
             <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('About')}}">About</a></li>
                <li><a href="{{ route('photo') }}">Photos</a></li>
                <li><a href="{{route('contact')}}">Contacts</a></li>
                <li><a href="{{ route('mvc') }}">MVC</a></li>
                <li><a href="{{route('wel')}}">Welcome</a></li>
            </ul>
        </nav>
    </div>
    </header>

    @yield('content')
</body>
</html>
