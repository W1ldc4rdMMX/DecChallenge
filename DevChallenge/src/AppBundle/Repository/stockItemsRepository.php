<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/24
 * Time: 6:19 PM
 */

namespace AppBundle\Repository;

use AppBundle\Entity\stockTypes;
use AppBundle\Entity\stockItems;
use Doctrine\ORM\EntityRepository;

class stockItemsRepository extends EntityRepository
{
    /**
     * @return stockItems[]
     */
    public function getUniqItems()
    {
        
        return $this->createQueryBuilder('stock_items')
            ->select('DISTINCT(stock_items.stockItemName) AS stockItemName')
            ->addSelect('stock_items.id')
            ->addSelect('stock_items.stockItemBase')
            ->addSelect('stock_items.stockItemCont')
            ->addSelect('stock_items.stockItemReq')
            ->addSelect('stock_items.stockItemSpec')
            ->addSelect('stockTypes.id')
            ->join('stock_items.stockTypes','stockTypes' )
            ->orderBy('stock_items.stockItemName','DESC')
            ->getQuery()
            ->execute();
    }
}