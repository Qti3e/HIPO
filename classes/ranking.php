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
class ranking extends view{
    /**
     * @var bool
     */
    public $need_login = true;

    /**
     * @param $input
     */
    public function main($input)
    {
        if(empty($input)){
            $this->body_style = "full_ranking.tpl";
            $opens  = $this->contests["opens"];
            $this->sideMenu[]   = ["ویرایش پروفایل","icon-edit","edit_profile"];
            $this->sideMenu[]   = ["پروفایل","icon-user","profile/{$this->user_id}"];
            $this->sideMenu[] = ["جدول رده بندی",'icon-sort-by-attributes','ranking'];
            foreach($opens as $id){
                $open   = $this->contests["contests"][$id];
                $this->sideMenu[]   = [$open['name'],"icon-double-angle-left","contest/{$open['id']}"];
            }
            $this->assign     = [
                "ranks"     => $this->users['users'],
                "dec"       => "جدول رده بندی"
            ];
        }else {
            $input = (int)$input;
            if(in_array($input,$this->contests["soon"])){
                $this->_404 = true;
            }else{
                $open  = in_array($input, $this->contests["opens"]);
                $ranks = $this->get_ranks($input);
                $contest    = $this->contests["contests"][$input];
                $this->sideMenu[]   = ["ویرایش پروفایل","icon-edit","edit_profile"];
                $this->sideMenu[]   = ["پروفایل","icon-user","profile/{$this->user_id}"];

                $this->sideMenu[]   = ["جدول رده بندی","icon-sort-by-attributes","ranking/$input"];
                $q                  = [];
                if($open){
                    $this->sideMenu[]   = ["لیست سوالات","icon-list-alt","contest/$input"];
                    foreach($contest["questions"] as $question){
                        $this->sideMenu[]   = [$this->problems["questions"][$question]["title"],"icon-double-angle-left","question/$question"];
                        $q[]                = $this->problems["questions"][$question]["id"];
                    }
                }else{
                    foreach($contest["questions"] as $question){
                        $q[]                = $this->problems["questions"][$question]["id"];
                    }
                }
                $scores     = $ranks["scores"];
                $questions  = $ranks["questions"];
                unset($ranks["c_user"]);
                unset($ranks["scores"]);
                unset($ranks["questions"]);
                $this->assign = [
                    "ranks"     => $ranks,
                    "open"      => $open,
                    "dec"       => "جدول رده بندی مسابقه «{$contest['name']}»",
                    "scores"    => $scores,
                    "page"      => "ranking/$input",
                    "questions" => $questions,
                    "q"         => $q
                ];
            }
        }
    }
}