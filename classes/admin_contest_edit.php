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

class admin_contest_edit extends admin_view{
    public function index($in)
    {
        if(!isset($this->contests['contests'][$in])){
            $this->_404 = true;
            exit();
        }
        $contest            = $this->contests['contests'][$in];
        $time               = date_parse($contest['end']);
        $contest['end']     = str_pad((string)$time['year'],4,"0",STR_PAD_LEFT)."-".
                                str_pad((string)$time['month'],2,"0",STR_PAD_LEFT)."-".
                                str_pad((string)$time['day'],2,"0",STR_PAD_LEFT)."T".
                                str_pad((string)$time['hour'],2,"0",STR_PAD_LEFT).":".
                                str_pad((string)$time['minute'],2,"0",STR_PAD_LEFT)
        ;
        $time               = date_parse($contest['start']);
        $contest['start']   = str_pad((string)$time['year'],4,"0",STR_PAD_LEFT)."-".
                                str_pad((string)$time['month'],2,"0",STR_PAD_LEFT)."-".
                                str_pad((string)$time['day'],2,"0",STR_PAD_LEFT)."T".
                                str_pad((string)$time['hour'],2,"0",STR_PAD_LEFT).":".
                                str_pad((string)$time['minute'],2,"0",STR_PAD_LEFT)
        ;
        $this->sideMenu[]   =   ["ویرایش مسابقه","icon-pencil","admin_contest_edit/$in"];
        $this->assign       = [
            'page'      => "admin_contest_edit/$in",
            'dec'       => "ویرایش مسابقه",
            'contest'   => $contest
        ];
    }
}