class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $hash = [];
        $arrStr = explode(" ", $s);

        foreach(str_split($pattern) as $idx => $alpha) {
            if (strlen($pattern) !== count($arrStr)) {
                return false;
            } elseif(!isset($hash[$alpha])) {
                if(array_search($arrStr[$idx], $hash)) {
                    return false;
                }
                $hash[$alpha] = $arrStr[$idx];
            } elseif ($hash[$alpha] !== $arrStr[$idx]){
                return false;
            }
        }

        return true;
    }
}