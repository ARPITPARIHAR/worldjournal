@extends('user.layouts.app')
@section('meta_title', 'login')
@include('user.includes.nav')
@section('content')
<br>	<br>	<br>
<br>
<br>
<br>	<br>

<!DOCTYPE html>
<html>
<head>
    <title>Horizontal Table</title>
    <!DOCTYPE html>
<html>
<head>
    <title>Horizontal Table</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    
</head>

</html>

    <style>
        .horizontal-table {
            display: flex;
            flex-direction: row;
            justify-content: center;
            border-collapse: collapse;
            width: 100%;
        }

        .horizontal-table th, .horizontal-table td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .horizontal-table th {
            background-color: cornflowerblue;
            font-weight: bold;
            font-family: "Arial", sans-serif;
            font-size: 16px;
            color: #333;
            text-transform: uppercase;
        }

        .horizontal-table tr:nth-child(even) {
            background-color: #f6f6f6;
        }

        .horizontal-table tr:hover {
            background-color: #e6e6e6;
        }
    </style>
</head>
<body>
 

    <table class="horizontal-table">
        <thead>
           
        </thead>
        <tbody>
            
            <tr>
                <th>Submission Deadline</th>
                <td> </td>
            </tr>
            <tr>
                <th>Notification Due</th>
                <td></td>
            </tr>
            <tr>
                <th>Final Version Due</th>
                <td></td>
            </tr>
           
        </tbody>
    </table>
</body>
</html>
<br>
<br>
   
@include('user.includes.footer')          
@endsection

