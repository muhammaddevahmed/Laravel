<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
        }
        .table-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 30px;
        }
        h2 {
            background: #007bff;
            color: white;
            padding: 10px;
            border-radius: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Back to Home Button -->
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ url('/home') }}" class="btn btn-primary">&larr; Back to Home</a>
        </div>

        <div class="table-card">
            <h2>User List</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                          
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allUsers as $user)
                            <tr>
                               
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td><a href="edit/{{ $user['id'] }}" class = "btn btn-info">Edit</a></td>
                                <td>
                                   <a href="{{ url('delete/'.$user->id) }}" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger">
                                      Delete
                                   </a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
   @endif
    </div>

</body>
</html>
