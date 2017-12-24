The Test Bundle
=======================

Enable bundle for any environment in config/bundles.php
    
    <?php

    return [
        Lotfi\Bundle\TestBundle\TestBundle::class => ['all' => true],
    ];


Add /forum in config/routes.php

    index:
        path: /forum
        controller: Lotfi\Bundle\TestBundle\Controller\ForumController::index
        
Let's start server
    
    php -S localhost:8000 -t public
    
Now Browse to http://localhost:8000/forum
