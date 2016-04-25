SELECT payments.TRANSACTIONID, payments.PAYMENTTYPE, payments.PAYMENTAMOUNT
FROM payments
INNER JOIN orders
ON orders.ORDERID=payments.ORDERID;
