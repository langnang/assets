<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'sqlcon.php';

//添加用户注册记录
function regUser($stu) {
  $sql = sprintf("insert into users(username,password,sex,regdate) values('%s','%s','%s',now())",$stu->username,$stu->password,$stu->sex);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据添加成功';
        }
        else {
            echo'数据添加失败'.  mysql_errno();
            }
           
}
//用户登录事件判断
function isLogin($user,$pass){
//    $sql = "select count(1) as num from users where username = '".$user."' and password='".$pass."'";
    $sql = sprintf("select count(1) as num from users where username = '%s' and password = '%s'",$user,$pass);
  
    //数据库查询
    $result = mysql_query($sql);
    //第一行结果赋值，类型为数组
    $array_data = mysql_fetch_row($result);
    
    return $array_data[0];
}
//获取用户id
function getId($user,$pass){
    $sql =sprintf("select id from users where username = '%s' and password = '%s'",$user,$pass);
    
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获取某个用户名的用户数量
function getUserByUserName($user){
    $sql =sprintf("select * from users where username like '%s'",$user);
    //数据库查询
    $result = mysql_query($sql);
    return $result;
}

//获取某个用户名的用户数量
function getUserNoByUserName($user){
    $sql =sprintf("select count(*) from users where username = '%s' ",$user);
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获取用户id对应的用户信息
function getUser($id) {
    $sql =sprintf("select * from users where id = '%d' ",$id);
    $result=  mysql_query($sql);
    if($result){
        //echo'用户数据查询成功！'.'<br>';
        //echo $result;
        return $result;

    }
    else{
        echo'用户数据查询失败'.mysql_errno();
    }
    
}
//获取所有的注册用户信息
function getUsers(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from users");
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//获得分页数量的用户
function getUsersPaging($pagesize,$pageshow){
    $sql=  sprintf("select * from users where id is not null limit $pagesize,$pageshow");
    //echo $sql;
    $result = mysql_query($sql);
    if($result){
        //echo"数据查询成功";
//第三步：把查询的结果返回
        return $result;
    }else{
        echo"数据查询失败！".mysql_errno();
    }   
}
//获得所有用户数量
function getUsersNumber(){
    $sql =sprintf("select count(*) from users");
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获得id对应的所有用户数量
function getUsersNumberByID($id){
    $sql =sprintf("select count(*) from users where id ='%d'",$id);
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}

//获取所有的注册用户id信息
function getUsersId(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select id from users");
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//获取某个用户id外的其余所有的注册用户id信息
function getUsersIdWithoutOne($id){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select id from users where id !='%d' ",$id);
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//添加用户记录
function addUser($stu) {
  $sql = sprintf("insert into users(username,password,sex,regdate,university,college,profession,userno,notes) values('%s','%s','%s',now(),'%s','%s','%s','%s','%s')",$stu->username,$stu->password,$stu->sex,$stu->university,$stu->college,$stu->profession,$stu->userno,$stu->notes);
  //
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据添加成功';
        }
        else {
            echo'数据添加失败'.  mysql_errno();
            }
           
}
//修改用户记录
function updateUser($stu,$id) { 
  $sql = sprintf("update users set password='%s',sex='%s',regdate='%s',university='%s',college='%s',profession='%s',userno='%s',notes='%s' where id='%d'",$stu->password,$stu->sex,$stu->regdate,$stu->university,$stu->college,$stu->profession,$stu->userno,$stu->notes,$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据修改成功';
        }
        else {
            echo'数据修改失败'.  mysql_errno();
            }
           
}
//删除用户记录
function deleteUser($id) { 
  $sql = sprintf("delete from users where id='%d'",$id);
 // echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
       // echo '数据删除成功';
        }
        else {
            echo'数据删除失败'.  mysql_errno();
            }
           
}



//管理员登录事件判断
function isAdmin($user,$pass){
//    $sql = "select count(1) as num from users where username = '".$user."' and password='".$pass."'";
    $sql = sprintf("select count(1) as num from teachers where teachername = '%s' and password = '%s'",$user,$pass);
  
    //数据库查询
    $result = mysql_query($sql);
    //第一行结果赋值，类型为数组
    $array_data = mysql_fetch_row($result);
    
    return $array_data[0];
}
//获取管理员id
function getTeacherId($user,$pass){
    $sql =sprintf("select id from teachers where teachername = '%s' and password = '%s'",$user,$pass);
    
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获取管理员id对应的管理员信息
function getTeacher($id) {
    $sql =sprintf("select * from teachers where id = '%d' ",$id);
    //echo$sql.'<br>';
    $result=  mysql_query($sql);
    if($result){
       // echo'数据查询成功！'.'<br>';
        return $result;

    }
    else{
        echo'数据查询失败'.mysql_errno();
    }
    
}
//修改管理员记录
function updateTeacher($teacher,$id) { 
  $sql = sprintf("update teachers set password='%s',sex='%s',regdate='%s',university='%s',college='%s',profession='%s',teacherno='%s',notes='%s' where id='%d'",$teacher->password,$teacher->sex,$teacher->regdate,$teacher->university,$teacher->college,$teacher->profession,$teacher->teacherno,$teacher->notes,$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据修改成功';
        }
        else {
            echo'数据修改失败'.  mysql_errno();
            }
           
}


//获取所有的主题信息
function getThemes(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from themes");
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//获得id对应的所有主题数量
function getThemesNumberByID($id){
    $sql =sprintf("select count(*) from themes where id ='%d'",$id);
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}

//获取所有的主题信息--倒序
function getThemesDesc(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from themes order by id desc");
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//获得所有主题数量
function getThemesNumber(){
    $sql =sprintf("select count(*) from themes");
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获得分页数量的主题--倒序
function getThemesPaging($pagesize,$pageshow){
    $sql=  sprintf("select * from themes  where id is not null order by id desc limit $pagesize,$pageshow ");
    //echo $sql;
    $result = mysql_query($sql);
    if($result){
        //echo"数据查询成功";
//第三步：把查询的结果返回
        return $result;
    }else{
        echo"数据查询失败！".mysql_errno();
    }   
}
//获取某个主题名称的主题数量
function getThemeByThemeName($themename){
    $sql =sprintf("select * from themes where themename = '%s' ",$themename);
    //数据库查询
    $result = mysql_query($sql);
    return $result;;
}
//获取某个主题名称的主题数量
function getThemeNoByThemeName($themename){
    $sql =sprintf("select count(*) from themes where themename = '%s' ",$themename);
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获取所有现在时间处于活动日期内的主题信息
function getThemesNow(){
    $sql = sprintf("select * from themes where  now()>startdate and now()<enddate");
    //echo $sql.'<br>'.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//添加主题信息
function addTheme($theme) {
  $sql = sprintf("insert into themes(themename,themedetail,startdate,enddate,notes) values('%s','%s','%s','%s','%s')",$theme->themename,$theme->themedetail,$theme->startdate,$theme->enddate,$theme->notes);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
       // echo '数据添加成功';
        }
        else {
            echo'数据添加失败'.  mysql_errno();
            }
           
}
//获取主题id对应的主题信息
function getTheme($id){
    $sql=  sprintf("select * from themes where id = '%d' ",$id);
    //echo $sql;
    $result=  mysql_query($sql);
    if($result){
        //echo'主题数据查询成功！'.'<br>';
        //echo $result;
        return $result;

    }
    else{
        echo'主题查询失败'.mysql_errno();
    }
}
//修改主题信息
function updateTheme($theme,$id) { 
  $sql = sprintf("update themes set themename='%s',themedetail='%s',startdate='%s',enddate='%s',notes='%s' where id='%d'",$theme->themename,$theme->themedetail,$theme->startdate,$theme->enddate,$theme->notes,$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
       // echo '数据修改成功';
        }
        else {
            echo'数据修改失败'.  mysql_errno();
            }
}
//删除主题信息
function deleteTheme($id) { 
  $sql = sprintf("delete from themes where id='%d'",$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据删除成功';
        }
        else {
            echo'数据删除失败'.  mysql_errno();
            }
           
}
//获取所有主题名称
function getThemeNames(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select themename from themes");
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}



//获取所有的报名信息
function getSignUps(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from signup");
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//获得id对应的所有报名数量
function getSignUpNumberByID($id){
    $sql =sprintf("select count(*) from signup where id ='%d'",$id);
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}

//获取id对应的报名信息
function getSignUp($id){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from signup where id ='%d'",$id);
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}

//获得所有报名数量
function getSignUpNumber(){
    $sql =sprintf("select count(*) from signup");
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获得分页数量的报名信息
function getSignUpPaging($pagesize,$pageshow){
    $sql=  sprintf("select * from signup where id is not null order by id desc  limit $pagesize,$pageshow");
    //echo $sql;
    $result = mysql_query($sql);
    if($result){
        //echo"数据查询成功";
//第三步：把查询的结果返回
        return $result;
    }else{
        echo"数据查询失败！".mysql_errno();
    }   
}

//审核报名信息状态
function updateSignUp($signup,$id) { 
  $sql = sprintf("update signup set station='%s' where id='%d'",$signup->station,$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据修改成功';
        }
        else {
            echo'数据修改失败'.  mysql_errno();
            }
}
//根据队伍ID修改主题ID
function updateSignUpThemeIDByTeamID($themeid,$teamid){
    $sql = sprintf("update signup set themeid='%s' where teamid='%d'",$themeid,$teamid);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据修改成功';
        }
        else {
            echo'数据修改失败'.  mysql_errno();
            }
}
//添加报名信息
function addSignUp($teamid,$themeid){
    $sql = sprintf("insert into signup(teamid,themeid) values('%s','%s')",$teamid,$themeid);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据添加成功';
        }
        else {
            echo'数据添加失败'.  mysql_errno();
            }
           
}
//根据队伍id获取报名信息
function getSignUpByTeamID($teamid){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from signup where teamid ='%d'",$teamid);
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//根据队伍id获取报名信息数量
function getSignUpNoByTeamID($teamid){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select count(*) from signup where teamid ='%d'",$teamid);
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    $array_signup= mysql_fetch_row($result);
    return $array_signup[0];
}
//根据主题id获取报名信息
function getSignUpByThemeID($id){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from signup where themeid ='%d'",$id);
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//根据队伍id获取报名审核状态
function getSignUpStation($id){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select station from signup where teamid ='%d'",$id);
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    $array_station= mysql_fetch_row($result);
    return $array_station[0];
    //第三步：把查询的结果返回
}
//删除报名信息
function deleteSignUp($id){
    $sql = sprintf("delete from signup where id='%d'",$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据删除成功';
        }
        else {
            echo'数据删除失败'.  mysql_errno();
            }
           
}



//获取所有的用户团队信息
function getTeams(){
    //第一步：定义要操作的sql语句
    $sql = sprintf("select * from teams");
    //echo $sql.'<br>';
    //第二步：执行查询操作
    $result = mysql_query($sql);
    //第三步：把查询的结果返回
    return $result;
}
//获得id对应的所有主题数量
function getTeamsNumberByID($id){
    $sql =sprintf("select count(*) from teams where id ='%d'",$id);
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}

//获得所有团队数量
function getTeamsNumber(){
    $sql =sprintf("select count(*) from teams");
    //数据库查询
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//获得分页数量的团队信息
function getTeamsPaging($pagesize,$pageshow){
    $sql=  sprintf("select * from teams where id is not null order by id desc limit $pagesize,$pageshow");
    //echo $sql;
    $result = mysql_query($sql);
    if($result){
        //echo"数据查询成功";
//第三步：把查询的结果返回
        return $result;
    }else{
        echo"数据查询失败！".mysql_errno();
    }   
}

//获取id对应的队伍信息
function getTeam($id) {
    $sql =sprintf("select * from teams where id = '%d' ",$id);
    $result=  mysql_query($sql);
    if($result){
       // echo '团队数据查询成功！'.'<br>';
        return $result;
    }
    else{
        echo '团队数据查询失败'.mysql_errno();
    }
}
//获取团队名称对应的团队数量
function getTeamByTeamName($teamname) {
    $sql =sprintf("select * from teams where teamname = '%s' ",$teamname);
    $result = mysql_query($sql);

    return $result;
}

//获取团队名称对应的团队数量
function getTeamNoByTeamName($teamname) {
    $sql =sprintf("select count(*) from teams where teamname = '%s' ",$teamname);
    $result = mysql_query($sql);
    $array_id= mysql_fetch_row($result);
    return $array_id[0];
}
//添加用户团队记录
function addTeam($team) {
  $sql = sprintf("insert into teams(teamname,teamgroup,teamslogan,userid) values('%s','%s','%s','%s')",$team->teamname,$team->teamgroup,$team->teamslogan,$team->userid);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
       // echo '数据添加成功';
        }
        else {
            echo'数据添加失败'.  mysql_errno();
            }
           
}
//获取队长id对应的队伍信息
function getTeamByUserId($id) {
    $sql =sprintf("select * from teams where userid = '%d' ",$id);
    $result=  mysql_query($sql);
    if($result){
        //echo '团队数据查询成功！'.'<br>';
        return $result;
    }
    else{
        echo '团队数据查询失败'.mysql_errno();
    }
}
//修改团队信息
function updateTeam($team,$id) {
  $sql = sprintf("update teams set teamname='%s',teamgroup='%s',teamslogan='%s',userid='%s'where id='%s' ",$team->teamname,$team->teamgroup,$team->teamslogan,$team->userid,$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
       // echo '数据修改成功';
        }
        else {
            echo'数据修改失败'.  mysql_errno();
            }
          
}
//获取队长id对应的队伍数量
function getTeamNo($id) {
    $sql =sprintf("select count(*) from teams where userid = '%d' ",$id);
    //echo $sql.'<br>';
    $result=  mysql_query($sql);
    if($result){
       // echo'队伍数量查询成功！'.'<br>';
        $array_no=  mysql_fetch_row($result);
        return $array_no[0];
    }
    else{
        echo'队伍数量查询失败'.mysql_errno();
    }
    
}
//删除团队信息
function deleteTeam($id) { 
  $sql = sprintf("delete from teams where id='%d'",$id);
  //echo $sql.'<br>';
  $result=mysql_query($sql);
    if($result) {
        //echo '数据删除成功';
        }
        else {
            echo'数据删除失败'.  mysql_errno();
            }
           
}
//根据其他信息获取队伍id
function getTeamID($team){
    $sql =sprintf("select id from teams where teamname='%s' and teamgroup='%s' and teamslogan = '%s' and userid = '%d' ",$team->teamname,$team->teamgroup,$team->teamslogan,$team->userid);
    //echo $sql;
    $result=  mysql_query($sql);
    if($result){
        //echo '队伍id查询成功！'.'<br>';
        $array_id=  mysql_fetch_row($result);
        return $array_id[0];
    }
    else{
        echo '队伍id查询失败'.mysql_errno();
    }
}









