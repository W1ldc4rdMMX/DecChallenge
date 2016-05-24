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
     * @param stockTypes $stockTypes
     * @return stockItems[]
     */
    public function getUniqItems(stockTypes $stockTypes)
    {
        return $this->createQueryBuilder('stock_items')
            ->select('DISTINCT(stock_items.stockItemName) AS stockItemName')
            ->addSelect('stock_items.stockItemBase')
            ->addSelect('stock_items.stockItemCont')
            ->addSelect('stock_items.stockItemReq')
            ->addSelect('stock_items.stockItemSpec')
            ->andWhere('stock_items.stockTypes = :stockTypes')
            ->setParameter('stockTypes',$stockTypes)
            //->distinct('true')
            //->orderBy('stock_items.stockItemName','DESC')
            ->getQuery()
            ->execute();
    }
}