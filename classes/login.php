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

class login extends view{
    public $loadHeader  = false;
    public $loadFooter  = false;

    public function main($input){
        if($this->is_login() !== false){
            header("Location:".main_url);
        }
        if(isset($_POST['username']) && isset($_POST['password'])){
            if(isset($this->users["username"][strtolower($_POST["username"])])){
                $user   = $this->users["users"][$this->users["username"][strtolower($_POST["username"])]];

                if($user['password'] === md5($_POST['password'])){
                    $_SESSION['user_id'] = $user["id"];
                    $this->ajax = [
                        "code" => "ok"
                    ];
                }else{
                    $this->ajax = [
                        "code" => "nok"
                    ];
                }
            }else{
                $this->ajax = [
                    "code" => "nok"
                ];
            }
        }
    }
}