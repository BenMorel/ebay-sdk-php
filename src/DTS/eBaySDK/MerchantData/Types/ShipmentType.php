<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property \DateTime $DeliveryDate
 * @property \DTS\eBaySDK\MerchantData\Enums\ShipmentDeliveryStatusCodeType $DeliveryStatus
 * @property \DateTime $EstimatedDeliveryDate
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $InsuredValue
 * @property \DTS\eBaySDK\MerchantData\Types\ItemTransactionIDType[] $ItemTransactionID
 * @property string $Notes
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $PackageDepth
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $PackageLength
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $PackageWidth
 * @property string $PayPalShipmentID
 * @property \DTS\eBaySDK\MerchantData\Types\AmountType $PostageTotal
 * @property \DateTime $PrintedTime
 * @property \DateTime $RefundGrantedTime
 * @property \DateTime $RefundRequestedTime
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $ShipFromAddress
 * @property integer $ShipmentID
 * @property \DTS\eBaySDK\MerchantData\Types\ShipmentLineItemType $ShipmentLineItem
 * @property \DTS\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType[] $ShipmentTrackingDetails
 * @property \DateTime $ShippedTime
 * @property \DTS\eBaySDK\MerchantData\Types\AddressType $ShippingAddress
 * @property \DTS\eBaySDK\MerchantData\Enums\ShippingFeatureCodeType[] $ShippingFeature
 * @property \DTS\eBaySDK\MerchantData\Enums\ShippingPackageCodeType $ShippingPackage
 * @property string $ShippingServiceUsed
 * @property \DTS\eBaySDK\MerchantData\Enums\ShipmentStatusCodeType $Status
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $WeightMajor
 * @property \DTS\eBaySDK\MerchantData\Types\MeasureType $WeightMinor
 */
class ShipmentType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'DeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryDate'
        ),
        'DeliveryStatus' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DeliveryStatus'
        ),
        'EstimatedDeliveryDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EstimatedDeliveryDate'
        ),
        'InsuredValue' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InsuredValue'
        ),
        'ItemTransactionID' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ItemTransactionIDType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ItemTransactionID'
        ),
        'Notes' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Notes'
        ),
        'PackageDepth' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageDepth'
        ),
        'PackageLength' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageLength'
        ),
        'PackageWidth' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PackageWidth'
        ),
        'PayPalShipmentID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PayPalShipmentID'
        ),
        'PostageTotal' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PostageTotal'
        ),
        'PrintedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PrintedTime'
        ),
        'RefundGrantedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundGrantedTime'
        ),
        'RefundRequestedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundRequestedTime'
        ),
        'ShipFromAddress' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipFromAddress'
        ),
        'ShipmentID' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentID'
        ),
        'ShipmentLineItem' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShipmentLineItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShipmentLineItem'
        ),
        'ShipmentTrackingDetails' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\ShipmentTrackingDetailsType',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShipmentTrackingDetails'
        ),
        'ShippedTime' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippedTime'
        ),
        'ShippingAddress' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\AddressType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingAddress'
        ),
        'ShippingFeature' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'ShippingFeature'
        ),
        'ShippingPackage' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingPackage'
        ),
        'ShippingServiceUsed' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingServiceUsed'
        ),
        'Status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Status'
        ),
        'WeightMajor' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMajor'
        ),
        'WeightMinor' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\MeasureType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WeightMinor'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}