class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $tag  = $nums[0];
    $list = $nums;
    for($i = 1;$i < count($list);$i++) {
        if ($tag == $nums[$i]) {
            unset($nums[$i]);
        } else {
            $tag = $nums[$i];
        }
    }
    return count($nums);
}
}