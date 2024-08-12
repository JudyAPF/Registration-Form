<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Registered</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Optional: Add custom styles here */
        body {
            padding: 20px;
        }

        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>All Registered Information</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Mobile Phone</th>
                        <th>Telephone Number</th>
                        <th>Birth Date</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($persons as $person)
                    <tr>
                        <td>{{ $person->id }}</td>
                        <td>{{ $person->firstname }}</td>
                        <td>{{ $person->lastname }}</td>
                        <td>{{ $person->mobile_phone }}</td>
                        <td>{{ $person->tel_no }}</td>
                        <td>{{ $person->birth_date }}</td>
                        <td>{{ $person->sex }}</td>
                        <td>{{ $person->address }}</td>
                        <td>{{ $person->email }}</td>
                        <td>{{ $person->website }}</td>
                        <td>{{ $person->username }}</td>
                        <td>{{ $person->password }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Back Button -->
        <br>
        <a href="{{ route('registration.create') }}" class="btn btn-primary" style="background-color: #273ea5; border: none;">Back</a>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
