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
 * Class view
 */
class view {

    /**
     * @type null|Smarty
     */
    private $smarty     = null;

    /**
     * @type database|null
     */
    public $db         = null;

    /**
     * @type array
     */
    public  $users      = array();

    /**
     * @type array
     */
    public  $logs       = array();

    /**
     * @type array
     */
    public $problems    = array();

    /**
     * @var array
     */
    public $contests    = array();

    /**
     * @type bool
     */
    public $need_login  = false;

    /**
     * @type bool
     */
    public $_404        = false;

    /**
     * @type string
     */
    public $footer_js  = "";

    /**
     * @type bool
     */
    public $loadHeader = true;

    /**
     * @type bool
     */
    public $loadFooter = true;

    /**
     * @type array
     */
    public $assign     = [];

    /**
     * @type bool
     */
    public $display    = true;

    /**
     * @var bool|array
     */
    public $ajax       = false;

    /**
     * @var bool|int
     */
    public $user_id    = false;

    /**
     * @var string
     */
    public $header_style    = "header.tpl";

    /**
     * @var string
     */
    public $body_style      = _class.".tpl";

    /**
     * @var string
     */
    public $footer_style    = "footer.tpl";

    /**
     * @var array
     */
    public $sideMenu   = [
        ["داشبورد","icon-dashboard","home"]
    ];

    /**
     * @var bool
     */
    public $autoAssign = true;

    /**
     * @param $input
     */
    public function __construct($input){
        $input = explode("/",$input);
        $input = $input[0];
        $this->db = new database();
        $this->is_login();
        if($this->autoAssign){
            $this->logs_assign();
            $this->users_assign();
            $this->problems_assign();
            $this->contests_assign();
        }

        if($this->need_login === true && $this->is_login() === false){
            header("location:".main_url."login");
            exit();
        }

        $this->main($input);

        if($this->_404 === true){
            header("HTTP/1.0 404 Not Found");
            header("location:".main_url."notfound404");
        }
    }

    /**
     * Display template if script run finished
     */
    public function __destruct(){
        if($this->_404 === true){
            header("HTTP/1.0 404 Not Found");
            header("location:".main_url."notfound404");
        }
        if($this->ajax === false){
            include_once "./smarty/Smarty.class.php";
            $this->smarty = new Smarty();
            if($this->autoAssign){
                $this->smarty->assign("logs",$this->logs);
                $this->smarty->assign("users",$this->users);
                $this->smarty->assign("problems",$this->problems);
                $this->smarty->assign("contests",$this->contests);
            }

            $base_assign    = $this->base_assign();
            $assign         = $this->assign + $this->assign();

            foreach($base_assign as $aK => $aV){
                $this->smarty->assign($aK,$aV);
            }

            foreach($assign as $aK => $aV){
                $this->smarty->assign($aK,$aV);
            }

            if($this->display === true){
                if($this->loadHeader === true){
                    $this->smarty->display("./style/{$this->header_style}");
                }

                $this->smarty->display("./style/{$this->body_style}");

                if($this->loadFooter === true){
                    $this->smarty->display("./style/{$this->footer_style}");
                }
            }
        }else{
            echo json_encode($this->ajax);
        }
    }

    private function logs_assign(){
        $logs = $this->db->get_table("logs","id");
        $return = array();
        foreach($logs as $id=>$log){
            $return["users"][(int)$log["user"]][]        = $id;
            $return["contests"][(int)$log["contest"]][]  = $id;
            $return["questions"][(int)$log["q"]][]       = $id;
            if((int)$log["tof"] === 1){
                $return["true"]["contests"][(int)$log["contest"]][] = $id;
                $return["true"]["questions"][(int)$log["q"]][]      = $id;
                $return["true"]["users"][(int)$log["user"]][]       = $id;
                if((int)$this->user_id == (int)$log["user"]){
                    $return["true"]["c_user"]["contests"][(int)$log["contest"]][]       = $id;
                    $return["true"]["c_user"]["questions"][(int)$log["q"]][]            = $id;
                }
            }else{
                $return["false"]["contests"][(int)$log["contest"]][] = $id;
                $return["false"]["questions"][(int)$log["q"]][]      = $id;
                $return["false"]["users"][(int)$log["user"]][]       = $id;
                if((int)$this->user_id == (int)$log["user"]){
                    $return["false"]["c_user"]["contests"][(int)$log["contest"]][]   = $id;
                    $return["false"]["c_user"]["questions"][(int)$log["q"]][]        = $id;
                }
            }
            $return["logs"][$id] = $log;
        }
        $this->logs = $return;
    }

