class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        if (!in_array($target, $nums)){
            $nums[] = $target;
            sort($nums);
        }
        
        return array_search($target, $nums);
    }
}