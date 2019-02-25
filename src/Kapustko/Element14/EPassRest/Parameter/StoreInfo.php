<?php
/**
 * User: skornev
 * Date: 2019-02-25
 * Time: 23:50
 */

class StoreInfo
{
    /**
     * Store identifier
     * @var string
     */
    private $id;

    /**
     * StoreInfo constructor.
     * @param string $storeId
     * @throws InvalidParameterException
     */
    public function __construct($storeId = 'uk.farnell.com')
    {
        $storeIds = [
            'bg.farnell.com',
            'cz.farnell.com',
            'dk.farnell.com',
            'at.farnell.com',
            'ch.farnell.com',
            'de.farnell.com',
            'cpc.farnell.com',
            'cpcireland.farnell',
            'export.farnell.com',
            'onecall.farnell.com',
            'ie.farnell.com',
            'il.farnell.com',
            'uk.farnell.com',
            'es.farnell.com',
            'ee.farnell.com',
            'fi.farnell.com',
            'fr.farnell.com',
            'hu.farnell.com',
            'it.farnell.com',
            'lt.farnell.com',
            'lv.farnell.com',
            'be.farnell.com',
            'nl.farnell.com',
            'no.farnell.com',
            'pl.farnell.com',
            'pt.farnell.com',
            'ro.farnell.com',
            'ru.farnell.com',
            'sk.farnell.com',
            'si.farnell.com',
            'se.farnell.com',
            'tr.farnell.com',
            'canada.newark.com',
            'mexico.newark.com',
            'www.newark.com',
            'cn.element14.com',
            'au.element14.com',
            'nz.element14.com',
            'hk.element14.com',
            'sg.element14.com',
            'my.element14.com',
            'ph.element14.com',
            'th.element14.com',
            'in.element14.co',
            'tw.element14.com',
            'kr.element14.com'
        ];

        if (!in_array($storeId, $storeIds)) {
            throw new InvalidParameterException("''" . $storeId . "' is not a valid store id ");
        }

    }
}