    private function users_assign(){
        $users = $this->db->get_table("users","id","ORDER BY `users`.`score` DESC");
        $return = array();
        $bScore = 0;
        $r      = 0;
        foreach($users as $id=>$user){
            if((int)$user['score'] < $bScore | $r == 0){
                $r++;
                $bScore = $user['score'];
            }
            $return["users"][$id] = [
                    "avatar" => "http://www.gravatar.com/avatar/".md5(strtolower(trim($user['email'])))."?s=",
                    "rank"   => $r,
                    "log"    => (isset($this->logs["users"][$id]) ? $this->logs["users"][$id] : array()),
                    "_true"  => (isset($this->logs['true']['users'][$id]) ? count($this->logs['true']['users'][$id]) : 0),
                    "_false" => (isset($this->logs['false']['users'][$id]) ? count($this->logs['false']['users'][$id]) : 0)
                ] + $user;
            $return["ranks"][$r][]                              =   $id;
            $return["email"][strtolower($user['email'])]        =   $id;
            $return["username"][strtolower($user['username'])]  =   $id;
        }
        $this->users = $return;
    }

    private function problems_assign(){
        $questions = $this->db->get_table("questions","id");
        $return    = array();
        foreach($questions as $id=>$question){
            $return["questions"][$id] = [
                    "count_true"=>(isset($this->logs["true"]["questions"][(int)$id]) ? count($this->logs["true"]["questions"][(int)$id]) : 0),
                    "count_false"=>(isset($this->logs["false"]["questions"][(int)$id]) ? count($this->logs["false"]["questions"][(int)$id]) : 0),
                    "c_user_count_true" =>(isset($this->logs["true"]["c_user"]["questions"][(int)$id]) ? count($this->logs["true"]["c_user"]["questions"][(int)$id]) : 0),
                    "c_user_count_false"=>(isset($this->logs["false"]["c_user"]["questions"][(int)$id]) ? count($this->logs["false"]["c_user"]["questions"][(int)$id]) : 0)
                ]+$question;
            $return["contests"][(int)$question["contests"]][]  = (int)$id;
            if(isset($return["levels"][(int)$question["contests"]])){
                $return["levels"][(int)$question["contests"]] += (int)$question["level"];
                $return["levels"][(int)$question["contests"]] /= 2;
            }else{
                $return["levels"][(int)$question["contests"]] = (int)$question["level"];
            }
        }
        $this->problems = $return;
    }

    private function contests_assign(){
        $return     = array(
            "finished"  => array(),
            "soon"      => array(),
            "opens"     => array(),
            "contests"  => array()
        );
        $today      = date("Y-m-d H-i-s");

        $finished_contests   = $this->db->get_table("contests","id","WHERE `end` < '$today'");
        foreach($finished_contests as $id=>$contest){
            $return["finished"][]       = $id;
            $return["contests"][$id]    = [
                    "questions" => (isset($this->problems["contests"][$id]) ? $this->problems["contests"][$id]  : []),
                    "level"     => (isset($this->problems["levels"][$id])   ? $this->problems["levels"][$id]    : 0)
                ]+$contest;
        }
        $open_contests   = $this->db->get_table("contests","id","WHERE `start` <= '$today' AND `end` >= '$today'");
        foreach($open_contests as $id=>$contest){
            $return["opens"][]          = $id;
            $return["contests"][$id]    = [
                    "questions" => (isset($this->problems["contests"][$id]) ? $this->problems["contests"][$id]  : []),
                    "level"     => (isset($this->problems["levels"][$id])   ? $this->problems["levels"][$id]    : 0)
                ]+$contest;
        }
        $soon_contests   = $this->db->get_table("contests","id","WHERE `start` > '$today'");
        foreach($soon_contests as $id=>$contest){
            $return["soon"][]           = $id;
            $return["contests"][$id]    = [
                    "questions" => (isset($this->problems["contests"][$id]) ? $this->problems["contests"][$id]  : []),
                    "level"     => (isset($this->problems["levels"][$id])   ? $this->problems["levels"][$id]    : 0)
                ]+$contest;
        }
        $this->contests = $return;
    }

