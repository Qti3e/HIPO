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
session_start();
include_once("config.php");
include_once("classes/URL.php");
$url = (isset($_GET['url'])) ? $_GET['url'] : null;
new URL($url);
/**To do work:
 * Urls:
 *  /. (if user logined to the system show `contest` page if not show `home`)
 *  /login
 *  /register
 *  /forget
 *  /enter_forget
 *  /profile/[%user]
 *  /resentActivity/[%user]
 *  /change_pass
 *  /edit_profile
 *  /ranking
 *  /lastActivity
 *  /problem/[%problem_id]
 *  /input/[%problem_id]
 *  /send/[%problem_id]
 *  /news
 *  /API/[%commend]
 * API:
 *  send database as a json array
 * Classes:
 *  Database +
 *  view
 */