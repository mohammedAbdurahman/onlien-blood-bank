<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Patient</title>
        <!-- Bootsttrap CSS -->
        <link rel='stylesheet' href='css/bootstrap.css'/>
         <link rel='stylesheet' href='css/all.min.css'/>
        <link rel='stylesheet' href='css/style.css'/>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        
    </head>
    <body>
</style>
<body>
  <nav class="navbar  navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online <span>Blood Bank</span></a>
    </div>


  <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html">Home <span class="sr-only">(current)</span></a></li>
       <li><a href="blood bank.html">Blood Bank</a></li>
        <li><a href="donorhome.html">Donor</a></li>
       <li><a href="Patient.html">Patient</a></li>
       <li><a href="#">Report</a></li>
       <li><a href="#">About us</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 <section class="blood-bank">
   <div class="banner text-center ">
      <img src="images/header.jpg" alt="...">
      </div>
       <div class="line"></div>
       <div class="tiete text-center">
         <h1>Welcome to ONLINE <span>BLOOD BANK</span></h1>
       </div>

<div id="ctl00_ContentPlaceHolder1_UpdatePanel1">
            

            <!--Page Title-->
            
            <!--End Page Title-->



 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
            <script type="text/javascript">
                function ShowProgress() {
                    setTimeout(function () {
                        var modal = $('<div />');
                        modal.addClass("modal");
                        $('body').append(modal);
                        var loading = $(".loading");
                        loading.show();
                        var top = Math.max($(window).height() / 2 - loading[0].offsetHeight / 2, 0);
                        var left = Math.max($(window).width() / 2 - loading[0].offsetWidth / 2, 0);
                        loading.css({ top: top, left: left });
                    }, 200);
                }
                $('form').live("submit", function () {
                    ShowProgress();
                });
            </script>

            <br>

            <div class="container">
                <div class="row ">

                    <!--/row-->
                    <!-- Our Clients -->
                    <div class="col-md-12 ">
                        <!--Form Portlet-->
                        <div class="donation-form-outer outer-border">
                            <div class="form-portlet">
                                

                                <div class="clearfix">

                                     <h3>
                                            Find Blood banks of india</h3>
                                    
                                    <div class="form-group col-md-5 col-sm-5 ">
                                        
                                        <select name="ctl00$ContentPlaceHolder1$cboState" id="ctl00_ContentPlaceHolder1_cboState" class="form-control form-group-margin ">
    

<option value="">Select State</option><option value="5">Andhra Pradesh</option><option value="26">Arunachal Pradesh</option><option value="14">Assam</option><option value="3">Bihar</option><option value="31">Chandigarh (UT)</option><option value="17">Chhattisgarh</option><option value="32">DELHI (NCT)</option><option value="25">Goa</option><option value="10">Gujarat</option><option value="16">Haryana</option><option value="20">Himachal Pradesh</option><option value="115">Jammu and Kashmir</option><option value="13">Jharkhand</option><option value="9">Karnataka</option><option value="12">Kerala</option><option value="7">Madhya Pradesh</option><option value="2">Maharashtra</option><option value="23">Manipur</option><option value="22">Meghalaya</option><option value="27">Mizoram</option><option value="24">Nagaland</option><option value="11">Orissa</option><option value="4">Poschim Bongo</option><option value="15">Punjab</option><option value="8">Rajasthan</option><option value="215">Sikkim</option><option value="6">Tamil Nadu</option><option value="29">Telangana</option><option value="21">Tripura</option><option value="1">Uttar Pradesh</option><option value="19">Uttarakhand</option></select>
                                        <input type="hidden" name="ctl00$ContentPlaceHolder1$ccdState_ClientState" id="ctl00_ContentPlaceHolder1_ccdState_ClientState" value="5:::Andhra Pradesh">
                                    </div>
                                    <div class="form-group col-md-4 col-sm-4">
                                        
                                        <select name="ctl00$ContentPlaceHolder1$cboCity" id="ctl00_ContentPlaceHolder1_cboCity" class="form-control form-group-margin ">
    

