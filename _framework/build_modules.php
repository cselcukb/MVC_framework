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
            $module_name= trim($module);
            generate_model($module_name);
            generate_controller($module_name);
            generate_view($module_name);
        }
        
function generate_controller($module_name){
    if(is_dir(dirname(__FILE__).'/../MVC/controller/'.$module_name)){
        echo 'MVC/controller/'.$module_name.' Folder exists';
        echo "\n";
        $module_filename= str_replace("-", "_", $module_name);
	$folderSeperatorPos= strpos($module_filename,"/");
	if($folderSeperatorPos > 1){
		$module_filename= substr($module_filename, $folderSeperatorPos+1);
	}
        if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/'.$module_filename.'Class.php')){
            echo 'MVC/controller/'.$module_name.'/'.$module_filename.'Class.php Controller File Exists';
            echo "\n";
        }else{
            $modulecontrollerfile= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/'.$module_filename.'Class.php', "w+");
            fputs($modulecontrollerfile, "<?php");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "include(dirname(__FILE__).'/../../model/".$module_name."/".$module_filename."Model.php');");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "class ".$module_filename."Class {");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "	public function preparePage(){");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "		global \$ProjectURL, \$ProjectImages, \$DealImages,\$_WEB_ROOT,\$_SUB_ROOT;");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "	include(dirname(__FILE__).'/../../view/templates/".$module_name."/".$module_filename."Template.php');");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "  ob_end_flush();");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "}");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "}");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "?>");
            fclose($modulecontrollerfile);
            echo 'MVC/controller/'.$module_name.'/'.$module_filename.'Class.php Created!';
            echo "\n";
        }
        if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes')){
            echo 'MVC/controller/'.$module_name.'/includes Folder Exists!';
            echo "\n";
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js')){
                echo 'MVC/controller/'.$module_name.'/includes/js File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/js File Created!';
            }
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css')){
                echo 'MVC/controller/'.$module_name.'/includes/css File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/css File Created!';
                echo "\n";
            }
        }else{
            mkdir(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes');
                echo 'MVC/controller/'.$module_name.'/includes Folder Created!';
                echo "\n";
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js')){
                echo 'MVC/controller/'.$module_name.'/includes/js File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/js File Created!';
            }
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css')){
                echo 'MVC/controller/'.$module_name.'/includes/css File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/css File Created!';
                echo "\n";
            }
        }
    }
    else{
        mkdir(dirname(__FILE__).'/../MVC/controller/'.$module_name);
        echo 'MVC/controller/'.$module_name.' Folder Created!';
        echo "\n";
        
        $module_filename= str_replace("-", "_", $module_name);
	$folderSeperatorPos= strpos($module_filename,"/");
	if($folderSeperatorPos > 1){
		$module_filename= substr($module_filename, $folderSeperatorPos+1);
	}
        if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/'.$module_filename.'Class.php')){
            echo 'MVC/controller/'.$module_name.'/'.$module_filename.'Class.php Controller File Exists';
            echo "\n";
        }else{
            $modulecontrollerfile= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/'.$module_filename.'Class.php', "w+");
            fputs($modulecontrollerfile, "<?php");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "include(dirname(__FILE__).'/../../model/".$module_name."/".$module_filename."Model.php');");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "class ".$module_filename."Class {");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "	public function preparePage(){");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "		global \$ProjectURL, \$ProjectImages, \$DealImages,\$_WEB_ROOT,\$_SUB_ROOT;");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "	include(dirname(__FILE__).'/../../view/templates/".$module_name."/".$module_filename."Template.php');");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "}");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "}");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "\n");
            fputs($modulecontrollerfile, "?>");
            fclose($modulecontrollerfile);
            echo 'MVC/controller/'.$module_name.'/'.$module_filename.'Class.php Created!';
            echo "\n";
        }
        if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes')){
            echo 'MVC/controller/'.$module_name.'/includes Folder Exists!';
            echo "\n";
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js')){
                echo 'MVC/controller/'.$module_name.'/includes/js File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/js File Created!';
                echo "\n";
            }
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css')){
                echo 'MVC/controller/'.$module_name.'/includes/css File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css', "w+");
                fclose();
                echo 'MVC/controller/'.$module_name.'/includes/css File Created!';
                echo "\n";
            }
        }else{
            mkdir(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes');
                echo 'MVC/controller/'.$module_name.'/includes Folder Created!';
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js')){
                echo 'MVC/controller/'.$module_name.'/includes/js File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/js', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/js File Created!';
                echo "\n";
            }
            if(file_exists(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css')){
                echo 'MVC/controller/'.$module_name.'/includes/css File Exists!';
                echo "\n";
            }else{
                $file= fopen(dirname(__FILE__).'/../MVC/controller/'.$module_name.'/includes/css', "w+");
                fclose($file);
                echo 'MVC/controller/'.$module_name.'/includes/css File Created!';
                echo "\n";
            }
        }
    }
}

