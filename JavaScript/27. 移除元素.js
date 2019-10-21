/**
 * @param {number[]} nums
 * @param {number} val
 * @return {number}
 */
var removeElement = function(nums, val) {
    var i = 0;
      while(i < nums.length) {
          if (val == nums[i]) {
              nums.splice(i,1);
              continue;
          }
          i++;
      }
      return nums.length;
  };