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
#header{
    background-color: #001180;
}
    .journal-title-container {
            font-family: 'Montserrat', sans-serif;
            font-size: 40px;
            font-weight: bold;
            color: #007BFF;
            padding: 10px;
            outline: none;
            position: relative;
            top: -80px;
        }
        .no-data-message {
    text-align: center;
    font-style: italic;
    color: #999;
    padding: 10px;
    font-size: 16px;
    height: 200px;
  
}
    </style>
</head>
<body>
 

    <table class="horizontal-table">
        <thead>
           
        </thead>
        <tbody>
            @if ($data->isEmpty())
            <tr>
                <div class="no-data-message">No data found </div>
            </tr>
        @else
            @foreach ($data as $key => $cfpdata)
        
           
            
                <div class="journal-title-container">
                    {{ $cfpdata->journal_title }}
                </div>
            
        </tr>
        <tr>
            <th>Submission Deadline</th>
            <td>{{ $cfpdata->submission_date }}</td>
        </tr>
        <tr>
            <th>Notification Due</th>
            <td>{{ $cfpdata->notification_date}}</td>
        </tr>
        <tr>
            <th>Final Version Due</th>
            <td>{{ $cfpdata->final_version }}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</body>
</html>
<br>
<br>
   <br><br>
@include('user.includes.footer')          
@endsection