function generate_view($module_name){
    
    if(is_dir(dirname(__FILE__).'/../MVC/view/templates/'.$module_name)){
        echo 'MVC/view/templates/'.$module_name.' Folder exists';
        echo "\n";
        $module_filename= str_replace("-", "_", $module_name);
	$folderSeperatorPos= strpos($module_filename,"/");
	if($folderSeperatorPos > 1){
		$module_filename= substr($module_filename, $folderSeperatorPos+1);
	}
        if(file_exists(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php')){
            echo 'MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php exists';
            echo "\n";
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php', "w+");
            fputs($moduleviewfile, "\n");
            fclose($moduleviewfile);
            echo 'MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php Created!';
            echo "\n";
        }
    }
    else{
        mkdir(dirname(__FILE__).'/../MVC/view/templates/'.$module_name);
        echo 'MVC/view/templates/'.$module_name.' Folder Created!';
        echo "\n";
        
        $module_filename= str_replace("-", "_", $module_name);
	$folderSeperatorPos= strpos($module_filename,"/");
	if($folderSeperatorPos > 1){
		$module_filename= substr($module_filename, $folderSeperatorPos+1);
	}
        if(file_exists(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php')){
            echo 'MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php exists';
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php', "w+");
            fputs($moduleviewfile, "\n");
            fclose($moduleviewfile);
            echo 'MVC/view/templates/'.$module_name.'/'.$module_filename.'Template.php Created!';
            echo "\n";
        }
    }
}
	

function generate_model($module_name){
    
    if(is_dir(dirname(__FILE__).'/../MVC/model/'.$module_name)){
        echo 'MVC/model/'.$module_name.' Folder exists';
        echo "\n";
        $module_filename= str_replace("-", "_", $module_name);
	$folderSeperatorPos= strpos($module_filename,"/");
	if($folderSeperatorPos > 1){
		$module_filename= substr($module_filename, $folderSeperatorPos+1);
	}
        if(file_exists(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php')){
            echo 'MVC/model/'.$module_name.'/'.$module_filename.'Model.php Model File Exists';
            echo "\n";
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php', "w+");
            fputs($moduleviewfile, "<?php");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "class ".$module_filename."Class(){");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "}");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "?>");
            fclose($moduleviewfile);
            echo 'MVC/model/'.$module_name.'/'.$module_filename.'Model.php Model File Created!';
            echo "\n";
        }
    }
    else{
        mkdir(dirname(__FILE__).'/../MVC/model/'.$module_name);
        echo 'MVC/model/'.$module_name.' Folder Created!';
        echo "\n";
        $module_filename= str_replace("-", "_", $module_name);
	$folderSeperatorPos= strpos($module_filename,"/");
	if($folderSeperatorPos > 1){
		$module_filename= substr($module_filename, $folderSeperatorPos+1);
	}
        if(file_exists(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php')){
            echo 'MVC/model/'.$module_name.'/'.$module_filename.'Model.php Model File Exists';
            echo "\n";
        }else{
            $moduleviewfile= fopen(dirname(__FILE__).'/../MVC/model/'.$module_name.'/'.$module_filename.'Model.php', "w+");
            fputs($moduleviewfile, "<?php");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "class ".$module_filename."Class(){");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "}");
            fputs($moduleviewfile, "\n");
            fputs($moduleviewfile, "?>");
            fclose($moduleviewfile);
            echo 'MVC/model/'.$module_name.'/'.$module_filename.'Model.php Model File Created!';
            echo "\n";
        }
    }
}
?>
