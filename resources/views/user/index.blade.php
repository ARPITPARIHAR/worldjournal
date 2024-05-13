@extends('user.layouts.app')
@section('meta_title', 'journal')
@include('user.includes.nav')

@section('content')

<div class="row-container" style="margin-top: 70px; margin-left: 20px;">
@foreach ($data as $key => $item)
    <div class="row">
        <div class="col-md-1 text-center image-container">
            <img src="{{ asset('Image/'.$item->image) }}" width="120px" height="80px" class="image-gap">
        </div>
        <div class="col-lg-8 col-md-6 text-left ici-info-box">
            <div class="info-container">
                <dl class="dl-horizontal xnomb" style="font-size: 13px;">
                    <dt class="ng-binding journal-title">Journal title:</dt>
                    <dd>{{ $item->journal_title }}</dd>
                    <dt class="ng-binding">ISSN:</dt>
                    <dd>{{ $item->issn }}</dd>
                    <dt class="ng-binding">DOI:</dt>
                    <dd>{{ $item->doi }}</dd>
                    <dt class="ng-binding">Website:</dt>
                    <dd>{{ $item->website }}</dd>
                    <dt class="ng-binding">Country:</dt>
                    <dd>{{ $item->country }}</dd>
                    <dt class="ng-binding">Publisher:</dt>
                    <dd>{{ $item->publication_language }}</dd>
                </dl>
                <form action="{{ route('bookmark.add') }}" method="post">
                    @csrf
                    <input type="hidden" name="journal_title" value="{{ $item->journal_title }}">
                    <input type="hidden" name="issn" value="{{ $item->issn }}">
                    <input type="hidden" name="doi" value="{{ $item->doi }}">
                    <input type="hidden" name="web" value="{{ $item->website }}">
                    <input type="hidden" name="count" value="{{ $item->country }}">
                    <input type="hidden" name="pul" value="{{ $item->publication_language }}">
                    <button type="submit" class="bookmark-btn btn btn-primary" style="font-size: 14px; float: right; border-radius:10px;background-color:red;">Bookmark</button>

                </form>
            </div>
        </div>
    </div>
@endforeach
</div>

<div class="col-lg-8 col-md-6 text-left ici-info-box">
  {{-- <div class="tab-container"> --}}
    <div class="tab-header">
      <button class="tab-button" data-tab="tab1">Description</button>
      <button class="tab-button" data-tab="tab2">Details</button>
      <button class="tab-button" data-tab="tab3">Scientific profile</button>
      <button class="tab-button" data-tab="tab4">Publisher</button>
    </div>
  
    <div class="tab-content">
      <div id="tab1" class="tab-pane">
        <!-- Content for Tab 1 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        @foreach ($data as $item)
        <dd>{{ $item->journal_description }}</dd>
        @endforeach
      </div>
    </div>
  
    <div class="tab-content">
      <div id="tab2" class="tab-pane">
        <table class="table table-bordered table-striped attractive-table">
          <thead>
            <tr>
              <th class="text-center">English title</th>
              <th class="text-center">Short title</th>
              <th class="text-center">Printed version</th>
              <th class="text-center">Electronic version</th>
              <th class="text-center">Publication frequency</th>
              <th class="text-center">Free full text</th>
              <th class="text-center">Journal character</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            @if (is_object($item))
            <tr>
              <td class="text-center">{{ $item->english_title }}</td>
              <td class="text-center">{{ $item->short_title }}</td>
              <td class="text-center">{{ $item->printed_version ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->electronic_version ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->published_frequency }}</td>
              <td class="text-center">{{ $item->free_full_texts ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->journal_character ? 'Yes' : 'No' }}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
    <div class="tab-content">
      <div id="tab3" class="tab-pane">
        <table class="table table-bordered table-striped attractive-table">
          <thead>
            <tr>
         
              <th class="text-center">Web of science category</th>
              <th class="text-center">Indexed In</th>
              <th class="text-center">Circulation</th>
              <th class="text-center">Journal Type</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            @if (is_object($item))
            <tr>
            
              <td class="text-center">{{ $item->webofscience }}</td>
              <td class="text-center">{{ $item->indexing ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->circulation ? 'Yes' : 'No' }}</td>
              <td class="text-center">{{ $item->circulation ? 'Yes' : 'No' }}</td>
            </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  
    <div id="tab4" class="tab-pane">
      <dl>
        @foreach ($data as $item)
        @if (is_object($item))
        <dt>Publication Language:</dt>
        <dd>{{ $item->publication_language }}</dd>
        @endif
        @endforeach
      </dl>
    </div>
  </div>

    @include('user.includes.footer')

  <style>
      #header {
  background-color: #001180!important;
     height: 60px!important;
}
#footer{
    background-color: black !important;
  
       }

