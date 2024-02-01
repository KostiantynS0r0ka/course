<?php


$unsorted = [10, 7, 1, 4, 5, 9, 54, 3424, ];

function showArray(array $array)
{
    $arrayInString = '[' . implode(', ', $array) . ']';

    echo $arrayInString . PHP_EOL;
}

function sortUsingBubble(array $array): array
{
    for ($i = count($array) - 1; $i > 0; $i--) {

        $isSwapped = false;

        for ($j = 0; $j < $i; $j++) {
            $currentElement = $array[$j];
            $nextElement    = $array[$j + 1];

            if ($currentElement > $nextElement) {
                $temp = $currentElement;

                $array[$j]     = $nextElement;
                $array[$j + 1] = $temp;

                $isSwapped = true;
            }

            showArray($array);
        }

        if (!$isSwapped) {
            break;
        }
    }
    return $array;
}

showArray($unsorted);

$sorted = sortUsingBubble($unsorted);

showArray($sorted);
