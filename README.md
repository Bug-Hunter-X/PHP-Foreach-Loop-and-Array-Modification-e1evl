# PHP Foreach Loop and Array Modification

This repository demonstrates a common error when modifying arrays within a `foreach` loop in PHP.  Incorrectly handling references can lead to unexpected results.

The `bug.php` file shows the incorrect approach, while `bugSolution.php` provides the correct solution.

The core issue lies in understanding how PHP handles references within `foreach`.  The solution highlights the importance of using references correctly to ensure the array is modified as intended.