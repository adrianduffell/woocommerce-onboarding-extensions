#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

# Array of plugin URLs
plugins=(
    "https://downloads.wordpress.org/plugin/woocommerce-payments.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-gateway-stripe.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-mercadopago.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-paypal-payments.zip"
    "https://downloads.wordpress.org/plugin/mollie-payments-for-woocommerce.zip"
    "https://downloads.wordpress.org/plugin/woo-razorpay.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-payfast-gateway.zip"
    "https://downloads.wordpress.org/plugin/payu-india.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-square.zip"
    "https://downloads.wordpress.org/plugin/klarna-payments-for-woocommerce.zip"
    "https://downloads.wordpress.org/plugin/klarna-checkout-for-woocommerce.zip"
    "https://downloads.wordpress.org/plugin/woo-paystack.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-gateway-eway.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-gateway-amazon-payments-advanced.zip"
    "https://downloads.wordpress.org/plugin/afterpay-gateway-for-woocommerce.zip"
    "https://downloads.wordpress.org/plugin/zipmoney-payments-woocommerce.zip"
    "https://downloads.wordpress.org/plugin/airwallex-online-payments-gateway.zip"
    "https://downloads.wordpress.org/plugin/payoneer-checkout.zip"
    "https://downloads.wordpress.org/plugin/easyship-woocommerce-shipping-rates.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-shipstation-integration.zip"
    "https://downloads.wordpress.org/plugin/skydropx-cotizador-y-envios.zip"
    "https://downloads.wordpress.org/plugin/sendcloud-shipping.zip"
    "https://downloads.wordpress.org/plugin/packlink-pro-shipping.zip"
    "https://downloads.wordpress.org/plugin/woocommerce-services.zip"
    "https://downloads.wordpress.org/plugin/taxjar-simplified-taxes-for-woocommerce.zip"
    "https://downloads.wordpress.org/plugin/printful-shipping-for-woocommerce.zip"
)

# Download and unzip each plugin
for plugin_url in "${plugins[@]}"; do
    # Extract the file name from the URL
    filename=$(basename "$plugin_url")
    
    # Download the plugin
    curl -O "$plugin_url"
    
    # Unzip the plugin
    unzip -o "$filename" -d "./plugins"
    
    # Remove the ZIP file after extraction
    rm "$filename"
done

echo "All plugins downloaded and unzipped successfully."

