<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Artikel</title>
    <link rel="stylesheet" href="{{ asset('web-content/css/style.css') }}">
</head>
<body>
    
    <div class="container">
        <div class="admin-page">
            <div class="admin-sidebar">
                <h4>Admin Aplikasi</h4>
                Hello, {{ Auth::user()->name }}

                <ul class="admin-navigation">
                    <li>
                        <a href="/admin">Dashboard</a>
                    </li>

                    <li>
                        <a href="/admin/articles">Articles</a>
                    </li>

                    <li>
                        <a href="/admin/users">Users</a>
                    </li>

                    <li>
                        <a href="/logout">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="admin-content">
                @yield('content')
            </div>
        </div>
    </div>

</body>
</html>