<option value="">Select Dis</option><option value="00050000-0000-0000-0000-000000000001">Anantapur</option><option value="00050000-0000-0000-0000-000000000002">Chittoor</option><option value="00050000-0000-0000-0000-000000000003">East Godavari</option><option value="00050000-0000-0000-0000-000000000004">Guntur</option><option value="00050000-0000-0000-0000-000000000005">Krishna</option><option value="00050000-0000-0000-0000-000000000006">Kurnool</option><option value="00050000-0000-0000-0000-000000000007">Prakasam</option><option value="00050000-0000-0000-0000-000000000009">Sri Potti Sriramulu Nellore</option><option value="00050000-0000-0000-0000-000000000008">Srikakulam</option><option value="00050000-0000-0000-0000-000000000010">Visakhapatnam</option><option value="00050000-0000-0000-0000-000000000011">Vizianagaram</option><option value="00050000-0000-0000-0000-000000000012">West Godavari</option><option value="00050000-0000-0000-0000-000000000013">YSR District, Kadapa (Cuddapah)</option></select>
                                        <input type="hidden" name="ctl00$ContentPlaceHolder1$ccdCity_ClientState" id="ctl00_ContentPlaceHolder1_ccdCity_ClientState" value="00050000-0000-0000-0000-000000000001:::Anantapur">
                                    </div>


                                    <div class="form-group col-md-3 col-sm-3">
                                        <span id="ctl00_ContentPlaceHolder1_lblError"></span>
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnSave" value="Search Again" id="ctl00_ContentPlaceHolder1_btnSave" class="theme-btn btn-style-one  pull-right">
                                    </div>
                                </div>



                            </div>


                        </div>


                    </div>
                </div>
            </div>


            <br>










            <!--Recent Causes Section-->
            <section class="recent-causes-section">
        <div class="auto-container">

             
                    
<div class="default-cause-box col-md-12">
<div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="Government General Hospital Blood Bank"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>1. <a href="/page/Government-General-Hospital-Blood-Bank">Government General Hospital Blood Bank</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Ananthapur Address: Government General Hospital, Ananthapur   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515001
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> 9866695858, <strong><i class="fa fa-phone"></i> </strong> 08554 275024 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> bloodbankgghatp@gmail.com<br>
                                                 Blood Component Available: YES Service Time: 24x7 License: 50/ATP/AP/97/BB/R  Date License Obtained: 28.01.1997
                                                <br>
                                             <a href="/page/Government-General-Hospital-Blood-Bank">Read More</a>

                                            </div>
                                            
                                        </div>


<div class="post-meta clearfix">

<iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/Government-General-Hospital-Blood-Bank&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
<a href="whatsapp://send?text=http://bloodbanktoday.com/page/Government-General-Hospital-Blood-Bank" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="Indian Red Cross Society"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>2. <a href="/page/Indian-Red-Cross-Society">Indian Red Cross Society</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Ananthapur Address: Blood Bank Medical Officer,Blood Bank, Indian Red Cross Society, Anantpur   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515001
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> , <strong><i class="fa fa-phone"></i> </strong> 8554246344 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> ircsbloodbank.anantapur@gmail.com<br>
                                                 Blood Component Available: YES Service Time: 24x7 License:   Date License Obtained: 
                                                <br>
                                             <a href="/page/Indian-Red-Cross-Society">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/Indian-Red-Cross-Society&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/Indian-Red-Cross-Society" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="Indian Red Cross Society Blood Bank"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>3. <a href="/page/Indian-Red-Cross-Society-Blood-Bank">Indian Red Cross Society Blood Bank</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Hindupur Address: Government General Hospital Blood Bank, Hindupur, Ananthapur
   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515201
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> , <strong><i class="fa fa-phone"></i> </strong> 08556 225900 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> ircshup@gmail.com<br>
                                                 Blood Component Available: NO Service Time: 24x7 License: 01/ATP/AP/2011/BB      Date License Obtained: 07.04.2011
                                                <br>
                                             <a href="/page/Indian-Red-Cross-Society-Blood-Bank">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/Indian-Red-Cross-Society-Blood-Bank&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/Indian-Red-Cross-Society-Blood-Bank" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="Indian Red Cross Society Blood bank RCH -II KADIRI"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>4. <a href="/page/Indian-Red-Cross-Society-Blood-bank-RCH--II-KADIRI">Indian Red Cross Society Blood bank RCH -II KADIRI</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Kadiri Address: Ground Floor, APVVP (Government General Hospital) Area Hospital, Kadiri, Ananthapur
   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> 9989738689, <strong><i class="fa fa-phone"></i> </strong> 08494 221544 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> kadiriircs@gmail.com<br>
                                                 Blood Component Available: NO Service Time: 24x7 License: ATP/AP/2008/BB/G   Date License Obtained: 16.07.2008 
                                                <br>
                                             <a href="/page/Indian-Red-Cross-Society-Blood-bank-RCH--II-KADIRI">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/Indian-Red-Cross-Society-Blood-bank-RCH--II-KADIRI&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/Indian-Red-Cross-Society-Blood-bank-RCH--II-KADIRI" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="Indian Red Cross Society Blood Bank, District Branch"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>5. <a href="/page/Indian-Red-Cross-Society-Blood-Bank,-District-Branch">Indian Red Cross Society Blood Bank, District Branch</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Anantapur Address: Near JNTU Engeneering College, Sarada Nagar, Ananthapur.   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515002
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> 9441192365, <strong><i class="fa fa-phone"></i> </strong> 08554 246344 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> NA<br>
                                                 Blood Component Available: YES Service Time: 24x7 License: 13/ATP/AP/2005/BB/R  Date License Obtained: 22.11.2005
                                                <br>
                                             <a href="/page/Indian-Red-Cross-Society-Blood-Bank,-District-Branch">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/Indian-Red-Cross-Society-Blood-Bank,-District-Branch&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/Indian-Red-Cross-Society-Blood-Bank,-District-Branch" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="Rural Development Trust Hospital Blood Bank"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>6. <a href="/page/Rural-Development-Trust-Hospital-Blood-Bank">Rural Development Trust Hospital Blood Bank</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Bathalapalli Address: Kadiri Road, Bathalapalli, Ananthapur   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515661
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> 9493268861, <strong><i class="fa fa-phone"></i> </strong> 08559 244259 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> NA<br>
                                                 Blood Component Available: YES Service Time: 24x7 License: 13/AT/AP/2003/BB/R  Date License Obtained: 28.08.2003
                                                <br>
                                             <a href="/page/Rural-Development-Trust-Hospital-Blood-Bank">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/Rural-Development-Trust-Hospital-Blood-Bank&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/Rural-Development-Trust-Hospital-Blood-Bank" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="S.S.S.I.H.M.S. Blood Bank"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>7. <a href="/page/S.S.S.I.H.M.S.-Blood-Bank">S.S.S.I.H.M.S. Blood Bank</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Puttaparthy Address: Prasanthigram, Puttaparthy, Ananthapuramu   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515134
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> 9490360321, <strong><i class="fa fa-phone"></i> </strong> 08555 287900 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> saikiran_ptp@yahoo.co.in<br>
                                                 Blood Component Available:  Service Time: 24x7 License:   Date License Obtained: 
                                                <br>
                                             <a href="/page/S.S.S.I.H.M.S.-Blood-Bank">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/S.S.S.I.H.M.S.-Blood-Bank&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/S.S.S.I.H.M.S.-Blood-Bank" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                        <div class="default-cause-box col-md-12">
                            <div class="inner-box">
                                <div class="clearfix">
                                    <div class=" col-md-3 col-sm-4 col-xs-12">
                                        <br>
                                        <figure class="image-box"><a href="#"><img src="../../UploadData/blood-bank.jpg" alt="South Central Railway Hospital Blood Bank"></a></figure>
                                    </div>
                                    <div class="content-column col-md-8 col-sm-8 col-xs-12">
                                        <div class="lower-content">
                                            <h3>8. <a href="/page/South-Central-Railway-Hospital-Blood-Bank">South Central Railway Hospital Blood Bank</a></h3>
                                            <div class="text">
                                                 <i class="fa fa-map-marker"></i>  District : Anantapur,  State : Andhra Pradesh  <br>
                                                <i class="fa fa-flag"></i>  City : Guntakal Address: S.C. Railway Hospital, Guntakal, Ananthapuramu   <br>
                                                <i class="fa fa-certificate"></i> PinCode : 515801
                                               
                                                 <strong><i class="fa fa-mobile"></i> </strong> 9701374501, <strong><i class="fa fa-phone"></i> </strong> 08552 227166 <br>
                                                <strong><i class="fa fa-envelope"></i> </strong> NA<br>
                                                 Blood Component Available: NO Service Time: 24x7 License: 79/AT/AP/97/BB/G  Date License Obtained: 28.01.1997
                                                <br>
                                             <a href="/page/South-Central-Railway-Hospital-Blood-Bank">Read More</a>

                                            </div>
                                            
                                        </div>


                                         <div class="post-meta clearfix">

                                                             <iframe src="https://www.facebook.com/plugins/share_button.php?href=http://bloodbanktoday.com/page/South-Central-Railway-Hospital-Blood-Bank&amp;layout=button_count&amp;size=large&amp;mobile_iframe=false&amp;width=84&amp;height=28&amp;appId" width="110" height="28" style="border: none; overflow: hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
                                                    <a href="whatsapp://send?text=http://bloodbanktoday.com/page/South-Central-Railway-Hospital-Blood-Bank" data-action="share/whatsapp/share" class="whatsapp w3_whatsapp_btn w3_whatsapp_btn_large"><span class="fa fa-whatsapp"></span>&nbsp;Share</a>
                                             <br>
                                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


                
                


          
             <div class="row clearfix">
            
                   <div id="Pagination" class="Pagination">
                            <span id="ctl00_ContentPlaceHolder1_lvDataPager"><span>1</span>&nbsp;</span>
                        </div>


            <!-- Styled Pagination -->
           
                </div>


        </div>
    </section>

            <a id="ctl00_ContentPlaceHolder1_lnkError" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lnkError','')"></a>
            
            <div id="ctl00_ContentPlaceHolder1_pnlError" style="display: none; position: fixed; z-index: 100001; left: 503.5px; top: 180.5px;">
    
                <div style="min-width: 400px;">
                    <div class="panel panel-blue margin-bottom-40">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="fa fa-tasks"></i>Message
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="margin-bottom-20">
                                <label>
                                    Message :
                                </label>
                                <span id="ctl00_ContentPlaceHolder1_lblMessage" class="control-label"></span>
                                <br>
                                <br>
                                <div class="text-right">
                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnError" value=" Ok " id="ctl00_ContentPlaceHolder1_btnError" class="btn btn-raised  btn-primary">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
