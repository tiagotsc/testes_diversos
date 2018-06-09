<?php

$msg = "##### SIM TV #####\n\nSenha N. 05\n\nAguarde o atendimento";
/*
$handle = printer_open('SIMBOTINFIMP01');
printer_set_option($handle, PRINTER_MODE, "TEXT"); 
printer_write($handle, $msg);
printer_close($handle);
*/

$handle = printer_open('SIMBOTINFIMP01');
printer_start_doc($handle, "My Document");
printer_start_page($handle);

$font = printer_create_font("Arial", 120, 48, 800, false, false, false, 0);
printer_select_font($handle, $font);
printer_draw_text($handle, "###### SIM TV ######", 10, 10);
printer_draw_text($handle, "SENHA N. 400", 10, 250);
printer_draw_text($handle, "AGUARDE O ATENDIMENTO", 10, 500);
printer_delete_font($font);

printer_end_page($handle);
printer_end_doc($handle);
printer_close($handle);
?>