<?php

interface PaymentProcessor {
    public function processPayment(float $amount): bool;
    public function refundPayment(float $amount): bool; 
}

abstract class OnlinePaymentProcessor implements PaymentProcessor{
    public function __construct(
        protected string $apiKey
    ){}

    abstract protected function validateApiKEy():bool;
    abstract protected function excecutePayment(float $amount): bool;
    abstract protected function excecuteRefund(float $amount): bool;    

    public function processPayment(float $amount): bool{
        if(!$this->validateApiKEy()){
            throw new Exception("Invalid API Key");
        }
        return $this->excecutePayment($amount);
    }

    public function refundPayment(float $amount): bool{
        if(!$this->validateApiKEy()){
            throw new Exception("Invalid API Key");
        }
        return $this->excecuteRefund($amount);
    }
}

class StripeProcessor extends OnlinePaymentProcessor {
    protected function validateApiKEy():bool{
        return strpos($this->apiKey, 'sk_') === 0;
    }
    protected function excecutePayment(float $amount): bool{
        echo "Processing Stripe Payment of $amount\n";
        return true;
    }
    protected function excecuteRefund(float $amount): bool{
        echo "Refund Stripe Payment of $amount\n";
        return true;
    }
}
class PaypalProcessor extends OnlinePaymentProcessor {
    protected function validateApiKEy():bool{
        return strlen($this->apiKey) === 32;
    }
    protected function excecutePayment(float $amount): bool{
        echo "Processing Paypal Payment of $amount\n";
        return true;
    }
    protected function excecuteRefund(float $amount): bool{
        echo "Refund Paypal Payment of $amount\n";
        return true;
    }
}

class CashPaymentProcessor implements PaymentProcessor {
    public function processPayment(float $amount): bool{
        echo "Cash...";
        return true;
    }
    public function refundPayment(float $amount): bool{
        echo "Refund...";
        return true;
    }
}

class orderProcessor 
{
    public function __construct(private PaymentProcessor $paymentProcessor){}

    public function processOrder(float $amount): void
    {
        // ...
        if($this->paymentProcessor->processPayment($amount)){
            echo "Order processed successfully\n";
        }else {
            echo "Order processing failed\n";
        }
    }

    public function refundOrder(float $amount): void
    {
        if($this->paymentProcessor->refundPayment($amount)){
            echo "Order refund successfully\n";
        } else {
            echo "Order refund failed\n";
        }
    }
}

$processor = new StripeProcessor("sk_");
$processor->processPayment(500);

$stripeProcessor = new StripeProcessor("sk_test_123456");
$paypalProcessor = new PaypalProcessor("valid_paypal_api_key_32charslong");
$cashProcessor = new CashPaymentProcessor();

$stripeOrder = new OrderProcessor($stripeProcessor);
$paypalOrder = new OrderProcessor($paypalProcessor);
$cashOrder = new OrderProcessor($cashProcessor);

$stripeOrder->processOrder(100.0);
$paypalOrder->processOrder(150.00);
$cashOrder->processOrder(50.00);

$stripeOrder->refundOrder(25.00);
$paypalOrder->refundOrder(50.00);
$cashOrder->refundOrder(10.00);