<?php
class Base_Model
{
    private $dbc;
    function __construct()
    {
        try {
            $dbc = new PDO("mysql:host=$MYSQL_SERVER;dbname=$MYSQL_DBNAME", $MYSQL_USERNAME, $MYSQL_USERPASS);
            $dbc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            throw new ResourceFailed($e->getMessage());
        }
    }
}
class Base_Controller
{
}
class Base_View
{
    protected $varlist=array();
    protected $tplpath;
    /*
    setparm
    �趨�������
    @param $name string ������
    @param $val N/A ֵ
    @return int ִ�н��
    */
    public function setparm($name,$val)
    {
        $this->varlist[$name]=$val;
    }
    /*
     * loadtpl
     * ָ��ģ���ļ�·��
     * @param $path $string ģ���ļ�·��
     */
    public function loadtpl($path)
    {
        $this->tplpath=$path;
    }
}
?>