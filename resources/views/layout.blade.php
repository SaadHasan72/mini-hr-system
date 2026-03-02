<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mini HR</title>
    <style>
        body{font-family:Arial;margin:20px}
        table{width:100%;border-collapse:collapse;margin-top:10px}
        th,td{border:1px solid #ddd;padding:10px;text-align:left}
        th{background:#f5f5f5}
        .btn{padding:8px 12px;border-radius:6px;text-decoration:none;border:0;cursor:pointer}
        .dark{background:#222;color:#fff}
        .light{background:#eee;color:#222}
        .danger{background:#c0392b;color:#fff}
        input{padding:8px;width:100%;margin:6px 0;border:1px solid #ddd;border-radius:6px}
        .msg{background:#eaffea;border:1px solid #b5f5b5;padding:10px;border-radius:8px;margin-bottom:10px}
        .err{background:#ffecec;border:1px solid #ffb3b3}
        .card{border:1px solid #ddd;padding:15px;border-radius:10px}
    </style>
</head>
<body>
    <h1>Mini HR</h1>

    @if(session('success'))
        <div class="msg">{{ session('success') }}</div>
    @endif

    @yield('content')
</body>
</html>