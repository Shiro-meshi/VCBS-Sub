<?php
/*
 * ��Controller������ҳ����أ���鿴���޸�֮��
 * �в�ͬ�������������� ����fulan
 * */
class Bangumi_Controller extends Base_Controller
{
    private function show() //��ʾ����
    {

    }
    private function add() //��Ӳ���
    {

    }
    private function modify() //�޸Ĳ���
    {

    }
    public function run()
    {
        /*
         * POST����ƣ�
         * do:ִ�еľ������ show:��ʾ�����б� add:��ӷ��� modify:�޸ķ���
         * ��ͬ�����ľ�����ڸ��Եĺ���ע�����涨��
         * */
        switch($_POST['do'])
        {
            case 'show':
                $this->show();
                break;
            case 'add':
                $this->add();
                break;
            case 'modify':
                $this->modify();
                break;
        }
    }
}
?>