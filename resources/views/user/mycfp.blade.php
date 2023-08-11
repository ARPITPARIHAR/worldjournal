@extends('user.layouts.app')
@section('meta_title', 'login')
@include('user.includes.nav')
@section('content')
<br> <br> <br>
<br>
<br>
<br> <br>

<!DOCTYPE html>
<html>
<head>
    <title>Horizontal Table</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<style>
#header {
        height: 60px;
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
        display: flex;
        flex-direction: column;
    }

    .no-data-message {
        text-align: center;
        font-style: italic;
        color: #999;
        padding: 10px;
        font-size: 16px;
        height: 200px;
    }

    .description-cell {
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 14px;
        font-style: italic;
        word-break: break-word;
        max-width: auto;
        max-height: auto;
        overflow: auto;
        margin-top: 10px;
    }


.horizontal-table {
    width: auto;
    margin: 20px auto; /* Center horizontally */
    border-collapse: collapse;
    text-align: center;
}


    .horizontal-table th, .horizontal-table td {
        padding: 10px;
        text-align: center;
      
    }

    .horizontal-table th {
        background-color: #007BFF;
        font-weight: bold;
        font-family: "Montserrat", sans-serif;
        font-size: 16px;
        color: #fff;
        text-transform: uppercase;
    }

    .horizontal-table tr:nth-child(even) {
        background-color: #f6f6f6;
    }

    .horizontal-table tr:hover {
        background-color: #e6e6e6;
    }

</style>
<body>
    <table class="horizontal-table">
        <tbody>
            @if ($data->isEmpty())
                <tr>
                    <td colspan="2" class="no-data-message">No data found</td>
                </tr>
            @else
                @foreach ($data as $key => $cfpdata)
                    
                        <div class="journal-title-container">{{ $cfpdata->journal_title }}</td>
                  
                 
                    <tr>
                        <th>Submission Deadline</th>
                        <td>{{ $cfpdata->submission_date }}</td>
                    </tr>
                  
                    <tr>
                        <th>Notification Due</th>
                        <td>{{ $cfpdata->notification_date }}</td>
                    </tr>
                   
                    <tr>
                        <th>Final Version Due</th>
                        <td>{{ $cfpdata->final_version }}</td>
                    </tr>
                  
                    <tr>
                        <td colspan="2" class="description-cell">{{ $cfpdata->description }}</td>
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
