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

class admin_contests extends admin_view{
    public function remove($id){
        $sql    =    "DELETE FROM `contests` WHERE `contests`.`id` = :id";
        $q      = $this->db->obj->prepare($sql);
        $q->execute(array(
            ":id"   =>  (int)$id
        ));


        $sql    =    "DELETE FROM `logs` WHERE `logs`.`contest` = :id";
        $q      = $this->db->obj->prepare($sql);
        $q->execute(array(
            ":id"   =>  (int)$id
        ));


        $sql    =    "DELETE FROM `questions` WHERE `questions`.`contests` = :id";
        $q      = $this->db->obj->prepare($sql);
        $q->execute(array(
            ":id"   =>  (int)$id
        ));
        header("location:".main_url."admin_index");
    }
    public function main($input)
    {
        if(isset($_GET['remove'])){
            $this->remove($_GET['remove']);
        }
        $this->assign   = [
            "count" => [
                "user"      => count($this->users['users']),
                "contest"   => count($this->contests['contests']),
                "question"  => count($this->problems['questions']),
                'log'       => count($this->logs['logs'])
            ],
            "dec"   => "لیست مسابقات"
        ];
    }
}