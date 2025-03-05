<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .students-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container mt-4">
        <h1 class="header">Hello, This is the Index Page</h1>

        <!-- Users Button -->
        <div class="text-center mb-3">
            <a href="{{ url('users') }}" class="btn btn-primary">View Users &rarr;</a>
        </div>

        <!-- Students List -->
        <div class="students-card">
            <h3 class="text-center mb-3">Students List</h3>
            <ul class="list-group">
                @foreach ($students as $std)
                    <li class="list-group-item">{{ $std }}</li>
                @endforeach
            </ul>
        </div>
    </div>

</body>
</html>
