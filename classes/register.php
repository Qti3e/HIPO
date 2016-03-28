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
class register extends view{
    public $need_login = false;
    public $loadHeader = false;
    public $loadFooter = false;
    public function main($input)
    {
        if($this->is_login() !== false){
            header("location:".main_url);
            exit();
        }
        $this->assign = [
            "dec" => "عضویت"
        ];
        if(isset($_POST['username']) && isset($_POST['password']) && count($_POST) == 6){
            $firstname  = $_POST["firstname"];
            $lastname   = $_POST["lastname"];
            $age        = $_POST["age"];
            $email      = $_POST["email"];
            $username   = $_POST["username"];
            $password   = $_POST["password"];

            if(isset($this->users["username"][strtolower($username)])){
                $this->ajax = [
                    "code" => 400
                ];
            }else{
                $q = $this->db->obj->prepare("INSERT INTO
`users`(`fname`, `lname`, `username`, `email`, `score`, `age`, `password`, `active`)
VALUES (:fname,:lname,:username,:email,:score,:age,:password,:active)");
                $q->execute(array(
                    ":fname"=>$firstname,
                    ":lname"=>$lastname,
                    ":username"=>$username,
                    ":email"=>$email,
                    ":score"=>0,
                    ":age"=>$age,
                    ":password"=>md5($password),
                    ":active"=>1//TODO UNREAL ACTIVE
                ));
                $this->ajax = [
                    "code" => "OK"
                ];
            }
        }
    }
}