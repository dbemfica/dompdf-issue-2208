# PROBLEM

When you create an instance of the class **iio\libmergepdf\Merger** after the class **Dompdf\Dompdf** the string count does not work correctly.

## Exemple
I modify the **loadHtml** method of the **Dompdf\Dompdf** class to debug.
![IMAGE1](https://raw.githubusercontent.com/dbemfica/dompdf-issue-2208/master/image1.png)
![IMAGE2](https://raw.githubusercontent.com/dbemfica/dompdf-issue-2208/master/image2.png)

The string "&lt;p>A assinatura deste TERMO DE CONTRATAÇÃO representa expressa concordância do CLIENTE às cláusulas do CONTRATO DE PRESTAÇÃO DE SERVIÇOS DE COMUNICAÇÃO MULTIMÍDIA&lt;/p>" have lenght **166** but line **429** is showing **177** only line **430** is showing the correct value


## File index
```php
<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
use iio\libmergepdf\Merger;

$html = '<p>A assinatura deste TERMO DE CONTRATAÇÃO representa expressa concordância do CLIENTE às cláusulas do CONTRATO DE PRESTAÇÃO DE SERVIÇOS DE COMUNICAÇÃO MULTIMÍDIA</p>';

$dompdf = new Dompdf();

$merger = new Merger(); //this class is causing the problem

$dompdf->loadHtml($html);
```
 > If you comment on line **10** you will see that it solves the issue