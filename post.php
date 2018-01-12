<?php
include_once 'init.php';
include_once 'Sql.php';
Sql::auth(
	 /* server   */ 'skynet.kylefreed.com',
	 /* user     */ 'kyle_gg',
	 /* password */ '11101110ee',
	 /* db name  */ 'kyle_gg',
	 /* port     */ 3306
);
Sql::query("INSERT INTO gatsby_colors (page_num, passage, related_chars, con_com) VALUES (\""
            . $_POST["page_num"]
            .  "\", \"" . $_POST["passage"]
            .  "\", \"" . $_POST["rel_chars"]
            .  "\", \"" . $_POST["con_com"] . "\");");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

