<?php

 require 'connect.php';

 session_start();

if(!$_SESSION['id'])
{
header("Location:login_lit.php");
}

	
	
 ?>
	
 	

<!DOCTYPE html>
<html lang="en">
  <head>
   <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Liitle Soldiers School</title>

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/mycss.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
       
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/custom.css"> 
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container" >
	<!--header start-->
		<header class="row">
           
			
			<nav class ="navbar navbar-inverse navbar-default navbar-fixed-top role = "navigation">
			 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <div>
			
			<!--logo start-->
              <a  class="logo"><b><div class ="color">Little Soldiers School</div></b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php"><b>Logout</b></a></li>
            	</ul>
            </div>
			</div>
			</nav>

        </header>
		
    <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
			     
				  <li >
                      <a href="myhome.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Back to home</span>
                      </a>
                  </li>
                  <li class="sub-menu active">
                      <a href="main.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Message</span>
                      </a>
                   </li>
				   
				      <li class="sub-menu active">
                      <a href="testonmain.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Select New Class</span>
                      </a>
                   </li>


              </ul>
              <!-- sidebar menu end-->
			</div>
		</aside>
      <!--sidebar end-->	
	<!-- BASIC FORM ELELEMNTS -->
	<section id="main-content">
		<section class="wrapper">
			
				
			<div class="row mt">
		
		         
				       <div class="col-md-offfset-4">
					<div class="col-lg-12">
					          
								<form class="form-horizontal style-form" action ="testingmain.php"  method="POST">
									
                                       
										   
										   <div class="row login_box">
										   
	                                     
		                                  <div class="col-md-12" align="left">
                                    <div class="mfont"><div class="text-right">Event Message
									
			                        
                                         <?php

 
 
 	

         
           

	if( isset($_POST['contact']) && isset($_POST['what']) && isset($_POST['when']) && isset($_POST['where']) && isset($_POST['note']))
     {
		 
                      $contact = $_POST['contact'];
                      $what  =   $_POST['what'];
					  $when   =   $_POST['when'];
                      $where   =   $_POST['where'];
					  $note =   $_POST['note'];
					  
		
					  echo $contact;
					  
					  foreach($contact as $x)
					  {
					   echo $x;
					   }
					  
					  $full_message =" "." ".$what." "."Date:".$when." "." ".$where." "." ".$note;
					  
	                      
					  
			


              
                if (isset($_POST['send'])) //to insert data in a table 
		{
				  if(!empty($contact))   
		    {     
               if(!empty($contact) && !empty($what) && !empty( $when) && !empty($where))
			   
			   {
                    if($what !="Dear Parents:")
                    {  
						 /* place ur api here and enjoy */
						  $mobilenumbers =$contact;
                      $message = $full_message;
					$user="swap81099"; //your username
                    $password="86235184"; //your password
                    $senderid="SMSCountry"; //Your senderid
                    $messagetype="N"; //Type Of Your Message
                    $DReports="Y"; //Delivery Reports
                    $url="http://www.smscountry.com/SMSCwebservice_Bulk.aspx";
                    $message = urlencode($message);
					
					
                            
							$ch = curl_init();
                            if (!$ch){die("Couldn't initialize a cURL handle");}
                            $ret = curl_setopt($ch, CURLOPT_URL,$url);
                            curl_setopt ($ch, CURLOPT_POST, 1);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                            curl_setopt ($ch, CURLOPT_POSTFIELDS,
						    "User=$user&passwd=$password&mobilenumber=$mobilenumbers&message=$message&sid=$senderid&mtype=$messagetype&DR=$DReports");
                            $ret = curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            //If you are behind proxy then please uncomment below line and provide your proxy ip with port.
                            // $ret = curl_setopt($ch, CURLOPT_PROXY, "PROXY IP ADDRESS:PORT");
                            $curlresponse = curl_exec($ch); // execute
                            if(curl_errno($ch))
                            echo 'curl error : '. curl_error($ch);
                            if (empty($ret)) 
			    {
                      // some kind of an error happened
                         die(curl_error($ch));
                         curl_close($ch); // close cURL handler
                } 
				else 
				{
                          $info = curl_getinfo($ch);
                          curl_close($ch); // close cURL handler
                           //echo "";
						
                          
                          echo $curlresponse;
						  echo '<article class="col-md-offset-0 col-md-10"><div class="mfont"><div class="centered"><h4>Message Sent Succesfully</h4> </div></div></article>' ;
                         

                    } 
		
                  }
				  
				  else 
				  {
 echo '<article class="col-md-offset-0 col-md-10"><div class="mfont"><div class="centered"><h4>Warning::Nothing Typed in the What field.Please Type Something about Event</h4></div></div> </article>' ;
                   }
				  
                }
				else{
				  
	   
	   echo '<article class="col-md-offset-0 col-md-10"><div class="mfont"><div class="centered"><h4>Warning::Any Filed Left Empty. Please resend</h4></div></div> </article>' ;
                         
				
				}
				
		}
				
				else 
				{
			   echo '<article class="col-md-offset-0 col-md-10"><div class="mfont"><div class="centered"><h4>Warning::No contacts Selected Please resend</h4></div></div> </article>' ;
		
				}
			
			
			}
       

 }
 
 
 	
