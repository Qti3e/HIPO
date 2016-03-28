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
class input extends view{
    public $need_login = true;
    public function main($id){
        $this->display = false;
        if(empty($id)){
            $this->_404 = true;
        }else{
            $id = (int)$id;
            if(isset($this->problems["questions"][$id])){
                $problem    = $this->problems["questions"][$id];
                if(in_array($problem["contests"],$this->contests["opens"])){
                    if(isset($_SESSION["{$id}_input"])){
                        $__input    = $_SESSION["{$id}_input"];
                    }else{
                        ob_start();
                        include "codes/$id.i.php";
                        $__input = ob_get_contents();
                        ob_end_clean();
                        $__input = trim($__input);
                        ob_start();
                        $input = $__input;
                        include "codes/$id.o.php";
                        $output = ob_get_contents();
                        ob_end_clean();

                        $_SESSION["{$id}_input"]  = rtrim($__input);
                        $_SESSION["{$id}_output"] = rtrim($output);
                    }
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename=question-'.$id.'.in');
                    header('Content-Transfer-Encoding: binary');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                    header('Pragma: public');
                    echo $__input;
                }else{
                    $this->_404 = true;
                }
            }else{
                $this->_404 = true;
            }
        }
    }
}