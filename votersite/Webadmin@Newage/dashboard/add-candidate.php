<?php include("../session/session_check.php");  ?>

<?php include("../database/db.php"); 



 ?>



<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8">

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <title>Newage</title>

    <!-- favicon -->

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">

    <link rel="manifest" href="images/favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

    <!-- stylesheets -->

    <link rel="stylesheet" href="css/toastr.css">

    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.min.css">

    <link rel="stylesheet" href="css/text-editor.css">

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="css/abin.css">

    <!-- scripts -->

    <script src="js/jquery-2.1.1.min.js"></script>

    <script src="js/toastr.js"></script>

    <script src="js/home.js"></script>

    <script src="js/abin.js"></script>

    

    <script src="https://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

</head>



<body onload="checktoast(<?php echo $_SESSION['success_add_candi']; ?>);">

    

    <?php unset($_SESSION['success_add_candi']); ?>

    <!--[if lt IE 9]>

            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

    <![endif]-->

    <div class="main-section">

        <div class="main-sectionWrapdashboard">

            <?php include("leftmenu.inc"); ?>

            <div class="dashboard-content">

                <div class="dashboard-hdr">

                    <div class="menuToggle">

                        <span></span>

                        <span></span>

                        <span></span>

                    </div>

                    <div class="dashboard-hdrLeft">

                        <h5>Add Candidate</h5>

                    </div>

                    <?php include("hdr_right.php"); ?>

                </div>

                <!-- dashboard content -->

                <div class="dashboard-dynamicContent">

                    <div class="add-candidateFormWrap">

                        

                        <div id="current_default"><font color="green">

                        <?php 

                            if(isset($_SESSION['eventname'])&&isset($_SESSION['eventid'])) 

                            {

                                

                                echo "Default Event set as: ".$_SESSION['eventname'];

                            }

                            

                            ?>

                        </font>

                        </div>

                        </br>

                        

                            

                            <select id="selectevent" >

                              <option value="">Select an Event</option>

                              <?php 

                                

                                 $qry="select * from `event` where NOT `current_status`='EXPIRED'"; 

                                

                            

                            

                            $result=$conn->query($qry);

                            

                            

                             if ($result->num_rows>0) 

    

                                {

    

                                while($row = $result->fetch_assoc()) 

                                {

                                    

                                    $id=$row['id'];

                                    $event_id=$row['event_id'];

                                    $event_name=$row['event_name'];

                                 ?>

                                

                                <option value="<?php echo $event_id;  ?>"><?php echo $event_name;  ?></option>

                                <?php

                                }   

                                    

                                }

                                

                                ?>

                                    

                              

                                

                                

                            </select>

                            <input type="button" name="setdefault" class="btn-submit" id="setdefault" value="Set Event as default" title="Selected event will default for the current session, it will help full for multiple" onClick="setdefault_event(selectevent.value);">

                            

                            </br></br>

                            <form action="add-candidate_process.php" name="addCandidate" id="addCandidateForm" method="post" enctype="multipart/form-data" autocomplete="on">

                            <div class="na-login-formLabel">

                                

                                <div class="img-upload-class">

                                    <img src="images/person.jpg" alt="person" class="img-upload" id="upload-img" title="click to choose picture">

                                    <span> <i class="fa fa-edit"></i></span>

                                    <input type="file" name="image" id="image" accept="image/*" required>

                                </div>

                            </div>

                            <div class="na-login-formLabel">

                                <label for="name">Name</label>

                                <input type="text" name="name" id="name" placeholder="Name" required>

                            </div>

                            <div class="na-login-formLabel">

                                <label for="sector">Sector</label>

                                <input type="text" name="sector" id="sector" placeholder="Sector" required>

                            </div>

                            <div class="na-login-formLabel">

                                <textarea cols="80" id="editor1" name="editor1" rows="10" required ></textarea>



                                    <script>

                                        CKEDITOR.replace( 'editor1', {

                                            height: 260,

                                            

                                        } );

                                        

                                    </script>

                            </div>

								<div class="clearfix">
                            <button type="submit" id="submit" class="btn-submit">Add Candidate</button>

                    <button type="button" id="submit" class="btn-cancel" onClick="goto_index();">Cancel</button>
								</div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>



</html>