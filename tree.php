<?php

class TreeElement
{
    protected $value = null;
    protected $left = null;
    protected $right = null;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function setLeftElement(TreeElement $leftElement)
    {
        $this->left = $leftElement;
    }

    public function setRightElement(TreeElement $rightElement)
    {
        $this->right = $rightElement;
    }

    public function getLeftValue()
    {
        if ($this->left) {
            return $this->left->getCurrentValue();
        } else {
            return false;
        }
    }

    public function getCurrentValue(): int
    {
        return $this->value;
    }

    public function getRightValue()
    {
        if ($this->right) {
            return $this->right->getCurrentValue();
        } else {
            return false;
        }
    }
}

$topElement = new TreeElement(12);
$leftElementOne = new TreeElement(888);
$rightElementOne = new TreeElement(1111);

$leftElementSecond = new TreeElement(888);
$rightElementSecond = new TreeElement(1111);

$topElement->setLeftElement($leftElementOne);
$topElement->setRightElement($rightElementOne);

//$topElement
// 12 , 888 , 1111

function getDataFromTreeElement(TreeElement $treeElement)
{
    $summ = $treeElement->getCurrentValue();
    echo $treeElement->getCurrentValue();

    $leftValue = $treeElement->getLeftValue();
    $rightValue = $treeElement->getRightValue();

    if ($leftValue) {
        echo PHP_EOL;
        echo $leftValue;
        $summ += $leftValue;
    }

    if ($rightValue) {
        echo PHP_EOL;
        echo $rightValue;
        $summ += $rightValue;
    }

    return $summ;
}

$sumAllElements = getDataFromTreeElement($topElement);
echo PHP_EOL;

echo 'Total : ' . $sumAllElements;
echo PHP_EOL;


$leftElementOne->setLeftElement($leftElementSecond);
$leftElementOne->setRightElement($rightElementSecond);



