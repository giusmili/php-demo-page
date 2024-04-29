<?php
    # variables
    include_once __DIR__."/controller/config.inc.php";
    # head
    require_once __DIR__."/template/header.inc.php"

?>

<body>
    <header>
        <h1>
            <span aria-hidden="true">&#127902; </span> <?= title ?>
       
        </h1>
    </header>
   <!-- main -->

    <?php
        
        require_once __DIR__."/template/main.inc.php"
    ?>


   <!-- footer -->
   <?php
        include_once __DIR__."/template/footer.inc.php";
   ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   

</body>
</html>