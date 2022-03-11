<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Import</title>
</head>
<body>
    <h2>Import Excel Data In Laravel</h2>
    @if($errors->any())
        <h5 style="color:red">Following errors exists in your excel file</h5>
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ol>
    @endif
    <form action="/import" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="person_file" accept=".xlsx,.xls,.csv" required>
        <br> <br>
        <input type="submit" value="Upload">
    </form>
    <table border="1" style="margin-top:2em;">
        <thead>
            <tr> 
                <th>S.N.</th>
                <th>Prefix</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @forelse ($persons as $person)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$person->person_prefix}}</td>
                    <td>{{$person->first_name}}</td>
                    <td>{{$person->last_name}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->status}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No Persons</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>