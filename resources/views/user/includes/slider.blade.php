 
 <div class="img-post">
     <img src="{{asset('user/img/46.jpg')}}" alt=''  width="1600" height="400">
     <div class="fixed">
           <form action="{{route('user.search')}}" method="get">
               
              <input class="resizedTextbox" placeholder="Search by an ISSN or a Title  or Publisher name" type="text" id="edit-keyword" name="query" value="" size="400" maxlength="400" /><button class="btn btn-primary" type="submit"style="margin-left:30px;">Search</button>

         </form> 
     </div>
</div>
  
    <style>
        .fixed{margin-right: 50px;
            position:absolute; top:50%; left:50%; transform:translate(-50%,-50%)
        }
    .img-post{
       
        display:block; margin-top:82px;
        position:relative; display:inline-block;
            }  
    .resizedTextbox {
       
        margin-left: 1px;
       
        width: 250px;
        border: 3px solid green;
        padding: 150px;
          position: sticky;
         }
         element.style {
}
input[type="text"], input[type="email"], input[type="search"], input[type="submit"], select {
    width: 80%;
    padding: 0.5rem;
    border: 1px solid #C2B1B1;
}
input, select, textarea {
    background-color:white;
    color:black;
    text-align: center;
    width: 600px;
}


         </style>