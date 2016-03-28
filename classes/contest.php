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

/**
 * Class contest
 */
class contest extends question_view{
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
            $this->_404 = true;
        }else{
            $input = (int)$input;
            if(in_array($input,$this->contests["opens"])){
                $this->contest = $input;
                $contest    = $this->contests["contests"][$input];
                $title      = $contest["name"];

                $true       = isset($this->logs["true"]["contests"][$input]) ? count($this->logs["true"]["contests"][$input]) : 0;
                $false      = isset($this->logs["false"]["contests"][$input]) ? count($this->logs["false"]["contests"][$input]) : 0;

                $total      = $true + $false;

                $true       = round(($true*100)/$total,1);
                $false      = round(($false*100)/$total,1);
                $js = "
Morris.Donut({
        element: 'hero-donut',
        data: [
          {label: 'صحیح', value: $true },
          {label: 'غلط', value: $false },
        ],
        colors: ['#a9d86e' , '#ff6c60'],
        formatter: function (y) { return y + '%' }
});
";
                $this->sideMenu[]   = ["ویرایش پروفایل","icon-edit","edit_profile"];
                $this->sideMenu[]   = ["پروفایل","icon-user","profile/{$this->user_id}"];

                $this->sideMenu[]   = ["جدول رده بندی","icon-sort-by-attributes","ranking/$input"];
                $this->sideMenu[]   = ["لیست سوالات","icon-list-alt","contest/$input"];
                foreach($contest["questions"] as $question){
                    $this->sideMenu[] = [$this->problems["questions"][$question]["title"],"icon-double-angle-left","question/$question"];
                }
                $this->footer_js = $js;
                $this->assign    = [
                    "dec"       => "لیست سوالات",
                    "questions" => $contest["questions"],
                    "page"      => "contest/$input"
                ];
            }else{
                $this->_404 = true;
            }
        }
    }
}