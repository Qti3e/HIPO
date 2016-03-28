<?php
/*****************************************************************************
 *         In the name of God the Most Beneficent the Most Merciful          *
 *___________________________________________________________________________*
 *   This program is free software: you can redistribute it and/or modify    *
 *   it under the terms of the GNU General Public License as published by    *
 *   the Free Software Foundation, either version 3 of the License, or       *
 *   (at your option) any later version.                                     *
 *___________________________________________________________________________*
 *   This program is distributed in the hope that it will be useful,         *
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of          *
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the           *
 *   GNU General Public License for more details.                            *
 *___________________________________________________________________________*
 *   You should have received a copy of the GNU General Public License       *
 *   along with this program.  If not, see <http://www.gnu.org/licenses/>.   *
 *___________________________________________________________________________*
 *                       Created by AliReza Ghadimi                          *
 *     <http://AliRezaGhadimi.ir>    LO-VE    <AliRezaGhadimy@Gmail.com>     *
 *****************************************************************************/

class URL {
    public function classLoader($class_name){
        $file = "classes/".$class_name.".php";
        if (file_exists($file)) {
            require_once($file);
            return true;
        } else {
            return false;
        }
    }
    public function __construct($url,$debug = false){
        spl_autoload_register(array($this,"classLoader"),true,true);
        if (!empty($url)){
            $c_Array    = explode("/",rtrim($url,"/"));
            $class      = $c_Array[0];
            $c_Array[0] = "";
            $input      = ltrim(implode("/",$c_Array),"/");
            $class      = strtolower($class);
            define("_class",$class);
            define("_input",$input);
            if (class_exists($class)){
                new $class($input);
            }else {
                header("location: ".main_url."notfound404");
            }
        }else{
            define("_class","home");
            define("_input","");
            new \home("");
        }
    }
}