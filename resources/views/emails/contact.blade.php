<!DOCTYPE html>
<html>
<head>
    <title>Contact us message</title>
</head>
<body>
<p>Message from website contact us form</p>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $name }}</td>
        <td>{{ $company }}</td>
        <td>{{ $email }}</td>
        <td>{{ $text }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
