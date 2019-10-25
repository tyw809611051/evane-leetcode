class Solution {

/**
 * @param Integer[] $nums1
 * @param Integer $m
 * @param Integer[] $nums2
 * @param Integer $n
 * @return NULL
 */
function merge(&$nums1, $m, $nums2, $n) {
    $i = $m-- + --$n;
    while($n>=0) {
        $nums1[$i--] = $m >=0 && $nums1[$m] > $nums2[$n] ? $nums1[$m--] : $nums2[$n--];
    }
}
}