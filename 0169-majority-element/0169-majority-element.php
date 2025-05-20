class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $half = count($nums) / 2;
        $hash = [];

        foreach($nums as $num) {
            if (array_key_exists($num, $hash)){
                $hash[$num] = $hash[$num] + 1;
            } else {
                $hash[$num] = 1;
            }
        }

        foreach($hash as $key=>$val) {
            if ($val > $half) {
                return $key;
            }
        }
    }
}