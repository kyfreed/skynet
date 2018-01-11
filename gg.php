<?php
include_once 'classes/Sql.php';
Sql::auth(
	 /* server   */ 'skynet.kylefreed.com',
	 /* user     */ 'kyle_gg',
	 /* password */ '11101110ee',
	 /* db name  */ 'kyle_gg',
	 /* port     */ 3306
);
if($_SERVER["REQUEST_METHOD"] == "POST"){
    Sql::query("UPDATE gatsby_colors "
            .  "SET page_num = " . $_POST["page_num"]
            .  ", passage = " . $_POST["passage"]
            .  ", related_chars = " . $_POST["rel_chars"]
            .  ", con_com = " . $_POST["con_com"]);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="gg.php" method="POST">
            Page number:&nbsp;
            <input type="text" name="page_num">
            <br>
            Passage:&nbsp;
            <input type="text" name="passage">
            <br>
            Related characters:&nbsp;
            <input type="text" name="rel_chars">
            <br>
            Connotations and comments:&nbsp;
            <input type="text" name="con_com">
        </form>
        <?php
        
        ?>
    </body>
</html>
