<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>S/N</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </thead>
        @php
        $number = 1;
        @endphp
        <tbody>
            @foreach ($users as $user)
            <tr>
               <td>{{$number++}}</td>
               <td>{{$user->first_name}}</td>
               <td>{{$user->last_name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->phone_number}}</td> 
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- FOR DROPDOWN -->
    <Select>
        @foreach ($users as $user)
        <option>{{$user->first_name}} {{$user->last_name}}</option>
        @endforeach
    </select>

</body>
</html>