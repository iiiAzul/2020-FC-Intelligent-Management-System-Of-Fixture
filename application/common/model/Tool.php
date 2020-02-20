<?php

namespace app\common\model;
use think\Model;

class Tool extends Model
{
    public function normalGetAll() {
        return $this->select();
    }

   public function getAll($workcell) {
       return $this->where('workcell','=',$workcell)->select();
   }

   public function addNewTool($data) {
       return $this->save($data);
   }

   public function operatorISubmitRepairApplication($code) {
       $tool = Tool::get(self::where('code','=',$code));
       $tool->repairstatus = 1;
       return $tool->save();
   }

   public function fromCodeGetWorkcell($code) {
       $tool = Tool::get(self::where('code','=',$code));
       return $tool->workcell;
   }

   public function handelIeStatus($code) {
       $tool = Tool::get(self::where('code','=',$code));
       $tool->IEstatus = 2;
       return $tool->save();
   }

   public function normalLendTool($code,$username) {
        $tool = Tool::get(self::where('code','=',$code));
        $tool->IEstatus = 1;
        $tool->IEnormal = $username;
        return $tool->save();
   }

   public function returnTool($code) {
        $tool = Tool::get(self::where('code','=',$code));
        $tool->IEstatus = 0;
        $tool->IEnormal = -1;
        return $tool->save();
   }

   public function fromCodeGetNormalUsername($code) {
        $tool = Tool::get(self::where('code','=',$code));
        return $tool->IEnormal;
   }

   public function fromWorkcellGetCode($workcell) {
        return Tool::where('workcell','=',$workcell)->column('code');
   }

   /*public function fromCodeGetAllInfo($code) {
        $ret = array();
        foreach ($code as $index => $element) {
            array_push($ret,Tool::where('code','=',$element));
        }
        return $ret;
   }*/
}