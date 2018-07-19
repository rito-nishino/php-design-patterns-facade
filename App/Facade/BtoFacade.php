<?php

namespace App\Facade;

use App\Bto\MachineModel;
use App\Bto\PartsCpu;
use App\Bto\PartsHdd;
use App\Bto\PartsMemory;
use App\Bto\TotalFee;
use App\Bto\Choose;

class BtoFacade
{
    private $machine_model;
    private $parts_cpu;
    private $parts_memory;
    private $parts_hdd;
    private $total_fee;
    private $choose;

    public function __construct()
    {

        $this->machine_model = new MachineModel();
        $this->parts_cpu = new PartsCpu();
        $this->parts_memory = new PartsMemory();
        $this->parts_hdd = new PartsHdd();
        $this->total_fee = new TotalFee();
        $this->choose = new Choose();
    }


    public function chooseModel($id)
    {
        $item = $this->machine_model->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }
    public function chooseCpu($id)
    {
        $item = $this->parts_cpu->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }
    public function chooseMemory($id)
    {
        $item = $this->parts_memory->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }
    public function chooseHdd($id)
    {
        $item = $this->parts_hdd->getItem($id);
        $this->choose->add($item);
        $this->total_fee->add($item->getPrice());
    }

    public function Total()
    {
        foreach ($this->choose->getChooses() as $item) {
            $item->display();
        }
        echo sprintf('<br>合計 %s', $this->total_fee->getTotal());
    }
}