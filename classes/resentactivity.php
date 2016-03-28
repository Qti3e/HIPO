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
class resentactivity extends view{
    public $need_login  = true;
    public function main($user_id){
        if(array_key_exists($user_id,$this->users['users']) === false){
            $this->_404 = true;
        }else{
            $user   = $this->users['users'][$user_id];
            $data               = [["period"=> 0,"first"=> 0,"you" =>0]];
            foreach($this->contests["contests"] as $id=>$contest) {
                $ranks = $this->get_ranks($id);
                foreach ($ranks as $rank => $users) {
                    if(@in_array($user_id, $users)) {
                        $ranks['user_id'] = $rank;
                        break;
                    }
                }
                $data[] = ["period" => $id, "first" => $ranks["scores"][1], "you" => $ranks["scores"][$ranks['user_id']]];
            }
            $data = json_encode($data);
            $this->footer_js    ="
      Morris.Area({
        element: 'hero-area',
        data: $data,

          xkey: 'period',
          ykeys: ['first', 'you'],
          labels: ['نفر اول','{$user['fname']}'],
          hideHover: 'auto',
          lineWidth: 1,
          pointSize: 5,
          lineColors: ['#a9d86e', '#49e2d7'],
          fillOpacity: 0.5,
          smooth: true
      });
";
            $true       = $user['_true'];
            $false      = $user['_false'];

            $total      = $true + $false;

            $true       = $total == 0 ? 0 : round(($true*100)/$total,1);
            $false      = $total == 0 ? 0 : round(($false*100)/$total,1);
            $this->footer_js .= "
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
            $this->sideMenu[]   = ["پروفایل","icon-user","profile/$user_id"];
            $this->sideMenu[] = ["جدول رده بندی",'icon-sort-by-attributes','ranking'];
            $opens  = $this->contests["opens"];
            foreach($opens as $id){
                $open   = $this->contests["contests"][$id];
                $this->sideMenu[]   = [$open['name'],"icon-double-angle-left","contest/{$open['id']}"];
            }
            $this->assign = [
                "user_profile"  => $user,
                "dec"           => "آخرین فعالیت های  {$user['fname']}",
            ];
        }
    }
}