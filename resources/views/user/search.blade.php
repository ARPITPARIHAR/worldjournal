@extends('user.layouts.app')
@section('meta_title','Student Registeration')


@include('user.includes.nav')
@section('content')
<div class="search-container">
 <div class="search">
  <h3 class="widgettitle">Search CFP</h3>
  <form id="myform">
         <select name="cfptype" class="form-control input-lg selectpicker">
           <option value="">CFP Type</option>
             <option value="Journal">Journal</option>
             <option value="Conference">Conference</option>
       </select><br><br>
         <span id="category_id_Info"></span><select name="category" class="form-control input-lg margin-0 selectpicker">
          <option value="" selected="selected">Please Select Category</option>
          <option value="Computer Science">Computer Science</option>
          <option value="artificial intelligence">artificial intelligence</option>
          <option value="architecture">architecture</option>
          <option value="nursing">Nursing</option>
          
          <option value="pathology">Pathology</option>
          <option value="security">security</option><option value="software engineering">software engineering</option><option value="data mining">data mining</option><option value="engineering">engineering</option><option value="networking">networking</option><option value="machine learning">machine learning</option><option value="manufacturing">manufacturing</option><option value="finance">finance</option><option value="JOURNAL">JOURNAL</option><option value="Management">Management</option><option value="Interdisciplinary">Interdisciplinary</option><option value="Wireless">Wireless</option><option value="Pharmaceutical">Pharmaceutical</option><option value="Humanities And Social Science">Humanities And Social Science</option><option value="UGC Care Journals">UGC Care Journals</option></select><br/><br/>
          <span id="country_Info" ></span>
          <select name="country" class="form-control input-lg margin-0 selectpicker">
            <option value="" selected="selected">Please Select Country</option>
          <option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="33">British lndian Ocean Territory</option><option value="34">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="37">Burundi</option><option value="Cambodia">Cambodia</option><option value="39">Cameroon</option><option value="2">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="46">Christmas Island</option><option value="47">Cocos (Keeling) Islands</option><option value="48">Colombia</option><option value="49">Comoros</option><option value="Congo">Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Croatia (Hrvatska)</option><option value="cuba">Cuba</option><option value="55">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="58">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="61">East Timor</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="65">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="france">France</option><option value="France, Metropolitan">France, Metropolitan</option><option value="French Guiana">French Guiana</option><option value="76">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="90">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="94">Heard and Mc Donald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="97">Hungary</option><option value="Iceland">Iceland</option><option value="99">India</option><option value="Indonesia">Indonesia</option><option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="Ivory Coast">Ivory Coast</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kosovo">Kosovo</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="121">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="125">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="128">Macedonia</option><option value="129">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="139">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="144">Mongolia</option><option value="145">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="155">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfork Island">Norfork Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="172">Pitcairn</option><option value="173">Poland</option><option value="174">Portugal</option><option value="175">Puerto Rico</option><option value="176">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="181">Saint Kitts and Nevis</option><option value="182">Saint Lucia</option><option value="183">Saint Vincent and the Grenadines</option><option value="184">Samoa</option><option value="San Marino">San Marino</option><option value="186">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="189">Serbia</option><option value="190">Seychelles</option><option value="191">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="195">Solomon Islands
    
       <option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="5">Algeria</option><option value="6">American Samoa</option><option value="7">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and/or Barbuda">Antigua and/or Barbuda</option><option value="12">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="15">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option</option><option value="196">Somalia</option><option value="197">South Africa</option><option value="198">South Georgia South Sandwich Islands</option><option value="199">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="201">St. Helena</option><option value="202">St. Pierre and Miquelon</option><option value="203">Sudan</option><option value="204">Suriname</option><option value="205">Svalbarn and Jan Mayen Islands</option><option value="206">Swaziland</option><option value="207">Sweden</option><option value="208">Switzerland</option><option value="209">Syrian Arab Republic</option><option value="210">Taiwan</option><option value="211">Tajikistan</option><option value="212">Tanzania, United Republic of</option><option value="213">Thailand</option><option value="214">Togo</option><option value="215">Tokelau</option><option value="216">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="221">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="226">United Kingdom</option><option value="1">United States</option><option value="United States minor outlying islands">United States minor outlying islands</option><option value="Uruguay">Uruguay</option><option value="229">Uzbekistan</option><option value="230">Vanuatu</option><option value="Vatican City State">Vatican City State</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands (British)">Virgin Islands (British)</option><option value="235">Virgin Islands (U.S.)</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zaire">Zaire</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select><br/><br/>
          
         <button style="margin-left: 80px; background-color:black;" type="submit" class="btn btn-primary btn-block" > Search</button>
   </form>
 </div>
 </div>
