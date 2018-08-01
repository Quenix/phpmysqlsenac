
    <?php  
        
    include_once("views/layout/header.php"); 

    if(isset($_GET['page'])){
        if(file_exists('views/'.$_GET['page'].'.php')){
            include_once('views/'.$_GET['page'].'.php'); 
        }else{
            include_once('views/404.php'); 
        }
    }else{
        include_once('views/404.php'); 
    }

    include_once("views/layout/footer.php"); 
    
    ?>



