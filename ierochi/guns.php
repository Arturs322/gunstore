<?php

//Ieroču veikals
//Ieroči (dažādi) IR
//Ieroču licences
//Ierocim ir lodes lidojuma trajektorija IR
//Katram ierocim trajektoriju rēķina citādāk. IR
class Guns {

    public string $name;
    public int $price;
    public string $license;
    public int $trajectory;

    public function __construct(string $name, int $price, string $license)
    {
        $this->name = $name;
        $this->price = $price;
        $this->license = $license;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getLicense(): string
    {
        return $this->license;
    }
    public function getTrajectory()
    {
        return $this->trajectory;
    }


}
class Glock extends Guns
{
    private int $speed;
    private int $bulletWeight;
    private int $bulletCaliber;

    public function __construct(string $name, int $price, string $license)
    {
        parent::__construct($name, $price, $license);
    }

    public function getTrajectory(int $speed = 85, int $bulletWeight = 2, int $bulletCaliber = 9): int
    {
        $this->speed = $speed;
        $this->bulletWeight = $bulletWeight;
        $this->bulletCaliber = $bulletCaliber;
        return $this->speed * $this->bulletWeight / $this->bulletCaliber;
    }

}
class AK47 extends Guns
{
    private int $speed;
    private int $bulletWeight;
    private int $bulletCaliber;

    public function __construct(string $name, int $price, string $license)
    {
        parent::__construct($name, $price, $license);
    }

    public function getTrajectory(int $speed = 150, int $bulletWeight = 2, int $bulletCaliber = 7): int
    {
        $this->speed = $speed;
        $this->bulletWeight = $bulletWeight;
        $this->bulletCaliber = $bulletCaliber;
        return $this->speed / $this->bulletCaliber * $this->bulletWeight;
    }

}
class Famas extends Guns
{
    private int $speed;
    private int $bulletWeight;
    private int $bulletCaliber;

    public function __construct(string $name, int $price, string $license)
    {
        parent::__construct($name, $price, $license);
    }

    public function getTrajectory(int $speed = 100, int $bulletWeight = 2, int $bulletCaliber = 5): int
    {
        $this->speed = $speed;
        $this->bulletWeight = $bulletWeight;
        $this->bulletCaliber = $bulletCaliber;
        return $this->speed - $this->bulletWeight + $this->bulletCaliber;
    }

}


/*
$guns = new GunsStore([
    new Glock("Glock", 570, "LIGHT"),
    new AK47("AK-47", 2700, "HEAVY"),
    new Famas("Famas", 1800, "HEAVY"),
]);

foreach ($guns as $key => $gun)
{
    echo "Key to choose: {$key}";
    echo "Gun trajectory: {$gun->getTrajectory()}". PHP_EOL;
    echo "Gun trajectory: {$gun->listInventory()}". PHP_EOL;
}

$x = new Glock("glock", 200, "H");
echo $x->getInfo();
$arturs = new Buyer();
echo $arturs->getBuyer() . PHP_EOL;

$guns = [
    new Glock("Glock", 570, "L"),
    new AK47("AK-47", 2700, "H"),
    new Famas("Famas", 1800, "H"),
];

foreach ($guns as $key => $gun)
{
    echo "Key to choose: {$key}, {$gun->getInfo()}";
    echo "Gun trajectory: {$gun->getTrajectory()}". PHP_EOL;
}

echo $arturs->getBuyer() . PHP_EOL;
echo $arturs->chooseWeapon($guns[1]);
*/

//echo $arturs->chooseWeapon() . PHP_EOL;

/*
$glock = new Glock("Glock", 570, "L");
echo $glock->getInfo(),$glock->getTrajectory() . PHP_EOL;

$ak47 = new AK47("AK-47", 2700, "H");
echo $ak47->getInfo(),$ak47->getTrajectory() . PHP_EOL;

$famas = new Famas("Famas", 1800, "H");
echo $famas->getInfo(),$famas->getTrajectory() . PHP_EOL;



$ak47 = new AK47();
echo $ak47->getTrajectory() . PHP_EOL;
$famas = new Famas();
echo $famas->getTrajectory() . PHP_EOL;
*/