@extends('user.layouts.app')
@section('meta_title', 'login')
@include('user.includes.nav')
@section('content')
   
<br><br>
<br>
<div class="container mt-5">
    <h3 class="mb-4">Bookmarked Journals</h3>

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
        </table>
    </div>
    </div>
    @include('user.includes.footer')          

@endsection