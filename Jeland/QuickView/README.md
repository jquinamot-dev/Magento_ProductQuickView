# Jeland_QuickView

[![Magento 2](https://img.shields.io/badge/Magento-2.x-orange.svg)](https://magento.com/)
[![License](https://img.shields.io/badge/License-Open--Source-blue.svg)]()

**Magento 2 Quick View Module** – adds a **Quick View modal** to product listings so customers can preview product details without leaving the category page.

---

## Features

- Enable/Disable Quick View in admin
- Customize modal title
- Quick View button rendered per product
- AJAX content loading with loader animation
- Upgrade-safe & modular

---

## Installation

1. Copy module to:

app/code/Jeland/QuickView

2. Enable module:

```bash
php bin/magento module:enable Jeland_QuickView
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush
Configure in admin:

Configure in Admin:
Stores > Configuration > Quick View Settings

Usage

Go to a category page.

Click the Quick View button on any product to open the modal.

Customization
CSS: view/frontend/web/css/quickview.css
Template: view/frontend/templates/product/list.phtml
Modal content: view/frontend/templates/quickview.phtml
Notes

Modal loads .product-view content via AJAX.
Future improvements:
Admin-selectable modal fields
Alternative loader animations

Theme compatibility

Uninstall:
php bin/magento module:disable Jeland_QuickView
rm -rf app/code/Jeland/QuickView
php bin/magento setup:upgrade
php bin/magento cache:flush
```