?>
</div>

									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									
									</div> </div>
                                             <div class="col-md-12">
		                               
                                       <div class="col-md-13 col-xs-12 login_control">
		
												<div class="form-group">
											<div class="col-sm-2">
												<label class="label-control"><h5>Contact Numbers</h5></label>
											</div>
											<div class="col-sm-10">
												<textarea class="form-control "  rows="3" name="contact"><?php 
													if(isset($_POST['class'])){
														$class=$_POST['class'];
														$query="select `contact` from soldiers where class='".$class."';";
														if(mysql_query($query)){
															$query_run=mysql_query($query);
															if(mysql_num_rows($query_run)==NULL){
																echo 'No contacts found';
															}
															else{
																$i=0;
																while($i<mysql_num_rows($query_run)){
																		$contacts=mysql_result($query_run,$i,'contact');
																		echo $contacts.", ";
																		$i=$i+1;
																}
															}
														}
													}
													
												?></textarea>
											</div>	
										</div>

                                        
											 
										   
                                                            <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"><h5>What</h5></label>
                                             <div class="col-sm-10">
                                             <input type="text" class="form-control round-form"  name ="what" rows = "2" value ="Dear Parents:">
                                           <span class="help-block">What is the event</span>
                                            </div>
                                           </div>
										   
										    <div class="form-group">
                                           <label class="col-sm-2 col-sm-2 control-label"><h5>Where</h5></label>
                                         <div class="col-sm-10">
                                        <input type="text" class="form-control round-form" name ="where" value="Venue:Little Soldiers campus">
                                         <span class="help-block">Venue/place of the event</span>
                                          </div>
                                             </div>
										  
										  <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label"><h5>When</h5></label>
                                          <div class="col-sm-3">
                                    <input name ="when" id="datepicker"   class="form-control round-form"/>
					
									        
                                             <span class="help-block">Date of the event</span>
                                               </div>
                                           </div>
										  	 


                             
							               <div class="form-group">
                                         <label class="col-sm-2 col-sm-2 control-label"><h5>Note:</h5></label>
                                         <div class="col-sm-10">  
                                        <input type="text" class="form-control round-form" name ="note" value="Note:none">
                                         <span class="help-block">Any notice related to event.This Filed is optional can be left empty</span><br>
                                        </div>
                                       

										   
		
									




										<div class="col-sm-offset-3">
										<input type="submit" class="btn btn-lg btn-info" name ="send" value="Send">
										<span class="col-md-offset-3">	<input type="reset" class="btn btn-lg btn-danger" name ="reset" value ="Clear"></span>
				
								
											

		                             </div>
                                     </div>
                                   
							  </form>
			                     </div>
					</div>
					<!-- col-lg-12--> 
             	
	
			<!-- /row -->
			</div>
			</div>
		</section>  
		<!--wrapper -->
	</section>   
	<!-- /MAIN CONTENT -->
	<!--main content end-->
   </section>

  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
