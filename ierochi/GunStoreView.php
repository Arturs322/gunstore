<?php
require_once "Buyer.php";
require_once "guns.php";
require_once "Store.php";
class GunStoreView extends GunStore
{

    public function __construct(array $guns)
    {
        parent::__construct($guns);
    }

    public function run(): void
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to see available guns\n";
            echo "Choose 2 to buy a gun\n";
            echo "Choose 3 to return video (as user)\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!" . PHP_EOL;
                    die;
                case 1:
                    $this->displayGuns();
                    break;
                case 2:
                    $this->main();
                    break;

                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }
    public function main()
    {
        $selection = readline("Choose a weapon: ");
        //if (!(0 <= $selection && $selection  !is_numeric($selection))
        {
            echo "INVALID input" . PHP_EOL;
        }

    }
    public function displayGuns()
    {
        foreach ($this->listInventory() as $key => $gun) {
            /** @var Guns $gun */
            echo "{$key} \ {$gun->getName()} \ {$gun->price}$ \ {$gun->license} \ {$gun->getTrajectory()}" . PHP_EOL;
        }
    }
}


