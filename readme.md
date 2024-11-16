# PHP TRAINING EXCERCISE FROM CODEWARS

1. ## [PHP-ROCK-PAPER-SCISSORS](php-rock-paper/index.php)

**In this kata, your task is to implement an extended version of the famous rock-paper-scissors game. The rules are as follows:**

- Scissors cuts Paper
- Paper covers Rock
- Rock crushes Lizard
- Lizard poisons Spock
- Spock smashes Scissors
- Scissors decapitates Lizard
- Lizard eats Paper
- Paper disproves Spock
- Spock vaporizes Rock
- Rock crushes Scissors

**Task:**
Given two values from the above game, return the Player result as "Player 1 Won!", "Player 2 Won!", or "Draw!".

**Inputs**
Values will be given as one of "rock", "paper", "scissors", "lizard", "spock".

2. ## [PHP-AVG-SPEED](php-avg-speed/index.php)

*** Speed is a crucial measure of success for any aspiring warrior, so let's write a function to calculate it. ***

Average Speed is calculated by dividing distance by time. Given two strings as input the first of which indicates a codewarrior's distance travelled (in metres or kilometres) and the second indicating the time it takes them to travel (in seconds or minutes), return a string indicating their speed in miles per hour rounded to the nearest integer.

For the purposes of this kata one metre per second is defined as 2.23694 miles per hour.

So for example given the input values of distance & time "3km" and "5min" we should return a speed value of "22mph".

3. ## [PHP-CAT-JUMP](php-cat-jump/index.php)

An infinite number of shelves are arranged one above the other in a staggered fashion.
The cat can jump either one or three shelves at a time: from shelf i to shelf i+1 or i+3 (the cat cannot climb on the shelf directly above its head)

**Input**
Start and finish shelf numbers (always positive integers, finish no smaller than start)

**Task**
Find the minimum number of jumps to go from start to finish

**Example**
Start 1, finish 5, then answer is 2 (1 => 4 => 5 or 1 => 2 => 5)

4. ## [PHP-LETTER-VALUE](php-letter-value/index.php)

If　a = 1, b = 2, c = 3 ... z = 26

Then l + o + v + e = 54

and f + r + i + e + n + d + s + h + i + p = 108

**Task**
Your task is to write a function which calculates the value of a word based off the sum of the alphabet positions of its characters.

**Input**
The input will always be made of only lowercase letters and will never be empty.

5. ## [PHP-TO-CAMELCASE](php-to-camelCase/index.php)
    - Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case). The next words should be always capitalized.

    **Examples**
    "the-stealth-warrior" gets converted to "theStealthWarrior"

    "The_Stealth_Warrior" gets converted to "TheStealthWarrior"

    "The_Stealth-Warrior" gets converted to "TheStealthWarrior"

    - Modify the kebabize function so that it converts a camel case string into a kebab case.

    **Examples**
    "camelsHaveThreeHumps"  -->  "camels-have-three-humps"
    "camelsHave3Humps"  -->  "camels-have-humps"
    "CAMEL"  -->  "c-a-m-e-l"
    
    **Notes:**
    the returned string should only contain lowercase letters


