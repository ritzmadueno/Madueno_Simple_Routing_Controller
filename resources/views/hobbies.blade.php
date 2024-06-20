<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Hobbies</h1>
        <p>{{ $data['description'] }}</p>
        <ul>
            <li>{{ $data['list'][0] }}</li>
            <li>{{ $data['list'][1] }}</li>
            <li>{{ $data['list'][2] }}</li>
        </ul>
        <a href="/about-me"><button>About Me</button></a>
        <a href="/skills"><button>Skills</button></a>
        <a href="/hobbies"><button>Hobbies</button></a>
    </div>
</body>
</html>
