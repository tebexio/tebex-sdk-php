<?php

namespace Tebex;

use PHPUnit\Framework\TestCase;
use Tebex\Headless\BasketFacade;
use Tebex\Headless\Projects\TebexProject;
use TebexHeadless\Model\Basket;
use TebexHeadless\Model\Category;
use TebexHeadless\Model\Coupon;
use TebexHeadless\Model\Package;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertInstanceOf;

class HeadlessTest extends TestCase
{
    public string $publicToken;
    public string $rustPublicToken;
    public string $universalPublicToken;

    public TebexProject $project;

    public BasketFacade $basket;

    protected function setUp() : void {
        $this->publicToken = (string) getenv("TEBEX_HEADLESS_PUBLIC_TOKEN");
        $this->rustPublicToken = (string) getenv("TEBEX_HEADLESS_TEST_RUST_PUBLIC_TOKEN");
        $this->universalPublicToken = (string) getenv("TEBEX_HEADLESS_TEST_UNIVERSAL_PUBLIC_TOKEN");

        $this->project = Headless::setProject($this->publicToken);
    }

    private function _createBasketFacade() : BasketFacade {
        $basket = Headless::createBasket([
            "complete_url" => "https://tebex.io/completed",
            "cancel_url" => "https://tebex.io/cancelled"
        ]);
        $this->basket = new BasketFacade($basket, $this->project);
        return $this->basket;
    }

    public function testCreateBasket()
    {
        $basket = $this->_createBasketFacade();
        self::assertInstanceOf(Basket::class, $basket->getBasket());
        self::assertNotNull($basket->getBasket()->getId());
    }

    public function testGetUserAuthUrl()
    {
        $basket = $this->_createBasketFacade();
        $authUrlResponse = Headless::getUserAuthUrl($basket->getBasket(), "https://tebex.io/returned");

        if ($this->project->requiresUserAuth()) {
            self::assertNotNull($authUrlResponse);
            self::assertNotEmpty($authUrlResponse);
            self::assertStringContainsString("http", $authUrlResponse);
        } else {
            self::assertEmpty($authUrlResponse);
        }
    }

    public function testGetCheckoutLinks()
    {
        $basket = $this->_createBasketFacade();

        $basket->addPackage(Headless::getAllPackages()[0]);
        $links = Headless::getCheckoutLinks($basket->getBasket());

        self::assertNotEmpty($links);
        self::assertNotNull($links);
        self::assertArrayHasKey("checkout", $links);
        self::assertNotNull($links["checkout"]);
    }

    public function testGetAllCategories()
    {
        self::assertNotEmpty(Headless::getAllCategories());
        self::assertNotNull(Headless::getAllCategories()[0]->getId());
    }

    public function testGetHeadlessApi()
    {
        self::assertNotNull(Headless::getHeadlessApi());
    }

    public function testGetBasketByIdent()
    {
        $fakeBasket = $this->_createBasketFacade();
        $basket = Headless::getBasketByIdent($fakeBasket->getBasket()->getIdent());
        assertInstanceOf(Basket::class, $basket);
        assertEquals($fakeBasket->getBasket()->getIdent(), $basket->getIdent());
    }

    public function testGetWebstore()
    {
        self::assertNotEmpty(Headless::getWebstore());
        self::assertNotNull(Headless::getWebstore()->getId());
    }

    public function testGetAllPackages()
    {
        self::assertNotEmpty(Headless::getAllPackages());
        self::assertNotNull(Headless::getAllPackages()[0]->getId());
    }

    public function testGetCategory()
    {
        $categories = Headless::getAllCategories();
        $categoryId = $categories[0]->getId();
        $category = Headless::getCategory($categoryId);
        self::assertNotNull($category);
        self::assertInstanceOf(Category::class, $category);
        self::assertNotNull($category->getId());
    }

    public function testGetPackage()
    {
        $packages = Headless::getAllPackages();
        $packageId = $packages[0]->getId();
        $package = Headless::getPackage($packageId);
        self::assertNotNull($packages);
        self::assertInstanceOf(Package::class, $package);
        self::assertNotNull($package->getId());
    }

    public function testAddCoupon()
    {
        $basket = $this->_createBasketFacade();
        $basket->addPackage(Headless::getAllPackages()[0]);
        Headless::applyCoupon($basket, new Coupon(["coupon_code" =>"test"]));
        $basket->refreshBasket();
        self::assertTrue(sizeof($basket->getBasket()->getCoupons()) > 0);
    }

    public function testRemoveCoupon()
    {
        $basket = $this->_createBasketFacade();
        $basket->addPackage(Headless::getAllPackages()[0]);
        Headless::applyCoupon($basket, new Coupon(["coupon_code" =>"test"]));
        $basket->refreshBasket();
        self::assertTrue(sizeof($basket->getBasket()->getCoupons()) > 0);
        Headless::removeCoupon($basket, new Coupon([
            "coupon_code" => "test"]));
        $basket->refreshBasket();
        self::assertTrue(sizeof($basket->getBasket()->getCoupons()) == 0);
    }
}
