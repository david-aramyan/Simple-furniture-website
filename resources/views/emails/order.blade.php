<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
</head>
<body>
<p>Order from website</p>
<table>
    <thead>
    <tr>
        <th>Product</th>
        <th>Name</th>
        <th>Company</th>
        <th>Email</th>
        <th>Country</th>
        <th>Address</th>
        <th>City</th>
        <th>Zip</th>
        <th>Phone Number</th>
        <th>Comment</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $data['first_name']." ".$data['last_name'] }}</td>
        <td>{{ $data['company'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['country'] }}</td>
        <td>{{ $data['address'] }}</td>
        <td>{{ $data['city'] }}</td>
        <td>{{ $data['zipCode'] }}</td>
        <td>{{ $data['phone_number'] }}</td>
        <td>{{ $data['comment'] }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
