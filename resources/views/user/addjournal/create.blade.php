@extends('user.layouts.app')
@section('meta_title',' Registeration')
@section('content')

@include('user.includes.nav')


<link rel="shortcut icon" type="image/x-icon" href="http://www.indexcopernicus.com/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

    <link rel="stylesheet" href="/css/ppanel/new/bootstrap.css" media="screen" />

    <script src="/js/plugins/number/number-polyfill.js"></script>

<div class="container">
   
            </div> 
        <div class="basic">
            @if (session('success'))
            <h4 class="success-message"> {{session('success')}}</h4>
        @elseif(session('error'))
            <h3 class="card-title test-info">{{session('error')}}</h3>
       
        @endif 
            <form action="{{route('user.add.store')}}"  method="post" id="registrationForms">
                @csrf
             
            

                <fieldset>
                    <h3 style="font-weight: 500">BASIC INFORMATION</h3>
                       
           
          
                     
                    <div class="form-group row">
                        <label for="email" class="col-lg-2 control-label">Email</label>

                        <div class="col-lg-10">
                            <input type="text" name="email" id="email" class="form-control" onkeypress="return noSpacesNumberKey(event)" placeholder="Email" value="" />

                            
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-lg-2 control-label">Password</label>

                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" />

                            
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password2" class="col-lg-2 control-label">Repeat password</label>

                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Password" />

                            
                        </div>
                    </div>
                </fieldset>

                <h3>CONTACT DETAILS</h3>
                <hr />

                <fieldset>

                    <div class="form-group row">
                        <label for="name" class="col-lg-2 control-label">Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="surname" class="col-lg-2 control-label">Surname</label>
                        <div class="col-lg-10">
                            <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname" value="" />
                            
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="address" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <input type="text" name="address" id="address" class="form-control" placeholder="Street and number flat/house" value="" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="postalCode" class="col-lg-2 control-label">Postal Code</label>
                        <div class="col-lg-10">
                            <input type="number" name="postalCode" id="postalCode" class="form-control" placeholder="Postal Code" value="" />
                            
                        </div>
                    </div>


                    
<div class="form-group row">
    <label for="city" class="col-lg-2 control-label">Country</label>
    <div class="col-lg-10">
        <input type="text" name="country" id="city" class="form-control" placeholder="Country" oninput="capitalizeInput(this)" />
    </div>
</div>

                    <div class="form-group row">
                        <label for="company" class="col-lg-2 control-label">Company</label>
                        <div class="col-lg-10">
                            <input type="text" name="company" id="company" class="form-control" placeholder="Company name" value="" />
                            
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="nip" class="col-lg-2 control-label">Publisher name</label>
                        <div class="col-lg-10">
                            <input type="text" name="publishername" id="nip" class="form-control" placeholder="publisher name" value="" />
                            
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nip" class="col-lg-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <input type="text" name="category" id="nip" class="form-control" placeholder="Category" oninput="capitalizeInput(this)" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-lg-2 control-label">Mobile nu</label>
                        <div class="col-lg-10">
                            <input type="text" name="mobilenu" id="phone" class="form-control" onkeypress="return isTelephoneNumberKey(event)" maxlength="20" placeholder="Mobile number" value="" />
                            
                        </div>
                    </div>

                </fieldset>

                <h3 style="font-weight: 500">Acceptations</h3>
                <hr />

                <fieldset>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox text-justify">
                                <label>
                                    <input class="" type="checkbox" required="true" />
                                    <span style="margin-left: 5px"><span>I agree to the processing of my personal data by Index Copernicus Sp. z o.o. at Kasprzaka Street 31A lok.184, Warsaw, for the purpose of the correct provision of a service by the teleinformatic system and the internet service on the basis of Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation) as well as, according to Privacy Policy used by Index Copernicus Sp.z o. o. Providing the personal data is voluntary. I am aware of having a possibility to access my personal data, change them and reporting to stop making use of them. </span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox text-justify">
                                <label>
                                    <input class="" type="checkbox" required="true" />
                                    <span style="margin-left: 5px"><span>I acknowledge rules and agree to their terms </span> (<a href="/files/Regulations of the ICI World of Journals.pdf" target="_blank"><span>Rules</span></a> i <a href="/files/Privacy policy of the ICI World of Journals.pdf" target="_blank"><span>Privacy policy</span></a>) </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox text-justify">
                                <label>
                                    <input class="" type="checkbox" required="false" />
                                    <span style="margin-left: 5px"><span>I agree to the processing of my personal data by Index Copernicus Sp. z o.o. at Kasprzaka Street 31A lok.184, Warsaw, to receive emails about special offers, new services or other information from Index Copernicus Sp. z o.o. and the collaborating subjects on the basis of Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 on the protection of natural persons with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (General Data Protection Regulation) and according to Privacy Policy used by Index Copernicus Sp.z o. o. Providing the personal data is voluntary. I am aware of having a possibility to access my personal data, change them and report to stop making use of them. I can undo this permission in conformity with the procedure determined in Privacy Policy.</span></span>
                                </label>
                            </div>
                        </div>
                    </div>


                </fieldset>

                <input type="hidden" name="url" id="url" value="" />
                <input type="hidden" name="redirect" id="redirect" value="" />

                <br /><br />

                <center>
                     <input type="submit" class="btn btn-primary" value="Registration" /></a>
                    <br />
                    <br>
                    <a href="/app/auth/login"><span style="color: white">Back to login screen </span></a>

                </center>


            </form>


        </div>
    
</div>

@include('user.includes.footer')
@endsection
@section('style')
    
@endsection
@section('script')
    
@endsection 

<style>
 .success-message {
    background-color: darkred;
    color: white;
    padding: 10px;
    margin-bottom: 20px;
    text-align: center;
    
}

.container{
    margin-top: 20px;
}
        
.basic{
    margin-top: 400px;
    background-color:darkslategray;
    display:block; margin-top:70px;
    border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
   border-bottom-left-radius: 15px;
   color: white;
   width: 1000px;
    margin-left: 250px;
}


input[type="text"]  {
  float: left;
  width: 730px;
}

input[type="password"]  {
  float: left;
  width: 730px;
}
input[type="number"]  {
  float: left;
  width: 730px;
}
label {
  
 text-align: center;
  

}
h3{
    text-align: center;
}
</style>
<script>
    function capitalizeInput(input) {
        var words = input.value.split(' ');
        for (var i = 0; i < words.length; i++) {
            words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
        }
        input.value = words.join(' ');
    }
</script>
