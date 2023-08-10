@extends('user.layouts.app')
@section('meta_title', 'login')
@include('user.includes.nav')
@section('content')
   
<br><br>
<br>
<div class="container mt-5">
    <h3 class="mb-4">Your Bookmarked Journals</h3>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Journal Title</th>
                    <th>ISSN</th>
                    <th>DOI</th>
                    <th>Website</th>
                    <th>Country</th>
                    <th>Publication Language</th>
                    <th>Bookmark Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $bookmark)
                <tr>
                    <td>{{ $bookmark->journal_title }}</td>
                    <td>{{ $bookmark->issn }}</td>
                    <td>{{ $bookmark->doi }}</td>
                    <td>{{ $bookmark->web }}</td>
                    <td>{{ $bookmark->count }}</td>
                    <td>{{ $bookmark->publication_language }}</td>
                    <td>{{ $bookmark->bookmark_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('user.includes.footer')
@endsection

<style>
    .navbar .dropdown ul {
        background-color: #001180 !important;
        font-size: 4px !important;
      }
      .navbar a{
          font-size:13px !important;
      }
          
            #header {
              height: 60px !important;
              z-index: 997;
              transition: all 0.5s;
              background: #001180;
              box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.3);
              background-color: #001180 !important;}
              li.dropdown ul {
        background-color: #001180;
      }
      </style>