.col-lg-4.col-md-6.footer-info h2 {
    font-size: 32px !important;
}

.fixed-top {
    background-color:black;
}
.navbar{
    margin-top: 15px;
    margin-left:80px;
     
}
   .row {
    display: flex;
    align-items: center; /* Vertically center align the items */
    margin-bottom: 20px; /* Add spacing between rows */
}

.image-container {
    margin-right: 10px; /* Add spacing between image and table data */
}
   
    .ind-cont{
      margin-top:100px;
    }
    /*.attractive-header {*/
    /*  font-family: "Your Desired Font", sans-serif;*/
    /*  color: lightblue; */
    /*}*/
  
    .table-responsive table {
      border-collapse: collapse;
    }
  
    .table-responsive th,
    .table-responsive td {
      border: none;
      padding: 5px;
    }
  
    .table-responsive th {
      text-align: right;
      width: 150px;
    }
  
    .table-responsive td {
      margin-top: -70px;
    }
  
    .table-responsive tr {
      margin-bottom: -160px;
    }
  
    .table-responsive .image-cell {
      display: grid;
      align-items: center;
      justify-content: flex-start;
      gap: 10px;
    }
  
    .table-responsive .image-cell img {
      max-width: 100%;
      height: auto;
    }
  
    .tab-pane {
      display: none;
      font-size:13px;
    }
    .table-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10px; /* Add spacing between rows */
}


.bookmark-container {
    margin-left:290px;
}

/* Style for the bookmark button */
.bookmark-btn {
    padding: 5px 10px;
    background-color: #336699;
    color: white;
    border: none;
    cursor: pointer;
}

  
    .attractive-table {
      border-collapse: collapse;
      width: 900px;
    }
  
    .attractive-table thead th {
      background-color: powderblue;
      padding: 10px;
      text-align: left;
      font-weight: bold;
      color: #333;
    }
  
    .attractive-table tbody td {
      padding: 10px;
    }
  
   
  
   /
    .tab-container {
      border: 1px solid #ddd;
      background-color: #FFF0F5;
      padding: 10px;
      font-size:13px;
       overflow-x: auto;
    }
  
    .tab-header {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }

  .tab-button {
    padding: 10px 20px;
    background-color: purple;
    border: none;
    border-radius: 50px;
    margin-right: 10px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    font-family: Arial, sans-serif;
    color: white;
    background: maroon;
    font-size: 13px;
  }

  .tab-button.active {
    background-color: purple;
    color: #333;
    background: darkkhaki;
  }
  body {
    display: flex;
    flex-direction: column;
    /* min-height: 100vh; */
  }

  .content-wrapper {
    flex: 1;
  }

.footer.h2 {
    font-family: "Montserrat", sans-serif !important;
    font-weight: 500 !important;
    margin: 0 !important;
    padding: 0 !important;
    font-size: 6rem !important; 
    display: block !important;
    margin-block-start: 0.83em !important;
    margin-block-end: 0.83em !important;
    margin-inline-start: 0px !important;
    margin-inline-end: 0px !important;
    font-weight: bold !important;
}



   
    .journal-title {
    color: blue;
    
  }
 
    .image-gap {
    margin-bottom:60px; 
  }
  .table-spacing {
    margin-bottom: 40px; 
  }



  @media (max-width: 767px) {

 .tab-content {
    overflow-x: auto;
  }

  .table {
    width: auto;
  }
   .tab-content::-webkit-scrollbar {
    width: 6px !important;
    background-color: black !important; 
  }

 
  }


  </style>
   
    @section('script')
    <script>
      const tabButtons = document.querySelectorAll('.tab-button');
      const tabPanes = document.querySelectorAll('.tab-pane');
    
      tabButtons.forEach(button => {
        button.addEventListener('click', () => {
          const tabId = button.getAttribute('data-tab');
          const tabPane = document.getElementById(tabId);
    
         
          tabPanes.forEach(pane => {
            if (pane === tabPane) {
              pane.style.display = 'block';
            } else {
              pane.style.display = 'none';
            }
          });
    
          
          tabButtons.forEach(btn => {
            if (btn === button) {
              btn.classList.add('active');
            } else {
              btn.classList.remove('active');
            }
          });
        });
      });
    </script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @if(session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{ session('success') }}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="clearSessionAndCloseModal()">Close</button>
                    </div>
                </div>
            </div>
        </div>
    
        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
    
            function clearSessionAndCloseModal() {
             
                @php session()->forget('success') @endphp;
                
                $('#successModal').modal('hide');
            }
        </script>
    @endif
  
   @endsection
