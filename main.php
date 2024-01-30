<?php

$storage = [];// 12 ,1 ...

$storage[] = 12;
$storage[] = 1;

//$var1 = $storage[0];
//unset($storage[0]);

//$var1_1 = array_shift($storage);

array_push($storage, 24332); // === $storage[] = 24332
array_shift($storage);


// Want to prevent this
//$var1 = $storage[123];
//unset($storage[123]);


class StackDataStorage
{
    private $storage = [];

    public function add(int $value)
    {
//        array_push($this->storage, $value);

        $this->storage[] = $value;
    }

    public function get(): int
    {
        return array_pop($this->storage);
    }

    public function isEmpty()
    {
        return $this->count() === 0;
    }

    public function count()
    {
        return count($this->storage);
    }

    public function destroy()
    {
        $this->storage = [];
    }
}


$storageNew = new StackDataStorage;

$storageNew->add(1231);
$storageNew->add(12);
$storageNew->add(45);
$storageNew->add(768);
$storageNew->add(78);
$storageNew->add(9);

$storageNew->add([123, 12312, 'dsfdsfsd']);
$storageNew->add(new stdClass());
$storageNew->add('231321');


echo $storageNew->count() . PHP_EOL;
echo var_dump($storageNew) . PHP_EOL;

echo $storageNew->get() . PHP_EOL;
echo var_dump($storageNew) . PHP_EOL;
