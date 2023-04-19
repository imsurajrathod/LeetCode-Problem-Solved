<?php
/**
    1768. Merge Strings Alternately - Easy

    You are given two strings word1 and word2. Merge the strings by adding letters in alternating order, starting with word1.
    If a string is longer than the other, append the additional letters onto the end of the merged string.
    Return the merged string.

    Example 1:
    Input: word1 = "abc", word2 = "pqr"
    Output: "apbqcr"
    Explanation: The merged string will be merged as so:
    word1:  a   b   c
    word2:    p   q   r
    merged: a p b q c r
    Example 2:

    Input: word1 = "ab", word2 = "pqrs"
    Output: "apbqrs"
    Explanation: Notice that as word2 is longer, "rs" is appended to the end.
    word1:  a   b
    word2:    p   q   r   s
    merged: a p b q   r   s
    Example 3:

    Input: word1 = "abcd", word2 = "pq"
    Output: "apbqcd"
    Explanation: Notice that as word1 is longer, "cd" is appended to the end.
    word1:  a   b   c   d
    word2:    p   q
    merged: a p b q c   d


    Constraints:
    1 <= word1.length, word2.length <= 100
    word1 and word2 consist of lowercase English letters.
 */

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     *
     * This is the preferred solution based on complexity and compared to below method mergeAlternatelyAnotherSolution()
     *
     * Space Complexity :  O(n)
     * Time Complexity :  O(n)
     */
    function mergeAlternately(string $word1, string $word2): string {
        $word1Length = strlen($word1);
        $word2Length = strlen($word2);
        $i = 0;
        $j = 0;
        $mergedString = '';

        while ($i < $word1Length && $j < $word2Length) {
            $mergedString .= $word1[$i];
            $i++;

            $mergedString .= $word2[$j];
            $j++;
        }

        if ($i < $word1Length) {
            $mergedString .= substr($word1, $i);
        }

        if ($j < $word2Length) {
            $mergedString .= substr($word2, $j);
        }

        return $mergedString;
    }

    /**
     * @param string $word1
     * @param string $word2
     * @return string
     */
    function mergeAlternatelyAnotherSolution(string $word1, string $word2): string {
        $mergedString = "";
        $word1Length = strlen($word1);
        $word2Length = strlen($word2);
        $loop = $word1Length;
        if($word2Length > $word1Length) {
            $loop = $word2Length;
        }
        for($i=0;$i<$loop;$i++) {
            if(isset($word1[$i])) {
                $mergedString .= $word1[$i];
            }

            if(isset($word2[$i])) {
                $mergedString .= $word2[$i];
            }
        }

        return $mergedString;
    }
}
