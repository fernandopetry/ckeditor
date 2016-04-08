<?php

namespace Ckeditor;

/**
 *         
 * 
 *     Classe: CkeditorConfig
 *     @filesource CkeditorConfig.php
 *     @package Ckeditor
 *     @subpackage 
 *     @category
 *     @version v1.0
 *     @since 08/04/2016 13:34:18
 *     @copyright (cc) 2015, Fernando Petry
 *     
 *     @author Fernando Petry <fernandosouza2@gmail.com>                                                  
 */
class CkeditorConfig {
    
    /**
     * Path base completo do Ckeditor
     * @return string
     */
    public static function getPathCkeditor() {
        return dirname(dirname(__FILE__));
    }
    
    /**
     * Path completo do script do ckeditor
     * @return string
     */
    public static function getPathCkeditorJS() {
        return self::getPathCkeditor() . DIRECTORY_SEPARATOR . 'ckeditor.js';
    }
    
    /**
     * Isto gera o script que chama o CKeditor para substituir o textarea,
     * ele deve ser inserido no final da página
     */
    public static function getCkeditorReplace(){
        $script = <<<SC
   <script type="text/javascript">
      window.onload = function()  {
        CKEDITOR.replace();
      };
    </script>             
SC;
    }
}
