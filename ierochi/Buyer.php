<?php

class Buyer {

    private string $name;
    private int $balance;
    private string $licence;

    public function __construct(string $name = "Arturs", int $balance = 20000, string $licence = "H")
    {
        $this->name = $name;
        $this->balance = $balance;
        $this->licence = $licence;
    }

    public function getBalance()
    {
        return $this->balance;
    }
    public function getLicense()
    {
        return $this->licence;
    }
    public function getBuyer(): string
    {
        return "{$this->name} has {$this->licence} licence and {$this->balance}$ in his wallet.";
    }

}