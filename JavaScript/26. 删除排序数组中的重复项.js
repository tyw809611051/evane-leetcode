/**
 * @param {number[]} nums
 * @return {number}
 */
var removeDuplicates = function(nums) {
    var tag   = nums[0];
    var index = 0;
    while(index < nums.length) {
        if (nums[index] == nums[index+1]) {
            nums.splice(index+1,1);
        } else {
            index++;
            tag = nums[index];
        }
    }
    return nums.length
};