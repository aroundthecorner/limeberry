<?php

/**
 * Sample code file using a master page to create a view.
 * This is a index page. You can delete this and create your own index page.
 * You have been redirected to this view from Index controller and IndexAction.
 */
use limeberry\Page;

$view = new Page();
$view->SetLayout("master.php");


$view->BeginContent();?>


 <style type="text/css">
            body{
                margin:0px;
                padding: 0px;
                background-color:#FFFFFF;
                font-family:'Segoe UI';
            }
            a{
                text-decoration: none;
                color: #535362;
                font-size: 18px;
                padding: 10px;
                margin: 25px;
                border-bottom: 2px solid transparent;
            }a:hover{
                color:#C62828;
                border-bottom: 2px solid #C62828;
            }
            .content{width: 100%; }
            .box{
                margin: 0 auto;
                width:95%;
                padding: 20px; 
            }
            .box img{ width: 300px; }
            .box .welcomeHeader{
                font-size: 48px;
                color:#EB3449;
                font-weight: lighter;
            }
            .box .welcomeHeader b{
                color:#F45C43;
            }
            
            .frameworkinfo
            {
                background-color: #FAFAFA;
                color:#313140;
                border-radius: 8px;
                border: 1px solid #BDBDBD;
                padding: 12px;
                font-size: large;
                
            }
        </style>

        
        <br><br><br>
        <div class="content">
            <div class="box">
                <center>
                    <img src="<?php echo $view->includeFile("img/limeberry.logo.png"); ?>"> <br>
                        <span class="welcomeHeader">Lime<b>berry</b></span>
                </center>
                <br>
                <p>
                    <center>
                        <a href="https://limeberry.github.io/docs/index.html"> Documentation </a> 
                        <a href="https://github.com/limeberry"> GitHub</a> 
                        <a href="https://limeberry.github.io/"> Home Page </a> 
                    </center>
                </p>
                <br>
                <p>
                    <center>
                        <div class="frameworkinfo">
                            <small>Hi, my name is Limeberry. I am a php mvc framework designed to speed up your coding process. Please do not forget I am always ready to help you with my documentation. Good luck with your new application :)</small>
                        </div>
                    </center>
                </p>
                
            </div>
            <br>
            <br>       
        </div>
        
        
        
        
<?php 
$view->EndContent(); 
?>

