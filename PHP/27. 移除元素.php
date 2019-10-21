class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $val
 * @return Integer
 */
    function removeElement(&$nums, $val) {
        $i = 0;
        while($i < count($nums)) {
            if ($val == $nums[$i]) {
                array_splice($nums,$i,1);
                continue;
            }
            $i++;
        }
    }
}