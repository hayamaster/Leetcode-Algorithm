class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $hash = [];
        
        foreach($nums as $num) {
            if (array_key_exists($num, $hash)){
                $hash[$num] = $hash[$num] + 1;
            } else {
                $hash[$num] = 1;
            }
        }

        foreach($hash as $key => $val) {
            if ($hash[$key] === 1) {
                return $key;
            }
        }
    }
}