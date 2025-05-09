class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sum = 0;
        $s = str_replace("IV", ",4,", $s);
        $s = str_replace("IX", ",9,", $s);
        $s = str_replace("XL", ",40,", $s);
        $s = str_replace("XC", ",90,", $s);
        $s = str_replace("CD", ",400,", $s);
        $s = str_replace("CM", ",900,", $s);
        $s = str_replace("M", ",1000,", $s);
        $s = str_replace("D", ",500,", $s);
        $s = str_replace("C", ",100,", $s);
        $s = str_replace("L", ",50,", $s);
        $s = str_replace("X", ",10,", $s);
        $s = str_replace("V", ",5,", $s);
        $s = str_replace("I", ",1,", $s);
        $arr = explode(",", $s);
        $arr = array_filter($arr);

        foreach($arr as $num){
            $sum += (int)$num;
        }

        return $sum;
    }
}