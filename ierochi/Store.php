<?php
class GunStore
{
    protected array $guns = [];

    public function __construct(array $guns)
    {
        $this->guns = $guns;
    }

    public function listInventory(): array
    {
        return $this->guns;
    }
    public function displayInventory()
    {
        foreach ($this->listInventory() as $key => $gun) {
            /** @var Guns $gun */
            echo "{$key} | {$gun->getName()} | {$gun->price}$ | {$gun->license} | {$gun->getTrajectory()}" . PHP_EOL;
        }
    }

}

$guns = [
    new Guns('Glock', 560, "LIGHT"),
    new Guns('AK-47', 2700, "HEAVY"),
    new Guns('Famas', 1700, "HEAVY"),
];