</div>

            <a id="ctl00_ContentPlaceHolder1_lnkForword" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lnkForword','')"></a>

            



            
            <div id="ctl00_ContentPlaceHolder1_pnlForwerdQuery" class="col-md-10 col-sm-6" style="display: none; position: fixed; z-index: 100001; left: 503.5px; top: 180.5px;">
    
                <div style="">
                    <div class="panel">
                        <div class="blood-heading">
                            <span class="panel-title">Mobile Number Verify </span>
                        </div>

                        <div class="panel-body">
                            <div class="row">

                                <div class="col-md-4">
                                    <label class="field-label">
                                        Name<span class="required">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtName" type="text" id="ctl00_ContentPlaceHolder1_txtName" class="form-control input-lg " placeholder="Your name ">

                                </div>
                                <div class="col-md-4">
                                    <label class="field-label">
                                        Mobile<span class="required">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtMobile" type="text" id="ctl00_ContentPlaceHolder1_txtMobile" class="form-control input-lg " placeholder="Your Mobile ">

                                </div>
                                <div class="col-md-4">
                                    <label class="field-label">
                                        Need For</label>
                                    <div class="form-group w-icon form-group-margin">
                                        <select name="ctl00$ContentPlaceHolder1$cboNeedType" id="ctl00_ContentPlaceHolder1_cboNeedType" class="form-control input-lg ">
        <option selected="selected" value="Urgent">Urgent</option>
        <option value="1 Hours">Within 1 Hours</option>
        <option value="2-5">2-5 Hours</option>
        <option value="24  Hours">Within 24 Hours</option>

    </select>

                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <div class="panel-footer text-right">
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$Button4" value="Save" id="ctl00_ContentPlaceHolder1_Button4" class="btn btn-primary">
                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnForCancel" value="Cancel" id="ctl00_ContentPlaceHolder1_btnForCancel" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
</div>



            <a id="ctl00_ContentPlaceHolder1_lnkOtp" href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$lnkOtp','')"></a>
            

            <div id="ctl00_ContentPlaceHolder1_pnlOtp" class="col-md-6" style="display: none; position: fixed; z-index: 100001; left: 503.5px; top: 180.5px;">
    
                <div style="">
                    <div class="panel ">
                        <div class="blood-heading">
                            <span class="panel-title">Mobile Number Verify </span>
                        </div>
                        <div class="panel-body">
                            <div style="color: #555;">

                                <div style="color: Red; float: right;">
                                    <span id="ctl00_ContentPlaceHolder1_lblOtp"></span>
                                </div>


                                <div class="form-group label-floating">


                                    <label class="field-label">
                                        Enter OTP Code<span class="required">*</span></label>
                                    <input name="ctl00$ContentPlaceHolder1$txtOtp" type="text" id="ctl00_ContentPlaceHolder1_txtOtp" class="form-control input-lg " placeholder="Enter OTP Code ">

                                </div>


                            </div>
                            <br>
                            <div class="panel-footer text-right">

                                <input type="submit" name="ctl00$ContentPlaceHolder1$Button1" value="Submit" id="ctl00_ContentPlaceHolder1_Button1" class="btn btn-raised  btn-primary">
                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnCancel" value="Cancel" id="ctl00_ContentPlaceHolder1_btnCancel" class="btn btn-raised  btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            
</div>



        <div id="ctl00_ContentPlaceHolder1_MpeMessager_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000; width: 1007px; height: 4149px;"></div><div id="ctl00_ContentPlaceHolder1_MPEForwerd_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000; width: 1007px; height: 4149px;"></div><div id="ctl00_ContentPlaceHolder1_MpeOtp_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000; width: 1007px; height: 4149px;"></div></div>
                <footer class="page-footer font-small stylish-color-dark pt-4">


  
 <div class="row">
  <div class="col-md-6">
   
   <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-2x fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-2x fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-2x fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-2x fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item ">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-2x fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  </div>
  <div class="col-md-6">
      <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>
</div>
  </div>

  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
     <script src="js/jquery.mn.js"></script>
    <script src="js/bootstrap.min.js"></script> 
  <script src="js/main.js"></script>


</body>
</html>