<?php
class Verificador{
    public function CPF($CPF){
        $CPF = str_replace('.','',$CPF);
        $CPF = str_replace('-','',$CPF);
        $CPF = str_replace(' ','',$CPF);
        if(strlen($CPF) == 11){$D1 = 0;$D2 = 0;
            for($loop = 0; $loop<9;$loop++){$D1 += ($CPF[$loop]*($loop+1));}
            for($loop = 0; $loop<10;$loop++){$D2 += ($CPF[$loop]*($loop));}
            if($CPF[9].''.$CPF[10] == ($D1%11).''.($D2%11)){return true;}else{return false;}
        }else{return false; }
    }
    public function CNPJ($CNPJ){
        $CNPJ = str_replace('.','',$CNPJ);
        $CNPJ = str_replace('-','',$CNPJ);
        $CNPJ = str_replace(' ','',$CNPJ);
        $CNPJ = str_replace('/','',$CNPJ);
        if(strlen($CNPJ) == 14){$D1 = 0;$D2 = 0;
            for($loop = 0; $loop<4;$loop++){$D1 += ($CNPJ[$loop]*($loop+6));}
            for($loop = 4; $loop<12;$loop++){$D1 += ($CNPJ[$loop]*($loop-2));}
            for($loop = 0; $loop<5;$loop++){$D2 += ($CNPJ[$loop]*($loop+5));}
            for($loop = 5; $loop<13;$loop++){$D2 += ($CNPJ[$loop]*($loop-3));}
            if($CNPJ[12].''.$CNPJ[13] == ($D1%11).''.($D2%11)){return 'true';}else{return 'false';}
        }else{return 'false'; }
    }
}
?>