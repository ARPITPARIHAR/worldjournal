<style>
    .navbar {
      margin-bottom: 2px;
    }
  
    .img-post {
      position: relative;
      margin-top: -20px;
      margin-bottom: -20px;
    }
  
    .fixed {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 100%;
      text-align: center;
    }
  
    .search-container {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 20px;
    }
  
    .resizedTextbox {
      margin: 0;
      width: 100%;
      max-width: 400px;
      border: none;
      border-bottom: 2px solid #ccc;
      padding: 10px;
      box-sizing: border-box;
      text-align: center;
      transition: border-color 0.3s;
    }
  
    .resizedTextbox::placeholder {
      color: #aaa;
      text-align: center;
    }
  
    .btn-primary {
      margin-left: 10px;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
  
    .btn-primary:hover {
      background-color: #0069d9;
    }
  
    /* Responsive styles */
    @media (max-width: 768px) {
      .fixed {
        position: static;
        transform: none;
        width: auto;
        text-align: left;
      }
  
      .search-container {
        flex-direction: column;
        align-items: center;
        margin-top: 0;
      }
  
      .resizedTextbox {
        width: 100%;
        max-width: none;
      }
  
      .btn-primary {
        margin-top: 10px;
      }
    }
  </style>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Navbar content -->
    </div>
  </nav>
  
  <div class="img-post">
    <img src="{{ asset('user/img/114-hd.png') }}" alt="" width="100%" height="auto">
    <div class="fixed">
      <form action="{{ route('user.search') }}" method="get" class="search-container">
        <input class="resizedTextbox" placeholder="Search by an ISSN or a Title or Publisher name" type="text" id="edit-keyword" name="query" value="" size="30" maxlength="400">
        <button class="btn btn-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
  
  