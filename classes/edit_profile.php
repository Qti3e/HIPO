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
class edit_profile extends view{
    public $need_login  = true;
    public function main($input)
    {
        $change_info    = isset($_POST['change_info'])  ? ($_POST['change_info']    == "true" ? true : false) : false;
        $edit_pass      = isset($_POST['edit_pass'])    ? ($_POST['edit_pass']      == "true" ? true : false) : false;
        if($change_info){
            $about      = $_POST['about'];
            $age        = $_POST['age'];
            $q = $this->db->obj->prepare("UPDATE `users` SET `des` = :about,`age` = :age WHERE `users`.`id` = :id;");
            $q->execute(array(
                ":id"       => $this->is_login(),
                ":about"    => $about,
                ":age"      => $age
            ));
            header("location:".main_url."edit_profile");
        }elseif($edit_pass){

        }else{
            $this->footer_js    = <<<'js'
var Script = function () {
    $().ready(function() {
        // validate signup form on keyup and submit
        $("#edit_pass").validate({
            rules: {
                'c-pwd': {
                    required: true,
                },
                'n-pwd': {
                    required: true,
                    minlength: 5
                },
                'rt-pwd': {
                    required: true,
                    minlength: 5,
                    equalTo: "#n-pwd"
                }
            },
            messages: {
                'c-pwd': {
                    required: "رمز عبور الزامی است",
                },
                'n-pwd': {
                    required: "رمز عبور الزامی است",
                    minlength: "رمز عبور حداقل باید دارای ۵ کاراکتر باشد"
                },
                'rt-pwd': {
                    required: "تکرار رمز عبور الزامی می باشد",
                    minlength: "رمز عبور حداقل باید دارای ۵ کاراکتر باشد",
                    equalTo: "رمز عبور و تکرار آن باید یکی باشند"
                }
            }
        });
    });
}();
js;
            ;
            $this->sideMenu[]   = ["ویرایش پروفایل","icon-edit","edit_profile"];
            $this->sideMenu[]   = ["پروفایل","icon-user","profile/{$this->user_id}"];
            $this->sideMenu[] = ["جدول رده بندی",'icon-sort-by-attributes','ranking'];
            $opens  = $this->contests["opens"];
            foreach($opens as $id){
                $open   = $this->contests["contests"][$id];
                $this->sideMenu[]   = [$open['name'],"icon-double-angle-left","contest/{$open['id']}"];
            }
        }
    }
}