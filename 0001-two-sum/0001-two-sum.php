class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $index => $num) {
            for($i = $index + 1; $i < count($nums); $i++) {
                if($num + $nums[$i] === $target) {
                    return [$index, $i];
                }
            }
        }
    }
}