<?php
/**
    1. Two Sum -Easy

    Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
    You may assume that each input would have exactly one solution, and you may not use the same element twice.
    You can return the answer in any order.
    Example 1:
    Input: nums = [2,7,11,15], target = 9
    Output: [0,1]
    Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

    Example 2:
    Input: nums = [3,2,4], target = 6
    Output: [1,2]
    Example 3:

    Input: nums = [3,3], target = 6
    Output: [0,1]

    Constraints:
    2 <= nums.length <= 104
    -109 <= nums[i] <= 109
    -109 <= target <= 109
    Only one valid answer exists.

    Follow-up: Can you come up with an algorithm that is less than O(n2) time complexity?
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * This is the preferred solution based on complexity and compared to below method TwoSumAnotherSolution()
     *
     * Space Complexity :  O(n)
     * Time Complexity :  O(n)
     */
    function twoSum(array $nums, int $target):array {
        $map = [];
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }
            $map[$nums[$i]] = $i;
        }
    }


    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     *
     * Space Complexity : O(1)
     * Time Complexity : O(n^2)
     *
     */
    function TwoSumAnotherSolution(array $nums, int $target):array {
        $count = count($nums);
        for($i=0; $i<$count-1; $i++){
            for($j=$i+1; $j<$count; $j++){
                if(($nums[$i] + $nums[$j]) === $target) {
                    return [$i, $j];
                }
            }
        }
    }
}
