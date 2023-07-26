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
            border-collapse: collapse;
        }
.td{
    width: 125px;
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

        .horizontal-table td {
       padding:-20px;
        margin: 0;
    }

        .journal-title-container {
        font-size: 40px;
        font-weight: bold;
        color: #007BFF;
         padding: 10px; 
         outline: none;  
        position: relative; 
        top: -80px; 
    }
    </style>
</head>
<body>
 

    <table class="horizontal-table">
        <thead>
           
        </thead>
        <tbody>
            @foreach ($data as $key => $cfpdata)
        
           
            <td>
                <div class="journal-title-container">
                    {{ $cfpdata->journal_title }}
                </div>
            </td>
        </tr>
        <tr>
            <th>Submission Deadline</th>
            <td>{{ $cfpdata->submission_deadline }}</td>
        </tr>
        <tr>
            <th>Notification Due</th>
            <td>{{ $cfpdata->Notification_due }}</td>
        </tr>
        <tr>
            <th>Final Version Due</th>
            <td>{{ $cfpdata->Final_Version_due }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
<br>
<br>
   
@include('user.includes.footer')          
@endsection

