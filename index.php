<?php
    header('Content-type: text/html; charset=utf-8');
    session_start();  
    
    $rootDirectory = "/GitHub/Library";
    $setSessionname = 'testSession';
    $setpageTitle = 'Library Conntent';    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require "headContent.php"; ?>             
    </head>
    
    <body onload="checkWebBrowserType(); setBodyHeight()">
        
        <?php
            require 'header.php';
            require 'navigation.php';
        ?>
        
        <!-- setBodyHeight() calculates correct height only if wrapper vertical margin is 0! Keep it always 0. -->
        <section id="wrapper" class="wrapper">
            
            <article id="pageHolder">               
                <a class="mainTtile" href="subPageGenerator.php?sessionName=<?php echo $setSessionname; ?>&pageTitle=<?php echo $setpageTitle; ?>&ftpFolder=<?php echo $rootDirectory; ?>/Library" target="_parent">
                    <div class="firstArticleTitle-holder">                        
                        <h5 class="firstArticleTitle">
                            <i class="fas fa-list"></i>
                            Display Library Files and Folders
                        </h5>                          
                    </div>
                </a>
                
                <p class='description'>
                    An online dynamic library that loads the folder and file structure of the targeted 
                    Share Drive and publishes on the web site automatically. Also, automatically changes 
                    the web site content when the content in Share Drive is changed. If a new file or 
                    folder is added or deleted in the Share Drive, the changes automatically will be 
                    published on web site in the same structure as it is on Share Drive. Files posted 
                    can be viewed and downloaded from the site. This sample represents only a part from 
                    the original project which is used as a SharePoint to share the company documents 
                    internally over the web.
                </p>
            </article>
            
        </section>
        
        <?php require 'footer.php'; ?>      
               
    </body>
</html>