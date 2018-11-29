<?php
/*
    English Alphabet Class
    
    @author     Roozbeh Shafiee <roozbehp.shafiee@gmail.com>
    @date       17/Nov/2018
    @note       this program is written for making beautiful words or sentecess with " $ " sign
*/
class En_Al
{
    public function Full_Make($Input)
    { 
        $Input=strtoupper($Input);
        $OUT='';
        for($j=1;$j<=14;$j++)
        {
            for($i=0;$i<strlen($Input);$i++)
            {
                $str=$Input[$i];
                $OUT.=$this->$str($j);
            }
            $OUT.='<br>';
        }
        return $OUT;
    }
    
    public function Liner($Input)
    {
        $Input=strtoupper($Input);
        $OUT=[];
        for($j=1;$j<=14;$j++)
        {
            $string='';
            for($i=0;$i<strlen($Input);$i++)
            {
                $str=$Input[$i];
                $string.=$this->$str($j);
            }
            $OUT[$j]=$string;
        }
        return $OUT;
    }
    
    
    public function A($Line=0)
    {
        switch ($Line)
        {
            case 1:
                $out = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
            case 2:
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 3:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:    
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11:    
                $out = '&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12:    
                $out = '&nbsp;&nbsp;$$$$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 13:    
                $out = '&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;';
                break;
            case 14:    
                $out = '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
        }
        return $out;
        
    }
    
    public function B($Line=0)
    {
        switch ($Line)
        {
            case 1:
                $out =  '$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 2:
                $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 3:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8:
                $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;';
                break;
            case 12:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;';
                break;
            case 13:
                $out =  '$$$$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 14:
                $out =  '$$$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
        }
        
        return $out ;
    }
    
    public function C($Line=0)
    {
        switch ($Line)
        {
            case 1:
                $out = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp&nbsp;';
                break;
            case 2:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 3:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';
                break;
            case 4:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 5:
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9:
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 12:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';
                break;
            case 13:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 14:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';    
                break;
        }
        return $out;
    }
    public function D($Line=0)
    {
        switch($Line)
        {
            case  1:
                $out =  '$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  2:
                $out =  '$$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  3:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  4:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  5:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case  6:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case  7:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;';
                break;
            case  8:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;';
                break;
            case  9:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case  10:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case  11:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  12:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  13:
                $out =  '$$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case  14:
                $out =  '$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
        }
        return $out;
    }
    public function E($Line=0)
    {
        switch($Line)
        {
            case 1:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break; 
            case 2:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;  
            case 3:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 8:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 9:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 13:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp';
                break;
            case 14:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp';
                break;
        }
        return $out;
    }
    public function F($Line=0)
    {
        switch ($Line)
        {
            case 1:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 2:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 3:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 8:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 9:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 13:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 14:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;   
        }
        return $out;
    }
    public function G($Line=0)
    {
        switch ($Line)
        {
                
            case 1:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 2:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 3:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9:
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 13:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 14:
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
                break;
        }
        return $out;
    }
    public function H($Line=0)
    {
        switch($Line)
        {
            case 1:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 2:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 3:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 4:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 5:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 6:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 7:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 8:
                $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';
                break;
            case 9:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 10:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 11:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 12:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 13:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 14:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';   
                break;
        }
        return $out;
    }
    public function I($Line=0)
    {
        switch ($Line)
        {
            case 1: 
                $out =  '$$$$$$$$$$&nbsp;';
                break;
            case 2: 
                $out =  '$$$$$$$$$$&nbsp;';
                break;
            case 3: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 13: 
                $out =  '$$$$$$$$$$&nbsp;';
                break;
            case 14: 
                $out =  '$$$$$$$$$$&nbsp;';
                break;  
        }
        return $out;
        
    }
    public function J($Line=0)
    {
        switch($Line)
        {
            case 1: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 2: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 3: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 4: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 5: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 6: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 7: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 8: 
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 9: 
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 10: 
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 11: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 13: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 14: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';    
                break;
        }
        return $out;
    }
    public function K($Line=0)
    {
        switch($Line)
        {
            case 1:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';
                break;
            case 2:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';
                break;
            case 3:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8:
                $out =  '$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9:
                $out =  '$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 13:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 14:
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';
                break;
        }
        return $out;
    }
    public function L($Line=0)
    {
        switch ($Line)
        {
            case 1:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 2:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 3:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 4:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 5:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 6:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 7:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 8:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 9:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 10:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 11:
                $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                break;
            case 12:
                $out =  '$$$$$$$$$$$$$&nbsp;';
                break;
            case 13:
                $out =  '$$$$$$$$$$$$$&nbsp;';
                break;
            case 14:
                $out =  '$$$$$$$$$$$$$&nbsp;';
                break;
        }
        return $out;
    }
    public function M($Line=0)
    {
        switch($Line)
        {
            case 1:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 2:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 3:
                $out =  "$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;";
                break;
            case 4:
                $out =  "$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;";
                break;
            case 5:
                $out =  "$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$&nbsp;";
                break;
            case 6:
                $out =  "$$$$$$$$$$$$$$$$$$$$&nbsp;";
                break;
            case 7:
                $out =  "$$$$$&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 8:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 9:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 10:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 11:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 12:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 13:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
            case 14:
                $out =  "$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;";
                break;
        }
        return $out;
    }
    