    /**
     * @return array
     */
    private function base_assign(){
        $is_login  = false;
        $user      = [];
        $_is_login = $this->is_login();
        if(!$_is_login == false){
            $is_login = true;
            $user = $this->users["users"][$_is_login];
        }
        return [
            "is_login"      => $is_login,
            "c_user"          => $user,
            "main_url"      => main_url,
            "base"          => main_url."style/",
            "title"         => title,
            "footer_js"     => $this->footer_js,
            "page"          => _class,
            "dec"           => "",
            "sideMenu"      => $this->sideMenu,
            "debug"         => false
        ];
    }


    /**
     * @return bool
     */
    public function is_login(){
        if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            return $_SESSION['user_id'];
        }else{
            return false;
        }
    }

    public function get_ranks($contest,$p = "WHERE `contest`="){
        if(file_exists("ranks/$contest.log")){
            $ranks  = json_decode(file_get_contents("ranks/$contest.log"),true);
            foreach($ranks as $rank=>$users){
                if(@in_array($this->user_id,$users)){
                    $ranks['c_user']    = $rank;
                    break;
                }
            }
        }else{
            $logs       = $this->db->get_table("logs","id"," $p$contest");
            $users      = array();
            $questions  = [];
            foreach($logs as $id=>$log){
                $s  = ((int)$log["tof"] == 0) ? -10 : 100;
                $ua = (int)$log["user"];
                if(isset($users[$ua])){
                    $users[$ua] += $s;
                }else{
                    $users[$ua] = $s;
                }
                if((int)$log["tof"] == 1){
                    if(isset($questions[$ua][$log['q']]["_true"])){
                        $questions[$ua][$log['q']]["_true"]++;
                    }else{
                        $questions[$ua][$log['q']]["_true"]  = 1;
                    }
                }else{
                    if(isset($questions[$ua][$log['q']]["_false"])){
                        $questions[$ua][$log['q']]["_false"]++;
                    }else{
                        $questions[$ua][$log['q']]["_false"] = 1;
                    }
                }
            }
            $scores = array();
            foreach($this->users['users'] as $user_id=>$user){
                if(isset($users[$user_id])){
                    $scores[$users[$user_id]][]   = $user_id;
                }else{
                    $scores[0][]    = $user_id;
                    $users[$user_id]= 0;
                }
            }
            $ranks  = array(
                "c_user" => 1,
                1=>array(),
                2=>array(),
                3=>array(),
            );
            $keys   = array_keys($scores);
            sort($keys);
            $c      = count($keys)-1;
            for($i = $c;$i >= 0;$i--){
                $r = $c-$i+1;
                $ranks[$r] = ($scores[$keys[$i]]);
                $ranks["scores"][$r] = $users[$scores[$keys[$i]][0]];
            }
            $ranks["questions"] = $questions;
            foreach($ranks as $rank=>$users){
                if(@in_array($this->user_id,$users)){
                    $ranks['c_user']    = $rank;
                    break;
                }
            }
        }
        return $ranks;
    }

    /**
     * @return array
     */
    public function assign(){
        return array();
    }

    /**
     * @param $input
     */
    public function main($input){}
}