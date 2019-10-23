class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function maxSubArray($nums) {
    $res = $nums[0];
    $sum = 0;
    foreach($nums as $k => $val) {
        if ($sum + $val > $val) {
            $sum += $val;
        } else {
            $sum = $val;
        }
        $res = max($res,$sum);
    }
    return $res;
}
}