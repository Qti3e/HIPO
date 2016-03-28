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
class question extends question_view{
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
            if(isset($this->problems["questions"][$input])){
                $problem    = $this->problems["questions"][$input];
                if(in_array($problem["contests"],$this->contests["opens"])){
                    $this->contest = (int)$problem["contests"];
                    $contest    = $this->contests["contests"][$problem["contests"]];
                    $this->sideMenu[]   = ["ویرایش پروفایل","icon-edit","edit_profile"];
                    $this->sideMenu[]   = ["پروفایل","icon-user","profile/{$this->user_id}"];
                    $this->sideMenu[]   = ["جدول رده بندی","icon-sort-by-attributes","ranking/{$problem['contests']}"];
                    $this->sideMenu[]   = ["لیست سوالات","icon-list-alt","contest/{$problem['contests']}"];
                    foreach($contest["questions"] as $question){
                        $this->sideMenu[] = [$this->problems["questions"][$question]["title"],"icon-double-angle-left","question/$question"];
                    }

                    $true       = $problem["count_true"];
                    $false      = $problem["count_false"];

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
                    $this->footer_js = $js;
                    $this->assign = [
                        "question"  => $problem,
                        "page"      => "question/$input",
                        "dec"       => $problem["title"]
                    ];
                }else{
                    $this->_404 = true;
                }
            }else{
                $this->_404 = true;
            }
        }
    }
}