<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2016/10/6
 * Time: 21:42
 * keyword: mysql class
 * content:module to connect to mysql
 * notice:现在这个版本还不是很完善，但是我需要用到的几乎都覆盖了，后续会添加其他的不够完善的部分.
 */
//error_reporting(E_NOTICE^E_DEPRECATED^E_ALL);
class mysql{
    private $host;
    private $name;
    private $pass;
    private $db;
    private $charset;
    function __construct($host,$name,$pass,$db,$charset)//构造方法，初始化相关属性
    {
        $this->host=$host;//用$this指针引用的内容不用加上$符号。
        $this->name=$name;
        $this->pass=$pass;
        $this->db=$db;
        $this->charset="'".$charset."'";//两边都加上. 正规点，不加也能行
        $this->connect();
    }
    function connect()//连接数据库
    {

        $link=mysql_connect($this->host,$this->name,$this->pass) or die($this->error());
        $this->select_db($this->db,$link) or die("没有该数据库".$this->db);

        $this->query("set names $this->charset");
    }
    function fetch_array($query,$result_type=MYSQL_ASSOC)//已测试
    {
        return @mysql_fetch_array($query,$result_type);
    }
    function fetch_row($query)
    {
        return mysql_fetch_row($query);
    }
    function select_db($dbname){//已测试
        return mysql_select_db($dbname);
    }
    function affected_rows()//已测试
    {
        return mysql_affected_rows();
    }
    function num_rows($query)//已测试
    {
        return mysql_num_rows($query);
    }
    function query($val)//如果要改变数据库了，只需要更改函数内部的内容
    {
        return  mysql_query($val);
    }
    function error()//返回错误信息
    {
        return mysql_error()."<br/>";
    }
    function version()//已测试
    {
        return mysql_get_server_info()."<br/>";
    }

    function close()
    {
        return mysql_close();
    }
    function insert_id()
    {
        return mysql_insert_id();
    }
    function fn_insert($table,$name,$value)//快捷插入内容到数据库
    {
        $this->query("insert into $table($name) value($value)");
    }
    function __toString()//返回类的基本信息,这个函数必须有返回信息。
    {
        return "this is a class which connect to the database."."<br/>";
    }
    function __call($name, $arguments)//异常处理函数
    {
        echo "the error function name is:".$name."<br/>";
        echo "the error arguments are:".print_r($arguments)."<br/>";
    }
}
//eg:$obj=new mysql("localhost","root","","mytest","GBK");     //创建实例
//eg:$obj->fn_insert("people","id,name,sex","'','傻吊','人妖'");  //插入测试









?>