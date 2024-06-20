<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>About Me</h1>
        <p>{{ $data['description'] }}</p>
        <img src="{{ asset('images/' . $data['image']) }}" alt="Profile Picture" class="profile-picture">
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
