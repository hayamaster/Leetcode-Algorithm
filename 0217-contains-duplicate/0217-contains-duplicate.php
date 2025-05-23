class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $uniArr = array_unique($nums);
        
        return $nums !== $uniArr;
    }
}