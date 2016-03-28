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
class home extends view{
    public $need_login = true;
    public function main($in){
        $opens  = $this->contests["opens"];
        $this->sideMenu[]   = ["ویرایش پروفایل","icon-edit","edit_profile"];
        $this->sideMenu[]   = ["پروفایل","icon-user","profile/{$this->user_id}"];
        $this->sideMenu[] = ["جدول رده بندی",'icon-sort-by-attributes','ranking'];
        foreach($opens as $id){
            $open   = $this->contests["contests"][$id];
            $this->sideMenu[]   = [$open['name'],"icon-double-angle-left","contest/{$open['id']}"];
        }
        $data               = [["period"=> 0,"first"=> 0,"you" =>0]];
        foreach($this->contests["contests"] as $id=>$contest){
            $ranks  = $this->get_ranks($id);
            $data[] = ["period"=> $id,"first"=> $ranks["scores"][1],"you" =>$ranks["scores"][$ranks["c_user"]]];
        }
        $data = json_encode($data);
        $this->footer_js    ="
      Morris.Area({
        element: 'hero-area',
        data: $data,

          xkey: 'period',
          ykeys: ['first', 'you'],
          labels: ['نفر اول','شما'],
          hideHover: 'auto',
          lineWidth: 1,
          pointSize: 5,
          lineColors: ['#49e2d7', '#a9d86e'],
          fillOpacity: 0.2,
          smooth: false
      });
";
        $this->assign = [
            "dec"   => "مسابقات",
            "count" => [
                "user"      => isset($this->users['users']) ? count($this->users['users']) : 0,
                "contest"   => isset($this->contests['contests']) ? count($this->contests['contests']) : 0,
                "question"  => isset($this->problems['questions']) ? count($this->problems['questions']) : 0,
                'log'       => isset($this->logs['logs'])   ? count($this->logs['logs']) : 0
            ],
        ];
    }
}