<div class="table-container">
 <div class="push-up">
  <div class="table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th>S.N.</th>
                  <th>JOURNAL TITLE</th>
                  <th>ISSN</th>
                  <th>EISSN</th>
                  <th>PUBLISHER NAME & ADDRESS</th>
                  <th>LANGUAGE</th>
                  <th>CATEGORY</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($data as $key => $cfpdata)
              <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $cfpdata->journal_title }}</td>
                  <td>{{ $cfpdata->issn }}</td>
                  <td>{{ $cfpdata->eissn }}</td>
                  <td>{{ $cfpdata->publisher_name }}<br>{{ $cfpdata->publisher_address }}</td>
                  <td>{{ $cfpdata->language }}</td>
                  <td>{{ $cfpdata->category }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>
      <div class="pagination">
          {{ $data->appends(Request::except('page'))->links() }}
      </div>
  </div>
</div>
</div>
                                              
@include('user.includes.footer')
@endsection
@section('style')


<script>
    // Function to filter table based on form inputs
    function filterTable() {
        var cfptype = document.querySelector('select[name="cfptype"]').value;
        var category = document.querySelector('select[name="category"]').value;
        var country = document.querySelector('select[name="country"]').value;
    
        // Filter table data based on selected options
        var filteredData = tableData.filter(function(row) {
            var isCfptypeMatch = cfptype === '' || row.cfptype === cfptype;
            var isCategoryMatch = category === '' || row.category === category;
            var isCountryMatch = country === '' || extractCountryFromAddress(row.address) === country;
            return isCfptypeMatch && isCategoryMatch && isCountryMatch;
        });
    
        // Call function to update table with filtered data
        updateTable(filteredData);
    }
    
    // Function to extract country name from address
    function extractCountryFromAddress(address) {
        // Assuming that the country name is at the end of the address and preceded by a comma
        var addressParts = address.split(', ');
        return addressParts[addressParts.length - 1];
    }
    </script>
    



<style>

         #header {
  background-color: #001180!important;
     height: 60px!important;
} 
.table-container{
    width:auto;
    margin-bottom:-300px;
    height:900px;
   
}

  .table-responsive{
   
    margin-left:360px;
    position: absolute;
border-collapse: collapse; 
border-spacing: 0; 
 
border: 1px solid #ccc;
background-color:rgb(233, 239, 242);
border-top-left-radius: 15px;
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
border-bottom-left-radius: 15px;

float: right;
display: block;
 overflow-x: auto;


}
.table th {
    background-color: #008B8B; 
    color:white;    font-weight: bold;
    
    
}

t
td, th {
padding: 5px; 
}

.push-up {
position: absolute;
top: 90px;
width:1300px;
height:auto;
margin-bottom:50px;
}
th ,td{

font-weight: bold;
color:black;

}

table caption {
font-size: 1.5em;
margin-bottom: 10px;
}

table td:first-child {
font-weight: bold;
}
.search-container {
    margin-top: 90px;
   
    text-align: left;
   
    background-color: rgb(0 170 255);
    width: 280px;
  
    padding: 10px;
    margin-bottom: 0px;
    border-radius: 15px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}




/* Media query for smaller screens */
@media only screen and (max-width: 768px) {
    .search-container {
        margin-top: 20px; /* Adjust top margin for smaller screens */
        width: 100%; /* Set width to a higher percentage for smaller screens */
    }
}


.search {
    margin-left: 5px;
}

.search .widgettitle {
    color: white;
    font-size: 20px;
    margin: 0;
    padding: 10px 0;
}

.search form {
    margin-top: 20px;
}

.search select {
    width: 100%;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    margin-bottom: 10px;
}

.h3
{
  color:black;
}
.search select option {
  font-size: 14px;
}

.search select.selectpicker {
  background-color: #fff;
}

.search select.selectpicker:focus {
  outline: none;
  box-shadow: 0 0 5px #62a5fa;
}


h3{
text-align: center;
color:lightcoral;
}
.table-responsive {
border-collapse: collapse;
border-spacing: 5px; 
}

@media (max-width: 767px) {
    .search-container {
        margin-top: 90px; 
        margin-bottom: 20px; 
    }

    .table-container {
        width: 100%;
        margin-bottom: 1500px;  
        height: auto;
    }

    .table-responsive {
        width: 100%; 
        margin-left: 0;
        position: static; 
        border: 1px solid #ccc;
        background-color: rgb(233, 239, 242);
        border-radius: 15px;
        display: block; 
        overflow-x: auto;
    }

    .push-up {
        position: static; 
        width: 100%;
        height: auto;
        margin-bottom: 20px; 
    }

   
}

  
</style>

 
@endsection
@section('script')
    
@endsection