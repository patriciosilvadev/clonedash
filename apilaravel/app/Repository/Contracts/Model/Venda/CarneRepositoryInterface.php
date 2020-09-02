<?php

namespace App\Repository\Contracts\Model\Venda;

use App\Repository\Contracts\RepositoryInterface;

/**
 * @author Tiago Franco
 * Interface basica referente a abstração
 * do padrao repository de consultas
 */
interface CarneRepositoryInterface extends RepositoryInterface
{
    public function getTotalCarne(array $informacoesCaixa);
}