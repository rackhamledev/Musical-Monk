<?php

if(isset($_GET['page'])){
    $page= $_GET['page'];
            
    switch ($page) 						
    {
        
        case 'resultevent':
            include("view/backend/addevent.php");
        break;

        case 'planning':
            include("view/frontend/planning.php");
        break;
                
        case 'contact':
            include("view/frontend/contact.php");
        break;
                    
        case 'addproduct':
            include("view/frontend/addproduct.php");
        break;
                    
        case 'login':
            include("view/frontend/login.php");;
        break;
                    
        case 'research':
            include("view/frontend/research.php");
        break;
                
        case 'product':
            include("view/frontend/product.php");
        break;
                
        case 'addevent':
            include("view/frontend/addevent.php");
        break;
                
        case 'registration':
            include("view/frontend/registration.php");
        break;
                
        case 'account':
            include("view/frontend/account.php");
        break;
                
        default:
            include("view/frontend/home.php");
    }
}
else
{
    include("view/frontend/home.php");
}