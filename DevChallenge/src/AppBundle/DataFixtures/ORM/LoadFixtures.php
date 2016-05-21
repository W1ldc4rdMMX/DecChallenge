<?php
/**
 * Created by PhpStorm.
 * User: Lear
 * Date: 2016/05/21
 * Time: 10:08 AM
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\stockPermissions;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\stockUsers;
use Nelmio\Alice\Fixtures;


class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
               
        $objects = Fixtures::load(
            __DIR__.'/fixtures.yml',
            $manager,
            [
                'providers' => [$this]
            ]
        );
    }

    public function usersFName()
    {
        $names = [
            'Lear',
            'Harry',
            'Ichigo',
            'Bruce',
            'Clark',
            'Steve',
            'Tony',
            'Peter'
        ];

        $key = array_rand($names);

        return $names[$key];
    }

    public function usersLName()
    {
        $names = [
            'Pather',
            'Potter',
            'Kurosaki',
            'Wayne',
            'Kent',
            'Rodgers',
            'Stark',
            'Parker'
        ];

        $key = array_rand($names);

        return $names[$key];
    }

    public function usersEmail()
    {
        $emails = [
            'lear.pather@gmail.com',
            'user@hotmail.com',
            'user@yahoo.com',
            'user@waynetech.com',
            'user@dailyplanet.com',
            'user@avengers.com',
            'user@starktech.com',
            'user@dailybugle.com'
        ];

        $key = array_rand($emails);

        return $emails[$key];
    }

    public function usersPass()
    {
        $emails = [
            'P@$$.123',
            'W1ldc4rd',
            'B@nk4i',
            'b@tM4n',
            '5up3rm@n',
            '4veng3rs',
            '1r0n/\/\4n',
            'Sp1d3r-m4n'
        ];

        $key = array_rand($emails);

        return $emails[$key];
    }

    public function stocktypes()
    {
        $types = [
            'Routers',
            'Mobile',
            'Sims'
        ];

        $key = array_rand($types);

        return $types[$key];
    }
    
    public function itemName()
    {
        global $itemVal;
        $items = [
            'Huawei E3531 3G Mobile USB Stick ',
            'Huawei E5330 3G Mobile Wi-Fi ',
            'Huawei E5730 3G Mobile Power Bank ',
            'Huawei E5577 LTE Mobile Wi-Fi',
            'Huawei B315 LTE Broadband Smart Hub',
            'Huawei HG659 VDSL Wi-Fi Modem',
            'Netgear DGN2200 ADSL Wi-Fi Modem',
            'Huawei WS322 Wi-Fi Range Extender',
            'Mobile data sim',
            'Mobile voice & data sim'
        ];

        $key = array_rand($items);
        $itemVal = $items[$key];
        return $items[$key];
    }

    public function itemBase()
    {
        global $itemVal;
        switch ($itemVal)
        {
            case 'Huawei E3531 3G Mobile USB Stick ':
                return ('Coloured LED Display,Plug and Play,1 Year Warranty,24/7 Support');

            case 'Huawei E5330 3G Mobile Wi-Fi ':
                return ('Coloured LED Display,1 Year Warranty,Plug and Play,24/7 Support');

            case 'Huawei E5730 3G Mobile Power Bank ':
                return('5200mAh Power Bank3,Coloured LED Display,Plug and Play,1 Year Warranty,24/7 Support,
                FREE Delivery');

            case 'Huawei E5577 LTE Mobile Wi-Fi':
                return('TFT-LCD Screen,MicroSD Card Slot,1 Year Warranty,Plug and Play,24/7 Support,FREE Delivery');

            case 'Huawei B315 LTE Broadband Smart Hub':
                return('Coloured LED Display,1 Year Warranty,Plug and Play,24/7 Support,FREE Delivery');

            case 'Huawei HG659 VDSL Wi-Fi Modem':
                return('VDSL Ready,ADSL 2+,No Complicated Setup,FREE Delivery,24/7 Support,1 Year Warranty');

            case 'Netgear DGN2200 ADSL Wi-Fi Modem':
                return('VDSL Ready,ADSL 2+,No Complicated Setup,FREE Delivery,24/7 Support,2 Year Warranty');

            case 'Huawei WS322 Wi-Fi Range Extender':
                return(' ADSL 2+,No Complicated Setup,24/7 Support,1 Year Warranty');

            case 'Mobile data sim':
                return('Standard data SIM');

            case 'Mobile voice & data sim':
                return('Voice and Data SIM');

        }
    }

    public function itemSpec()
    {
        global $itemVal;
        switch ($itemVal)
        {
            case 'Huawei E3531 3G Mobile USB Stick ':
                return (' Communication System 3G: UMTS/HSUPA/HSPA+ 2G: GSM/GPRS/EDGE,Network Frequencies,
                3G: 900MHz/2100MHz,2G: 900MHz/1800Mhz,Physical Dimensions 84 x 27 x 10.5 mm,Physical Weight 30g');

            case 'Huawei E5330 3G Mobile Wi-Fi ':
                return ('Communication System 3G: UMTS/HSUPA/HSPA+ 2G: GSM/GPRS/EDGE,Network Frequencies 
                3G: 900MHz/2100MHz 2G: 900MHz/1800Mhz, Wi-Fi Protocol 802.11b/g/n, 
                Physical Dimensions 92.8 x 60 x 13.8mm, Physical Weight 120g (incl battery)');

            case 'Huawei E5730 3G Mobile Power Bank ':
                return('Communication System 3G: UMTS/HSUPA/DC-HSPA+ 2G: GSM/GPRS/EDGE,
                Network Frequencies 3G: 900MHz/2100MHz 2G: 900MHz/1800Mhz,Wi-Fi Protocol 802.11b/g/n,
                Physical Weight 170g (incl. battery),Physical Dimensions 99 x 66.3 x 22.5 mm');

            case 'Huawei E5577 LTE Mobile Wi-Fi':
                return('Communication System 2G: GSM/GPRS/EDGE 3G: UMTS/HSUPA/DC-HSPA+ LTE: FDD, LTE: TDD,
                Network Frequencies LTE FDD: 1800/2100 MHz LTE TDD: 2300 MHz 3G: 900/1900/2100MHz 
                2G: 850/900/1800/1900MHz, Wi-Fi Protocol 802.11b/g/n,Physical Dimensions 96.8 x 58 x 17.3 mm,
                Physical Weight 110g (incl. battery)');

            case 'Huawei B315 LTE Broadband Smart Hub':
                return('Communication System, 2G: GSM/GPRS/EDGE 3G: UMTS/HSUPA/DC-HSPA+ LTE: FDD, LTE: TDD,
                Network Frequencies LTE FDD: 1800/2600 MHz LTE TDD: 2300 MHz 3G: 900/2100MHz 2G: 850/900/1800/1900MHz,
                Wi-Fi Protocol 802.11b/g/n,Physical Dimensions 186 x 139 x 46 mm,Physical Weight 275g');

            case 'Huawei HG659 VDSL Wi-Fi Modem':
                return('Physical Dimensions 185 x 37 x 240 mm,Physical Weight 350g,
                Ethernet Standards IEEE 802.3 1000BASE-T, Wireless N Standards Up to 300Mbps (MIMO 2x antennas),
                Wireless AC Standards Up to 1300Mbps (MIMO 3x antennas), 
                Ports 1x RJ45 VDSL, 2x USB, 2x Phone, 4x 1Gbit LAN USB 2.0,Enables 3G Failover and Printer Sharing,
                WPS Push n Connect');

            case 'Netgear DGN2200 ADSL Wi-Fi Modem':
                return('Physical Dimensions 173 x 128 x 33 mm,Physical Weight 300g, 
                Ethernet Standard IEEE 802.3 100BASE-T, Wireless Standards IEEE 802.11 b/g/n 2.4GHz, 
                Ports 1x RJ45 ADSL, 1x USB, 4x 100Mbps LAN, WPS Push n Connect');

            case 'Huawei WS322 Wi-Fi Range Extender':
                return('Physical Dimensions 73 x 30.7 x 73 mm, Physical Weight 200g, 
                Ethernet Standard IEEE 802.3 100BASE-T, Wireless Standards IEEE 802.11 b/g/n 2.4GHz,
                Wi-Fi Working Modes Modem / Repeater / Client, Ports 1x 100Mbps LAN, WPS Push n Connect');

            case 'Mobile data sim':
                return('Standard data SIM');

            case 'Mobile voice & data sim':
                return('Voice and Data SIM');

        }
    }

    public function itemCont()
    {
        global $itemVal;
        switch ($itemVal)
        {
            case 'Huawei E3531 3G Mobile USB Stick ':
                return ('3G Mobile USB Stick');

            case 'Huawei E5330 3G Mobile Wi-Fi ':
                return ('3G Mobile Wi-Fi Device,1500mAh Battery,USB Cable');

            case 'Huawei E5730 3G Mobile Power Bank ':
                return('3G Mobile Power Bank,USB Cable');

            case 'Huawei E5577 LTE Mobile Wi-Fi':
                return('LTE Mobile Wi-Fi Device,3000Ah Battery,USB Cable,USB Charger');

            case 'Huawei B315 LTE Broadband Smart Hub':
                return('LTE Broadband Smart Hub,Power plug');

            case 'Huawei HG659 VDSL Wi-Fi Modem':
                return('Wi-Fi Modem,Ethernet Cable,Phone Cable,Power Adapter');

            case 'Netgear DGN2200 ADSL Wi-Fi Modem':
                return('Wireless Router Modem,Ethernet Cable,Phone Cable,DSL POTS Filter,Vertical Stand,Power Adapter');

            case 'Huawei WS322 Wi-Fi Range Extender':
                return('Wi-Fi Range Extender,Built-in Power Adapter');

            case 'Mobile data sim':
                return('Standard data SIM');

            case 'Mobile voice & data sim':
                return('Voice and Data SIM');

        }
    }

    public function itemReq()
    {
        global $itemVal;
        switch ($itemVal)
        {
            case 'Huawei E3531 3G Mobile USB Stick ':
                return ('Mac OS 10.6+,Win Vista SP2+, Win 7, Win 8');

            case 'Huawei E5330 3G Mobile Wi-Fi ':
                return ('Mac OS 10.6+,Win Vista SP2+, Win 7, Win 8,Android 2.3+,iOS 5+,Windows Phone 7+');

            case 'Huawei E5730 3G Mobile Power Bank ':
                return('Mac OS X 10.6+,Win Vista SP2+, Win 7, Win 8+,Android 2.3+,iOS 5+,Windows Phone 7+');

            case 'Huawei E5577 LTE Mobile Wi-Fi':
                return('Mac OS X 10.6+,Win Vista SP2+, Win 7, Win 8+,Android 2.3+,iOS 5+,Windows Phone 7+');

            case 'Huawei B315 LTE Broadband Smart Hub':
                return('Mac OS X 10.6+,Win Vista SP2+, Win 7, Win 8+,Android 2.3+,iOS 5+,Windows Phone 7+');

            case 'Huawei HG659 VDSL Wi-Fi Modem':
                return(' Mac OS X 10.6+,Win Vista SP2+, Win 7, Win 8, Win 10,DSL Enabled Telkom Line,
                Connection to Modem');

            case 'Netgear DGN2200 ADSL Wi-Fi Modem':
                return('Mac OS X 10.6+,Win Vista SP2+, Win 7, Win 8, Win 10,DSL Enabled Telkom Line,
                Connection to Modem');

            case 'Huawei WS322 Wi-Fi Range Extender':
                return(' Mac OS X 10.6+,Win Vista SP2+, Win 7, Win 8, Win 10,DSL Enabled Telkom Line,
                Wi-Fi / Ethernet Connection');

            case 'Mobile data sim':
                return('Matching mobile device');

            case 'Mobile voice & data sim':
                return('Matching mobile device');

        }
    }
}