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
         <span id="country_Info" ></span><select name="country" class="form-control input-lg margin-0 selectpicker" onchange="state_select_change(this.value);"><option value="" selected="selected">Please Select Country</option><option value="3">Afghanistan</option><option value="4">Albania</option><option value="5">Algeria</option><option value="6">American Samoa</option><option value="7">Andorra</option><option value="8">Angola</option><option value="9">Anguilla</option><option value="10">Antarctica</option><option value="11">Antigua and/or Barbuda</option><option value="12">Argentina</option><option value="13">Armenia</option><option value="14">Aruba</option><option value="15">Australia</option><option value="16">Austria</option><option value="17">Azerbaijan</option><option value="18">Bahamas</option><option value="19">Bahrain</option><option value="20">Bangladesh</option><option value="21">Barbados</option><option value="22">Belarus</option><option value="23">Belgium</option><option value="24">Belize</option><option value="25">Benin</option><option value="26">Bermuda</option><option value="27">Bhutan</option><option value="28">Bolivia</option><option value="29">Bosnia and Herzegovina</option><option value="30">Botswana</option><option value="31">Bouvet Island</option><option value="32">Brazil</option><option value="33">British lndian Ocean Territory</option><option value="34">Brunei Darussalam</option><option value="35">Bulgaria</option><option value="36">Burkina Faso</option><option value="37">Burundi</option><option value="38">Cambodia</option><option value="39">Cameroon</option><option value="2">Canada</option><option value="40">Cape Verde</option><option value="41">Cayman Islands</option><option value="42">Central African Republic</option><option value="43">Chad</option><option value="44">Chile</option><option value="45">China</option><option value="46">Christmas Island</option><option value="47">Cocos (Keeling) Islands</option><option value="48">Colombia</option><option value="49">Comoros</option><option value="50">Congo</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Croatia (Hrvatska)</option><option value="54">Cuba</option><option value="55">Cyprus</option><option value="56">Czech Republic</option><option value="57">Denmark</option><option value="58">Djibouti</option><option value="59">Dominica</option><option value="60">Dominican Republic</option><option value="61">East Timor</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="france">France</option><option value="74">France, Metropolitan</option><option value="75">French Guiana</option><option value="76">French Polynesia</option><option value="77">French Southern Territories</option><option value="78">Gabon</option><option value="79">Gambia</option><option value="80">Georgia</option><option value="81">Germany</option><option value="82">Ghana</option><option value="83">Gibraltar</option><option value="84">Greece</option><option value="85">Greenland</option><option value="86">Grenada</option><option value="87">Guadeloupe</option><option value="88">Guam</option><option value="89">Guatemala</option><option value="90">Guinea</option><option value="91">Guinea-Bissau</option><option value="92">Guyana</option><option value="93">Haiti</option><option value="94">Heard and Mc Donald Islands</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="101">Iran (Islamic Republic of)</option><option value="102">Iraq</option><option value="103">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="106">Ivory Coast</option><option value="107">Jamaica</option><option value="108">Japan</option><option value="109">Jordan</option><option value="110">Kazakhstan</option><option value="111">Kenya</option><option value="112">Kiribati</option><option value="113">Korea, Democratic People's Republic of</option><option value="114">Korea, Republic of</option><option value="115">Kosovo</option><option value="116">Kuwait</option><option value="117">Kyrgyzstan</option><option value="118">Lao People's Democratic Republic</option><option value="119">Latvia</option><option value="120">Lebanon</option><option value="121">Lesotho</option><option value="122">Liberia</option><option value="123">Libyan Arab Jamahiriya</option><option value="124">Liechtenstein</option><option value="125">Lithuania</option><option value="126">Luxembourg</option><option value="127">Macau</option><option value="128">Macedonia</option><option value="129">Madagascar</option><option value="130">Malawi</option><option value="131">Malaysia</option><option value="132">Maldives</option><option value="133">Mali</option><option value="134">Malta</option><option value="135">Marshall Islands</option><option value="136">Martinique</option><option value="137">Mauritania</option><option value="138">Mauritius</option><option value="139">Mayotte</option><option value="140">Mexico</option><option value="141">Micronesia, Federated States of</option><option value="142">Moldova, Republic of</option><option value="143">Monaco</option><option value="144">Mongolia</option><option value="145">Montenegro</option><option value="146">Montserrat</option><option value="147">Morocco</option><option value="148">Mozambique</option><option value="149">Myanmar</option><option value="150">Namibia</option><option value="151">Nauru</option><option value="152">Nepal</option><option value="153">Netherlands</option><option value="154">Netherlands Antilles</option><option value="155">New Caledonia</option><option value="156">New Zealand</option><option value="157">Nicaragua</option><option value="158">Niger</option><option value="159">Nigeria</option><option value="160">Niue</option><option value="161">Norfork Island</option><option value="162">Northern Mariana Islands</option><option value="163">Norway</option><option value="164">Oman</option><option value="165">Pakistan</option><option value="166">Palau</option><option value="167">Panama</option><option value="168">Papua New Guinea</option><option value="169">Paraguay</option><option value="170">Peru</option><option value="171">Philippines</option><option value="172">Pitcairn</option><option value="173">Poland</option><option value="174">Portugal</option><option value="175">Puerto Rico</option><option value="176">Qatar</option><option value="177">Reunion</option><option value="178">Romania</option><option value="179">Russian Federation</option><option value="180">Rwanda</option><option value="181">Saint Kitts and Nevis</option><option value="182">Saint Lucia</option><option value="183">Saint Vincent and the Grenadines</option><option value="184">Samoa</option><option value="185">San Marino</option><option value="186">Sao Tome and Principe</option><option value="187">Saudi Arabia</option><option value="188">Senegal</option><option value="189">Serbia</option><option value="190">Seychelles</option><option value="191">Sierra Leone</option><option value="192">Singapore</option><option value="193">Slovakia</option><option value="194">Slovenia</option><option value="195">Solomon Islands</option><option value="196">Somalia</option><option value="197">South Africa</option><option value="198">South Georgia South Sandwich Islands</option><option value="199">Spain</option><option value="200">Sri Lanka</option><option value="201">St. Helena</option><option value="202">St. Pierre and Miquelon</option><option value="203">Sudan</option><option value="204">Suriname</option><option value="205">Svalbarn and Jan Mayen Islands</option><option value="206">Swaziland</option><option value="207">Sweden</option><option value="208">Switzerland</option><option value="209">Syrian Arab Republic</option><option value="210">Taiwan</option><option value="211">Tajikistan</option><option value="212">Tanzania, United Republic of</option><option value="213">Thailand</option><option value="214">Togo</option><option value="215">Tokelau</option><option value="216">Tonga</option><option value="217">Trinidad and Tobago</option><option value="218">Tunisia</option><option value="219">Turkey</option><option value="220">Turkmenistan</option><option value="221">Turks and Caicos Islands</option><option value="222">Tuvalu</option><option value="223">Uganda</option><option value="224">Ukraine</option><option value="225">United Arab Emirates</option><option value="226">United Kingdom</option><option value="1">United States</option><option value="227">United States minor outlying islands</option><option value="228">Uruguay</option><option value="229">Uzbekistan</option><option value="230">Vanuatu</option><option value="231">Vatican City State</option><option value="232">Venezuela</option><option value="233">Vietnam</option><option value="234">Virgin Islands (British)</option><option value="235">Virgin Islands (U.S.)</option><option value="236">Wallis and Futuna Islands</option><option value="237">Western Sahara</option><option value="238">Yemen</option><option value="239">Yugoslavia</option><option value="240">Zaire</option><option value="241">Zambia</option><option value="242">Zimbabwe</option></select><br/><br/>
          
         <button style="margin-left: 80px" type="submit" class="btn btn-primary btn-block" > Search</button>
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
    margin-left: 5px;
    text-align: left;
    background-color: rgb(233, 239, 242);
    width: 280px;
    border: 2px solid #062cb6;
    padding: 10px;
    margin-bottom: 0px;
    border-radius: 15px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

.search {
    margin-left: 5px;
}

.search .widgettitle {
    color: black;
    font-size: 18px;
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