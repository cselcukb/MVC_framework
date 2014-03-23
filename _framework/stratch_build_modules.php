<?php

	$file= fopen(dirname(__FILE__).'/../config/data/modules', "r");

	if(!$file){
		echo 'File doesn\'t exist';
	}else{
		while(!feof($file)){
			$module= fgets($file);
			generate_module($module);
		}
		fclose($file);
	}

        function generate_module($module){
            $module_name= trim($module_name);
//            generate_model($module_name);
            generate_controller($module_name);
//            generate_view($module_name);
        }
        
function generate_controller($module_name){
        mkdir(dirname(__FILE__).'/../MVC/controller/'.$module_name);
        $module_filename= str_replace("-", "_", $module_name);
        $modulefile= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/'.$module_filename.'Class.php', "w+");
}


function generate_view($module_name){
    
    if(is_dir(dirname(__FILE__).'/../MVC/view/templates/'.$module_name)){
        $module_filename= str_replace("-", "_", $module_name);
        if(file_exists(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php')){
            echo 'Template File Exists';
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php', "w+");
            fputs($moduleviewfile, "\n");
            fclose($moduleviewfile);
        }
    }
    else{
        mkdir(dirname(__FILE__).'/../MVC/view/templates/'.$module_name);
        $module_filename= str_replace("-", "_", $module_name);
        if(file_exists(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php')){
            echo 'Template File Exists';
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php', "w+");
            fputs($moduleviewfile, "\n");
            fclose($moduleviewfile);
        }
    }
}


function generate_model($module_name){
    
    if(is_dir(dirname(__FILE__).'/../MVC/model/'.$module_name)){
        $module_filename= str_replace("-", "_", $module_name);
        if(file_exists(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php')){
            echo 'Model File Exists';
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php', "w+");
            fputs($moduleviewfile, "\n");
            fclose($moduleviewfile);
        }
    }
    else{
        mkdir(dirname(__FILE__).'/../MVC/model/'.$module_name);
        $module_filename= str_replace("-", "_", $module_name);
        if(file_exists(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php')){
            echo 'Model File Exists';
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php', "w+");
            fputs($moduleviewfile, "\n");
            fclose($moduleviewfile);
        }
    }
}
	
?>
