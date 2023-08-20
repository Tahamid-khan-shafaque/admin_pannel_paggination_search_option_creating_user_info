<!-- data-display.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Display</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 500px;
            padding: 20px;
            background-color: #fefefe;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Display</h1>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Department</th>
                    <th>Blood Group</th>
                    <th>Gender</th>
                    <th>Skillset</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->number }}</td>
                        <td>{{ $data->department }}</td>
                        <td>{{ $data->bloodgroup }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->skillset }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>