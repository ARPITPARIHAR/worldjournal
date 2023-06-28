@extends('user.layouts.app')
@section('meta_title','Student Registeration')
@section('content')
@include('user.includes.nav')




<section id="hero">
    {{-- <div class="hero-container"></div> --}}
</section>
<div class="pro">
  <h1>
 PROMOTE EVENT </h1> <style>
  .pro{
      background-color: #c71370d8;
      color: white;
      text-align: center;
      -webkit-box-sizing: inherit;

  }



 
  
</style>                   																																								</h1>
</div>
<div class="tabs">
                        
                       
  <div class="tab-content">
    <div id="Standard" class="tab-pane active">
<ul class="nav nav-tabs">
  <form name="form_id" method="post">
  <input type="hidden" name="pack_posO" value="O"/>
    <li class="active"> <a data-toggle="tab" href="#Standard" onclick="document.form_id.submit();"><button type="button" class="btn btn-danger">standard</button> </a> </li>
   </form>
   <form name="form_pre" method="post">
  <input type="hidden" name="pack_posF" value="F"/> 
    <li><a data-toggle="tab" href="#Premium" onclick="document.form_pre.submit();"> <button type="button" class="btn btn-primary">Premium</button> </a></li>
   </form> 
  </ul>
  
</div>
  </div>
        <a data-toggle="modal" data-target="#myModal" onclick="focusInput();" class="login-window query_form" title="Send Your Feedback"><img id="feedbackimg" title="Send Your Feedback" style="text-align:left"src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/templates/images/right-feedback-icon.png"/></a> 
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="modal-title" id="myModalLabel" align="right" style="color:#f55a4e;">Send Your Feedback</h3>
                </div>
                
                <div class="modal-body" id="sucess_msg" style="display:none;">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <span id="sucess_info"></span>
                            </div>
                        </div>
                    </div>
                </div>		  
            <form action="" name="feedback" id="feedback" method="post">
                <div class="modal-body">
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-6">
                              <label>Your name *</label>
                              <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                              <span id="name_info"></span>
                            </div>
                            <div class="col-md-6">
                              <label>Your email address *</label>
                              <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                              <span id="email_info"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group">
                            <div class="col-md-12">
                              <label>Comment *</label>
                              <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;"></textarea>
                               <span id="comment_info"></span>
                            </div>
                          </div>
                        </div>
                </div>
                <div class="modal-footer" style="margin-top:-10px;">
                  <span id="Loading_info"></span> &nbsp; &nbsp;	
                  <button type="button" class="btn btn-default inverted" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" onclick="return ValidSendFeedbackForm(document.feedback);" data-loading-text="Loading...">Submit</button>
                </div>
            </form>
        
              </div>
            </div>
        </div>  
          		  		     
      <div class="site-showcase">
          {{-- <div class="parallax page-header"> --}}
                  <div class="container">
                    {{-- <div class="row"> --}}
                        
                   </div>
               </div>
          </div>
          </div>		        	  
          <div class="main" role="main">
              <div id="content" class="content full">
                  <div class="container">
                      {{-- <div class="page"> --}}
                      <div class="row">
                        <div class="colum">
                        <div class="pricing-table three-cols margin-0">
                                  <div class="pricing-column" style="margin-bottom:15px;">
                                    <h3 style="color:rgb(237, 45, 16);">Home Page Top Box Banner</h3>
                                    <div class="pricing-column-content">
                                                                   <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192291.jpg" alt="Home Page Top Box Banner" title="Home Page Top Box Banner" width="90%" height="250"/></p>
                                      <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                                      <input type="hidden" name="pack_id" value="2"/>
                                      <input type="hidden" name="pack_name" value="Home Page Top Box Banner"/>
                                      <input type="hidden" name="pack_position" value="O"/>
                                                                    <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                                                                    </form>
                                     </div>
                                  </div>
                                  
                                                              <div class="pricing-column" style="margin-bottom:15px;">
                                                                <h3 style="color:rgb(237, 45, 16);">Home Page Top Box Banner</h3>
                                    <div class="pricing-column-content">
                                                                   <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192346.jpg" alt="Home Page Left Box Banner" title="Home Page Left Box Banner" width="90%" height="250"/></p>
                                      <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                                      <input type="hidden" name="pack_id" value="4"/>
                                      <input type="hidden" name="pack_name" value="Home Page Left Box Banner"/>
                                      <input type="hidden" name="pack_position" value="O"/>
                                                                    <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                                                                    </form>
                                     </div>
                                  </div>
                                  
                                                              <div class="pricing-column" style="margin-bottom:15px;">
                                    <h3 style="color:rgb(237, 45, 16);">Home Page Big Size Banner</h3>
                                    <div class="pricing-column-content">
                                                                   <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192727.jpg" alt="Home Page Big Size Banner" title="Home Page Big Size Banner" width="90%" height="250"/></p>
                                      <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                                      <input type="hidden" name="pack_id" value="6"/>
                                      <input type="hidden" name="pack_name" value="Home Page Big Size Banner"/>
                                      <input type="hidden" name="pack_position" value="O"/>
                                                                    <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                                                                    </form>
                                     </div>
                                  </div>
                                  
                                                              <div class="pricing-column" style="margin-bottom:15px;">
                                    <h3 style="color:rgb(237, 45, 16);">Event List Highlight</h3>
                                    <div class="pricing-column-content">
                                                                   <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192790.jpg" alt="Event List Highlight" title="Event List Highlight" width="90%" height="250"/></p>
                                      <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                                      <input type="hidden" name="pack_id" value="7"/>
                                      <input type="hidden" name="pack_name" value="Event List Highlight"/>
                                      <input type="hidden" name="pack_position" value="O"/>
                                                                    <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                                                                    </form>
                                     </div>
                                  </div>
                                  
                                                              <div class="pricing-column" style="margin-bottom:15px;">
                                    <h3 style="color:rgb(237, 45, 16);">User Account Listing Right Side Banne</h3>
                                    <div class="pricing-column-content">
                                                                   <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192974.jpg" alt="User Account Listing Right Side Banner" title="User Account Listing Right Side Banner" width="90%" height="250"/></p>
                                      <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                                      <input type="hidden" name="pack_id" value="9"/>
                                      <input type="hidden" name="pack_name" value="User Account Listing Right Side Banner"/>
                                      <input type="hidden" name="pack_position" value="O"/>
                                                                    <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                                                                    </form>
                                     </div>
                                  </div>
                                  
                                                              
                                </div>
                          </div>
                          <div id="Premium" class="tab-pane">
                            <!--<h2>Promote Event</h2>-->
                                <div class="pricing-table three-cols margin-0">
                            <div class="pricing-column" style="margin-bottom:15px;">
                <h3 style="color:rgb(237, 45, 16);">Home Page Top Box Banner</h3>
                <div class="pricing-column-content">
                           <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192291.jpg" alt="Home Page Top Box Banner" title="Home Page Top Box Banner" width="90%" height="250"/></p>
                  <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                  <input type="hidden" name="pack_id" value="2"/>
                  <input type="hidden" name="pack_name" value="Home Page Top Box Banner"/>
                  <input type="hidden" name="pack_position" value="O"/>
                            <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                            </form>
                 </div>
              </div>
              
                        <div class="pricing-column" style="margin-bottom:15px;">
              <h3 style="color:rgb(237, 45, 16);">Home Page left Box Banner</h3>
                <div class="pricing-column-content">
                           <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192346.jpg" alt="Home Page Left Box Banner" title="Home Page Left Box Banner" width="90%" height="250"/></p>
                  <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                  <input type="hidden" name="pack_id" value="4"/>
                  <input type="hidden" name="pack_name" value="Home Page Left Box Banner"/>
                  <input type="hidden" name="pack_position" value="O"/>
                            <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                            </form>
                 </div>
              </div>
              
                        <div class="pricing-column" style="margin-bottom:15px;">
                <h3 style="color:rgb(237, 45, 16);">Home Page Big Size Banner</h3>
                <div class="pricing-column-content">
                           <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192727.jpg" alt="Home Page Big Size Banner" title="Home Page Big Size Banner" width="90%" height="250"/></p>
                  <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                  <input type="hidden" name="pack_id" value="6"/>
                  <input type="hidden" name="pack_name" value="Home Page Big Size Banner"/>
                  <input type="hidden" name="pack_position" value="O"/>
                            <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                            </form>
                 </div>
              </div>
              
                        <div class="pricing-column" style="margin-bottom:15px;">
                <h3 style="color:rgb(237, 45, 16);">Event List Highlight</h3>
                <div class="pricing-column-content">
                           <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192790.jpg" alt="Event List Highlight" title="Event List Highlight" width="90%" height="250"/></p>
                  <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                  <input type="hidden" name="pack_id" value="7"/>
                  <input type="hidden" name="pack_name" value="Event List Highlight"/>
                  <input type="hidden" name="pack_position" value="O"/>
                            <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                            </form>
                 </div>
              </div>
              
                        <div class="pricing-column" style="margin-bottom:15px;">
               <h3 style="color:rgb(237, 45, 16);">User Account Listing Right Side Banner</h3>
                <div class="pricing-column-content">
                           <p style="padding-top:8px; height:250px;"><img src="https://web.archive.org/web/20190319151439im_/http://www.worldjournalsalert.com/pack-img/1425192974.jpg" alt="User Account Listing Right Side Banner" title="User Account Listing Right Side Banner" width="90%" height="250"/></p>
                  <form name="oeder_form" action="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/order" method="post">
                  <input type="hidden" name="pack_id" value="9"/>
                  <input type="hidden" name="pack_name" value="User Account Listing Right Side Banner"/>
                  <input type="hidden" name="pack_position" value="O"/>
                            <a href="https://web.archive.org/web/20190319151439/http://www.worldjournalsalert.com/login" class="btn btn-primary">Sign up Now!</a>
                            </form>
                 </div>
              </div>
              
                      
            </div>
                          </div>
                        </div>
                      </div>
        </div>                  
        
        
        
                      </div>
                     </div> 
                  </div>
              </div>
          </div>
            
@include('user.includes.footer')
@endsection
@section('style')
    
@endsection
@section('script')
    
@endsection