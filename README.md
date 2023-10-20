[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)
[![Build Status](https://travis-ci.org/Upgradelabs/laravel-woocommerce.svg?branch=master)](https://travis-ci.org/Upgradelabs/laravel-woocommerce)
[![StyleCI](https://github.styleci.io/repos/180436811/shield?branch=master)](https://github.styleci.io/repos/180436811)
[![Quality Score](https://img.shields.io/scrutinizer/g/Upgradelabs/laravel-woocommerce.svg?style=flat-square)](https://scrutinizer-ci.com/g/Upgradelabs/laravel-woocommerce)
[![Downloads](https://poser.pugx.org/Upgradelabs/laravel-woocommerce/d/total.svg)](https://packagist.org/packages/Upgradelabs/laravel-woocommerce)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/Upgradelabs/laravel-woocommerce.svg?style=flat-square)](https://packagist.org/packages/Upgradelabs/laravel-woocommerce)

# Description
WooCommerce Rest API for Laravel. You can Get, Create, Update and Delete your woocommerce product using this package easily.

[Documentation](https://upgradelabs.github.io/docs/laravel-woocommerce/)

## Authors

* **Md Abu Ahsan Basir** - [github](https://github.com/maab16)

## License

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2020 © <a href="https://github.com/Upgradelabs/laravel-woocommerce/blob/master/LICENSE" target="_blank">CodexShaper</a>.

# Eloquent Style for Product, Customer and Order

```
//This fork allows to use several WooCommerce Sites.
//You can have a Dashboard to manage several WooCommerce

//Before use you need to specify which WooCommerce site you´re using.
//Just bind to the app container

app()->bind(WooCommerceApi::class, fn() => new WooCommerceApi('site_name_in_the_config_file'));

// Where passing multiple parameters
$products = Product::where('title','hello')->get();
OR
// You can call field with where clause
$products = Product::whereTitle('hello')->get();
// Fields name are more than one words or seperate by underscore (_). For example field name is `min_price`
$products = Product::whereMinPrice(5)->get();

// Where passing an array
$orders = Order::where(['status' => 'processing']);
$orders = Order::where(['status' => 'processing', 'orderby' => 'id', 'order' => 'asc'])->get();

// Set Options
$orders = Order::options(['status' => 'processing', 'orderby' => 'id', 'order' => 'asc'])->get();

// You can set options by passing an array when call `all` method
$orders = Order::all(['status' => 'processing', 'orderby' => 'id', 'order' => 'asc']);
```
#Product Options: https://woocommerce.github.io/woocommerce-rest-api-docs/#products

#Customer Options: https://woocommerce.github.io/woocommerce-rest-api-docs/#customers

#Order Options: https://woocommerce.github.io/woocommerce-rest-api-docs/#orders

# You can also use ```WooCommerce``` Facade

```
use Upgradelabs\WooCommerce\Facades\WooCommerce;

public function products()
{
  return WooCommerce::all('products');
}

public function product( Request $request )
{
  $product = WooCommerce::find('products/'.$request->id);
}

public function orders()
{
  return WooCommerce::all('orders');
}

public function order( Request $request )
{
  $order = WooCommerce::all('orders/'.$request->id);
}

public function customers()
{
  return WooCommerce::all('customers');
}

public function customer( Request $request )
{
  $customer = WooCommerce::all('customers/'.$request->id);
}
```

# Use Facade Alias

```
use WooCommerce // Same as use Upgradelabs\WooCommerce\Facades\WooCommerce;
use Customer // Same as use Upgradelabs\WooCommerce\Models\Customer;
use Order // Same as use Upgradelabs\WooCommerce\Models\Order;
use Product // Same as Upgradelabs\WooCommerce\Models\Product;
```
