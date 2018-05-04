<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export PDF</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
        </tr>
    </thead>
    <tbody>
       @foreach($contacts as $contact)
         <tr>
              <td>{{ $contact->id}}</td>
              <td>{{ $contact->name}}</td>
              <td>{{ $contact->email}}</td>
         </tr>
         @endforeach
         </tbody>
</table>
</body>
</html>