<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


      
        <head>
          
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="your-stylesheet.css">
          </head>
          <div class="tab-container">
            <div class="tab-header">
              <button class="tab-button" data-tab="tab1">Description</button>
              <button class="tab-button" data-tab="tab2">Details</button>
              <button class="tab-button" data-tab="tab3">Scientific profile</button>
              <button class="tab-button" data-tab="tab4">Publisher</button>
            </div>
            <!-- Add tab content here -->
          </div>
          
            <div class="tab-content">
              <div id="tab1" class="tab-pane ">
                <!-- Content for Tab 1 -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

                 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
                @foreach ($data as $key =>$data)
                 <dd>{{ $data->journal_description }}</dd></dt>
                 
                @endforeach
              </div>
              <head>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"></head>
                <style>
                  /* Custom styling for the table */
                  #tableContainer dl {
                    padding: 20px;
                    border: 1px solid #ccc;
                    background-color: #f8f9fa;
                  }
              
                  #tableContainer dt {
                    font-weight: bold;
                  }
              
                  #tableContainer dd {
                    margin-bottom: 10px;
                  }
                </style>
              </head>
             
              <table class="table">
                <thead>
                    <tr>
                        <th>English title</th>
                        <th>Short title</th>
                        <th>Printed version</th>
                        <th>Electronic version</th>
                        <th>Journal character</th>
                        <th>Publication frequency</th>
                        <th>First issue year</th>
                        <th>Free full text</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->english_title }}</td>
                            <td>{{ $item->short_title }}</td>
                            <td>{{ $item->printed_version }}</td>
                            <td>{{ $item->electronic_version }}</td>
                            <td>{{ $item->journal_character }}</td>
                            <td>{{ $item->publication_frequency }}</td>
                            <td>{{ $item->first_issue_year }}</td>
                            <td>{{ $item->free_full_text }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            
                
                   
                    
                     
             
              <div id="tab3" class="tab-pane">
               
                <table class="table">
                  <div class="table-responsive">
                    @if ($data)
                    <table class="table horizontal-table attractive-table">
                        <thead>
                          <tr>
                            <th scope="col">web of science category</th>
                            <th scope="col">indexed in</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{ $data->webofscience }}</td>
                            <td>{{ $data->indexing }}</td>
                          </tr>
                        </tbody>
                      </table>
                    @else
                      <p>No data available.</p>
                    @endif
            
          </div>
          <div id="tab4" class="tab-pane">
               
             
            
          </div>
          <style>
      
.attractive-header {
  font-family: "Your Desired Font", sans-serif;
  color: lightblue; /* Replace with your desired color code */
}

          

          
          .tab-pane {
            display: none;
          }
          
          .tab-pane.active {
            display: block;
          }

          .attractive-table {
  border-collapse: collapse;
  width:900px;
}

.attractive-table thead th {
  background-color: lightcoral;
  padding: 10px;
  text-align: left;
  font-weight: bold;
  color: #333;
}

.attractive-table tbody td {
  padding: 10px;
}

.attractive-table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.attractive-table tbody tr:hover {
  background-color: #e5e5e5;
}
/* Custom styling for the tab container */
.tab-container {
  border: 1px solid #ddd;
  background-color: #f5f5f5;
  padding: 10px;
}

/* Custom styling for the tab buttons */
.tab-button {
  padding: 10px 20px;
  background-color: #f8f9fa;
  border: none;
  border-radius: 5px;
  margin-right: 10px;
  font-weight: bold;
  cursor: pointer;
}

.tab-button.active {
  background-color: #e9ecef;
}

.tab-button:hover {
  background-color: #e9ecef;
  color: #333;
}



        </style>
          <script>
          const tabButtons = document.querySelectorAll('.tab-button');
          
          // Get all tab panes
          const tabPanes = document.querySelectorAll('.tab-pane');
          
          // Add click event listener to each tab button
          tabButtons.forEach(button => {
            button.addEventListener('click', () => {
              // Remove "active" class from all tab buttons
              tabButtons.forEach(btn => btn.classList.remove('active'));
          
              // Add "active" class to the clicked tab button
              button.classList.add('active');
          
              // Hide all tab panes
              tabPanes.forEach(pane => pane.style.display = 'none');
          
              // Show the corresponding tab pane
              const tabId = button.getAttribute('data-tab');
              const tabPane = document.getElementById(tabId);
              tabPane.style.display = 'block';
            });
          });
                    
          </script>
         