    public function N($Line=0)
    {
        switch($Line)
        {
            case 1:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 2:
                $out =  "$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 3:
                $out =  "$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 4:
                $out =  "$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 5:
                $out =  "$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 6:
                $out =  "$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 7:
                $out =  "$$$$$$&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 8:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;$$$$$$&nbsp;";
                break;
            case 9:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$&nbsp;";
                break;
            case 10:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$&nbsp;";
                break;
            case 11:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$&nbsp;";
                break;
            case 12:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;";
                break;
            case 13:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;";
                break;
            case 14:
                $out =  "$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;"; 
                break;
        }
        return $out;
        
    }
    
    public function O($Line=0)
    {
        switch ($Line)
        {
            case 1: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 2: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 3: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 4: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 5: 
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 6: 
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';break;
            case 7: 
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 8: 
                $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 9: 
                $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';break;
            case 10: 
                $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 11: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: 
                $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
        }
        return $out;
    }
    
    public function P($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 2: $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';break;
            case 5: $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';break;
            case 6: $out =  '$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
        }
        return $out;
        
    }
    public function Q($Line=0)
    {
        switch($Line)
        {
            case 1: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 2: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 5: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;';break;    
        }
        return $out;
    }
    
    public function R($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 2: $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';break;
            case 5: $out =  '$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';break;
            case 6: $out =  '$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '$$$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '$$$$$&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; break;   
        }
        return $out;
    }
    public function S($Line=0)
    {
        switch($Line)
        {
            case 1: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 2: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;';break;
            case 5: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 7: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 12: $out =  '$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;';break;
            case 13: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 15: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;    
        }
        return $out;
    }
    public function T($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 2: $out =  '$$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 3: $out =  '$$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 4: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 5: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 8: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 9: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 10: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 11: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 12: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 13: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        ';break;
            case 14: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       ';break;    
        }
        return $out;
    }
    
    public function V($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 2: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 5: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
        }
        return $out;
    }
    
    public function U($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;$$$$$&nbsp;';break;
            case 2: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 3: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 4: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 5: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 6: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 7: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 8: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
        }
        return $out;
    }
    public function W($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 2: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 3: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 4: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 5: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 6: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 7: $out =  '$$$$$&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 8: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 9: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 10: $out =  '$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$&nbsp;';break;
            case 11: $out =  '$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;';break;
            case 12: $out =  '$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$&nbsp;';break;
            case 13: $out =  '$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';break;
            case 14: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;    
        }
        return $out;
    }
    
    public function X($Line=0)
    {
        switch($Line)
        {
            case 1: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 2: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 5: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;    
        }
        return $out;
    }
    public function Y($Line=0)
    {
        switch ($Line)
        {
            case 1: $out =  '$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;';break;
            case 2: $out =  '&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;';break;
            case 3: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 4: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 5: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 13: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 14: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;    
        }
        return $out;
    }
    public function Z($Line=0)
    {
        switch($Line)
        {
            case 1: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 2: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 3: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 4: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;';break;
            case 5: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 6: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 7: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 8: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 9: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 10: $out =  '&nbsp;&nbsp;&nbsp;&nbsp;$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 11: $out =  '$$$$$$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';break;
            case 12: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 13: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;
            case 14: $out =  '$$$$$$$$$$$$$$$$$$$$&nbsp;';break;    
        }
        return $out;
    }
}