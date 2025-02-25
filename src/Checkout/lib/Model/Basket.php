<?php
/**
 * Basket
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  TebexCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tebex Checkout API
 *
 * The Checkout APIs are designed to allow our creators to use the Tebex Checkout flow and payment acceptance capabilities without the need to set up a Tebex-powered webstore. Using these APIs allows you to create baskets with custom products (as opposed to pre-created products on our webstore platform), and send customers directly to the checkout flow to proceed with payment options.  You must receive prior authorisation before the Checkout API is enabled on your account. Please contact customer support or your account manager to discover if you qualify to use the Checkout API before beginning integration.
 *
 * The version of the OpenAPI document: 1.1.2
 * Contact: tebex-integrations@overwolf.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TebexCheckout\Model;

use \ArrayAccess;
use \TebexCheckout\ObjectSerializer;

/**
 * Basket Class Doc Comment
 *
 * @category Class
 * @package  TebexCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Basket implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Basket';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ident' => 'string',
        'expire' => 'string',
        'price' => 'float',
        'price_details' => '\TebexCheckout\Model\PriceDetails',
        'is_payment_method_update' => 'bool',
        'return_url' => 'string',
        'complete' => 'bool',
        'tax' => 'float',
        'username' => 'string',
        'email_immutable' => 'bool',
        'discounts' => 'object[]',
        'coupons' => 'object[]',
        'giftcards' => 'object[]',
        'address' => '\TebexCheckout\Model\Address',
        'rows' => '\TebexCheckout\Model\BasketRow[]',
        'fingerprint' => 'string',
        'creator_code' => 'string',
        'roundup' => 'bool',
        'cancel_url' => 'string',
        'complete_url' => 'string',
        'complete_auto_redirect' => 'bool',
        'recurring_items' => 'object[]',
        'payment' => '\TebexCheckout\Model\Payment',
        'custom' => 'object',
        'links' => '\TebexCheckout\Model\BasketLinks'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ident' => null,
        'expire' => null,
        'price' => 'float',
        'price_details' => null,
        'is_payment_method_update' => null,
        'return_url' => null,
        'complete' => null,
        'tax' => 'int32',
        'username' => null,
        'email_immutable' => null,
        'discounts' => null,
        'coupons' => null,
        'giftcards' => null,
        'address' => null,
        'rows' => null,
        'fingerprint' => null,
        'creator_code' => null,
        'roundup' => null,
        'cancel_url' => null,
        'complete_url' => null,
        'complete_auto_redirect' => null,
        'recurring_items' => null,
        'payment' => null,
        'custom' => null,
        'links' => null
    ];

    /**
     * Array of nullable properties. Used for (de)serialization
     *
     * @var boolean[]
     */
    protected static array $openAPINullables = [
        'ident' => false,
        'expire' => false,
        'price' => false,
        'price_details' => false,
        'is_payment_method_update' => false,
        'return_url' => true,
        'complete' => false,
        'tax' => false,
        'username' => true,
        'email_immutable' => false,
        'discounts' => false,
        'coupons' => false,
        'giftcards' => false,
        'address' => false,
        'rows' => false,
        'fingerprint' => true,
        'creator_code' => false,
        'roundup' => true,
        'cancel_url' => false,
        'complete_url' => true,
        'complete_auto_redirect' => false,
        'recurring_items' => false,
        'payment' => true,
        'custom' => true,
        'links' => false
    ];

    /**
     * If a nullable field gets set to null, insert it here
     *
     * @var boolean[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ident' => 'ident',
        'expire' => 'expire',
        'price' => 'price',
        'price_details' => 'priceDetails',
        'is_payment_method_update' => 'isPaymentMethodUpdate',
        'return_url' => 'returnUrl',
        'complete' => 'complete',
        'tax' => 'tax',
        'username' => 'username',
        'email_immutable' => 'email_immutable',
        'discounts' => 'discounts',
        'coupons' => 'coupons',
        'giftcards' => 'giftcards',
        'address' => 'address',
        'rows' => 'rows',
        'fingerprint' => 'fingerprint',
        'creator_code' => 'creator_code',
        'roundup' => 'roundup',
        'cancel_url' => 'cancel_url',
        'complete_url' => 'complete_url',
        'complete_auto_redirect' => 'complete_auto_redirect',
        'recurring_items' => 'recurring_items',
        'payment' => 'payment',
        'custom' => 'custom',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ident' => 'setIdent',
        'expire' => 'setExpire',
        'price' => 'setPrice',
        'price_details' => 'setPriceDetails',
        'is_payment_method_update' => 'setIsPaymentMethodUpdate',
        'return_url' => 'setReturnUrl',
        'complete' => 'setComplete',
        'tax' => 'setTax',
        'username' => 'setUsername',
        'email_immutable' => 'setEmailImmutable',
        'discounts' => 'setDiscounts',
        'coupons' => 'setCoupons',
        'giftcards' => 'setGiftcards',
        'address' => 'setAddress',
        'rows' => 'setRows',
        'fingerprint' => 'setFingerprint',
        'creator_code' => 'setCreatorCode',
        'roundup' => 'setRoundup',
        'cancel_url' => 'setCancelUrl',
        'complete_url' => 'setCompleteUrl',
        'complete_auto_redirect' => 'setCompleteAutoRedirect',
        'recurring_items' => 'setRecurringItems',
        'payment' => 'setPayment',
        'custom' => 'setCustom',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ident' => 'getIdent',
        'expire' => 'getExpire',
        'price' => 'getPrice',
        'price_details' => 'getPriceDetails',
        'is_payment_method_update' => 'getIsPaymentMethodUpdate',
        'return_url' => 'getReturnUrl',
        'complete' => 'getComplete',
        'tax' => 'getTax',
        'username' => 'getUsername',
        'email_immutable' => 'getEmailImmutable',
        'discounts' => 'getDiscounts',
        'coupons' => 'getCoupons',
        'giftcards' => 'getGiftcards',
        'address' => 'getAddress',
        'rows' => 'getRows',
        'fingerprint' => 'getFingerprint',
        'creator_code' => 'getCreatorCode',
        'roundup' => 'getRoundup',
        'cancel_url' => 'getCancelUrl',
        'complete_url' => 'getCompleteUrl',
        'complete_auto_redirect' => 'getCompleteAutoRedirect',
        'recurring_items' => 'getRecurringItems',
        'payment' => 'getPayment',
        'custom' => 'getCustom',
        'links' => 'getLinks'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('ident', $data ?? [], null);
        $this->setIfExists('expire', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('price_details', $data ?? [], null);
        $this->setIfExists('is_payment_method_update', $data ?? [], null);
        $this->setIfExists('return_url', $data ?? [], null);
        $this->setIfExists('complete', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('email_immutable', $data ?? [], null);
        $this->setIfExists('discounts', $data ?? [], null);
        $this->setIfExists('coupons', $data ?? [], null);
        $this->setIfExists('giftcards', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('rows', $data ?? [], null);
        $this->setIfExists('fingerprint', $data ?? [], null);
        $this->setIfExists('creator_code', $data ?? [], null);
        $this->setIfExists('roundup', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('complete_url', $data ?? [], null);
        $this->setIfExists('complete_auto_redirect', $data ?? [], null);
        $this->setIfExists('recurring_items', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
        $this->setIfExists('custom', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array
     *
     * @param string $variableName
     * @param array  $fields
     * @param mixed  $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ident
     *
     * @return string|null
     */
    public function getIdent()
    {
        return $this->container['ident'];
    }

    /**
     * Sets ident
     *
     * @param string|null $ident ident
     *
     * @return self
     */
    public function setIdent($ident)
    {
        if (is_null($ident)) {
            throw new \InvalidArgumentException('non-nullable ident cannot be null');
        }
        $this->container['ident'] = $ident;

        return $this;
    }

    /**
     * Gets expire
     *
     * @return string|null
     */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
     * Sets expire
     *
     * @param string|null $expire expire
     *
     * @return self
     */
    public function setExpire($expire)
    {
        if (is_null($expire)) {
            throw new \InvalidArgumentException('non-nullable expire cannot be null');
        }
        $this->container['expire'] = $expire;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_details
     *
     * @return \TebexCheckout\Model\PriceDetails|null
     */
    public function getPriceDetails()
    {
        return $this->container['price_details'];
    }

    /**
     * Sets price_details
     *
     * @param \TebexCheckout\Model\PriceDetails|null $price_details price_details
     *
     * @return self
     */
    public function setPriceDetails($price_details)
    {
        if (is_null($price_details)) {
            throw new \InvalidArgumentException('non-nullable price_details cannot be null');
        }
        $this->container['price_details'] = $price_details;

        return $this;
    }

    /**
     * Gets is_payment_method_update
     *
     * @return bool|null
     */
    public function getIsPaymentMethodUpdate()
    {
        return $this->container['is_payment_method_update'];
    }

    /**
     * Sets is_payment_method_update
     *
     * @param bool|null $is_payment_method_update is_payment_method_update
     *
     * @return self
     */
    public function setIsPaymentMethodUpdate($is_payment_method_update)
    {
        if (is_null($is_payment_method_update)) {
            throw new \InvalidArgumentException('non-nullable is_payment_method_update cannot be null');
        }
        $this->container['is_payment_method_update'] = $is_payment_method_update;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string|null
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string|null $return_url return_url
     *
     * @return self
     */
    public function setReturnUrl($return_url)
    {
        if (is_null($return_url)) {
            array_push($this->openAPINullablesSetToNull, 'return_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('return_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets complete
     *
     * @return bool|null
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     *
     * @param bool|null $complete complete
     *
     * @return self
     */
    public function setComplete($complete)
    {
        if (is_null($complete)) {
            throw new \InvalidArgumentException('non-nullable complete cannot be null');
        }
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return float|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param float|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            array_push($this->openAPINullablesSetToNull, 'username');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('username', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets email_immutable
     *
     * @return bool|null
     */
    public function getEmailImmutable()
    {
        return $this->container['email_immutable'];
    }

    /**
     * Sets email_immutable
     *
     * @param bool|null $email_immutable email_immutable
     *
     * @return self
     */
    public function setEmailImmutable($email_immutable)
    {
        if (is_null($email_immutable)) {
            throw new \InvalidArgumentException('non-nullable email_immutable cannot be null');
        }
        $this->container['email_immutable'] = $email_immutable;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return object[]|null
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param object[]|null $discounts discounts
     *
     * @return self
     */
    public function setDiscounts($discounts)
    {
        if (is_null($discounts)) {
            throw new \InvalidArgumentException('non-nullable discounts cannot be null');
        }
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return object[]|null
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param object[]|null $coupons coupons
     *
     * @return self
     */
    public function setCoupons($coupons)
    {
        if (is_null($coupons)) {
            throw new \InvalidArgumentException('non-nullable coupons cannot be null');
        }
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets giftcards
     *
     * @return object[]|null
     */
    public function getGiftcards()
    {
        return $this->container['giftcards'];
    }

    /**
     * Sets giftcards
     *
     * @param object[]|null $giftcards giftcards
     *
     * @return self
     */
    public function setGiftcards($giftcards)
    {
        if (is_null($giftcards)) {
            throw new \InvalidArgumentException('non-nullable giftcards cannot be null');
        }
        $this->container['giftcards'] = $giftcards;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \TebexCheckout\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \TebexCheckout\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return \TebexCheckout\Model\BasketRow[]|null
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \TebexCheckout\Model\BasketRow[]|null $rows rows
     *
     * @return self
     */
    public function setRows($rows)
    {
        if (is_null($rows)) {
            throw new \InvalidArgumentException('non-nullable rows cannot be null');
        }
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string|null
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string|null $fingerprint Browser fingerprint to identify the user
     *
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        if (is_null($fingerprint)) {
            array_push($this->openAPINullablesSetToNull, 'fingerprint');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fingerprint', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets creator_code
     *
     * @return string|null
     */
    public function getCreatorCode()
    {
        return $this->container['creator_code'];
    }

    /**
     * Sets creator_code
     *
     * @param string|null $creator_code The creator code is used to share a percentage of the payment with another party. See more about creator codes at https://docs.tebex.io/creators/tebex-control-panel/engagement/creator-codes
     *
     * @return self
     */
    public function setCreatorCode($creator_code)
    {
        if (is_null($creator_code)) {
            throw new \InvalidArgumentException('non-nullable creator_code cannot be null');
        }
        $this->container['creator_code'] = $creator_code;

        return $this;
    }

    /**
     * Gets roundup
     *
     * @return bool|null
     */
    public function getRoundup()
    {
        return $this->container['roundup'];
    }

    /**
     * Sets roundup
     *
     * @param bool|null $roundup roundup
     *
     * @return self
     */
    public function setRoundup($roundup)
    {
        if (is_null($roundup)) {
            array_push($this->openAPINullablesSetToNull, 'roundup');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('roundup', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['roundup'] = $roundup;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url cancel_url
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets complete_url
     *
     * @return string|null
     */
    public function getCompleteUrl()
    {
        return $this->container['complete_url'];
    }

    /**
     * Sets complete_url
     *
     * @param string|null $complete_url complete_url
     *
     * @return self
     */
    public function setCompleteUrl($complete_url)
    {
        if (is_null($complete_url)) {
            array_push($this->openAPINullablesSetToNull, 'complete_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('complete_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['complete_url'] = $complete_url;

        return $this;
    }

    /**
     * Gets complete_auto_redirect
     *
     * @return bool|null
     */
    public function getCompleteAutoRedirect()
    {
        return $this->container['complete_auto_redirect'];
    }

    /**
     * Sets complete_auto_redirect
     *
     * @param bool|null $complete_auto_redirect complete_auto_redirect
     *
     * @return self
     */
    public function setCompleteAutoRedirect($complete_auto_redirect)
    {
        if (is_null($complete_auto_redirect)) {
            throw new \InvalidArgumentException('non-nullable complete_auto_redirect cannot be null');
        }
        $this->container['complete_auto_redirect'] = $complete_auto_redirect;

        return $this;
    }

    /**
     * Gets recurring_items
     *
     * @return object[]|null
     */
    public function getRecurringItems()
    {
        return $this->container['recurring_items'];
    }

    /**
     * Sets recurring_items
     *
     * @param object[]|null $recurring_items recurring_items
     *
     * @return self
     */
    public function setRecurringItems($recurring_items)
    {
        if (is_null($recurring_items)) {
            throw new \InvalidArgumentException('non-nullable recurring_items cannot be null');
        }
        $this->container['recurring_items'] = $recurring_items;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \TebexCheckout\Model\Payment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \TebexCheckout\Model\Payment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            array_push($this->openAPINullablesSetToNull, 'payment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment'] = $payment;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return object|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param object|null $custom custom
     *
     * @return self
     */
    public function setCustom($custom)
    {
        if (is_null($custom)) {
            array_push($this->openAPINullablesSetToNull, 'custom');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('custom', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \TebexCheckout\Model\BasketLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \TebexCheckout\Model\BasketLinks|null $links links
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }
        $this->container['links'] = $links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

