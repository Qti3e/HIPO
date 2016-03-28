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
class judge extends view{
    public $need_login = true;
    public function main($input){
        $this->display = false;
        if(empty($input)){
            $this->_404 = true;
        }else{
            $input = (int)$input;
            if(isset($this->problems["questions"][$input])){
                $problem    = $this->problems["questions"][$input];
                if(in_array($problem["contests"],$this->contests["opens"])){
                    if(isset($_SESSION["{$input}_input"])){
                        $code   = implode("\n",file($_FILES['code']['tmp_name']));;
                        $output = implode("\n",file($_FILES['output']['tmp_name']));
                        $tof    = (trim($output) == $_SESSION["{$input}_output"]) ? 1 :0;
                        $q = $this->db->obj->prepare("INSERT INTO
`logs` (`id`, `date`, `q`, `user`, `tof`, `contest`, `input`, `output`, `real_output`, `code`)
VALUES (NULL, CURRENT_TIME(), :question, :user_id, :tof, :contest, :input, :output, :real_out,:code);");
                        $q->execute(array(
                            ":question" => $input,
                            ":user_id"  => $this->user_id,
                            ":tof"      => $tof,
                            ":contest"  => $problem["contests"],
                            ":input"    => $_SESSION["{$input}_input"],
                            ":output"   => $output,
                            ":real_out" => ($tof ? "" : $_SESSION["{$input}_output"]),
                            ":code"     => $code
                        ));
                        $ts = ($tof ? 100 : -10);
                        $this->db->query("UPDATE `users` SET `score` = `users`.`score`+{$ts} WHERE `users`.`id` = {$this->user_id}");
                        unset($_SESSION["{$input}_input"]);
                        unset($_SESSION["{$input}_output"]);
                        header("location:".main_url."question/$input");
                    }else{
                        header("location:".main_url."question/$input");
                    }
                }else{
                    $this->_404 = true;
                }
            }else{
                $this->_404 = true;
            }
        }
    }
}