class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function searchInsert($nums, $target) {
    foreach($nums as $k => $val) {
        if ($nums[$k] >= $target) {
            return $k;
        }
    }
    return count($nums);
    
}
}