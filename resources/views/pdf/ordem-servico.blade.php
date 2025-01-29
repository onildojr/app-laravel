<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Imprimir OS</title>
    <link href="assets/img/favicon.svg" rel="icon" type="image/svg+xml">
    <!-- <link href="assets/css/print.css" rel="stylesheet"> -->
    <style>
.w-25 {
            width: 25%;
        }

        .w-40 {
            width: 40%;
        }

        .w-30 {
            width: 30%;
        }

        .w-35 {
            width: 35%;
        }

        .w-50 {
            width: 50%;
        }

        .w-15 {
            width: 15%;
        }

        .w-100 {
            width: 100%;
        }

        .logo {
            height: 1.5cm;
        }

        .ta-right {
            text-align: right;
        }

        .ta-center {
            text-align: center;
        }

        .mp-20 {
            padding-top: 20px;
        }

        .mp-50 {
            padding-top: 50px;
        }

        .va-top {
            vertical-align: top;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        body {
            -webkit-print-color-adjust: exact;
            font-size: 8pt;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td {
            text-align: left;
            word-wrap: break-word;
        }
        td {
            width: 15%;
        }
        .no-border {
            border: none;
        }
        .signature {
            height: 50px;
        }
        img {
            max-height: 2.5cm;
        }
        .logo {
            height: 0.9cm;
        }
        .tag {
            font-size: 7.5pt;
        }
        hr {
            border: none;
            border-top: 1px solid #000;
            margin: 10px 0 5px 0;
            width: 100%;
        }
    </style>
</head>

<body>

<table>
    <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-25">
                        <img src="assets/img/print/logo-erevendedor.png" class="logo" alt="Sistograf">
                    </td>
                    <td class="w-50">
                        <h3>eRevendedor</h3>
                        <p><strong>Nome:</strong> Jonas Souza Ferreira<br>
                            <strong>Telefone:</strong> (31) 99162-2057<br>
                            <strong>E-mail:</strong> jonas_souza18@hotmail.com</p>
                    </td>
                    <td class="w-25 ta-right">
                        <img src="data:image/png;base64,{{ $codigoBarras }}">
                    </td>
                </tr>
            </table>

        </td>
    </tr>

    <tr>
        <td colspan="3">
            <h3>Ordem de Serviço</h3>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td style="width: 25%;">Cliente: <strong>Fulano de Tal</strong></td>
                    <td style="width: 25%;">Data: <strong>14/12/2024</strong></td>
                    <td style="width: 25%;">Entrega: <strong>16/12/2024</strong></td>
                    <td style="width: 25%;">OS: <strong>12345</strong></td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <h3 class="mp-20">Produtos</h3>
        </td>
    </tr>

    <!-- PRODUTO: Item 001 -->
    <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-50">
                        <p><strong>Pedido: </strong> #1452 | <strong>Item: </strong> 0001</p>
                    </td>
                </tr>
            </table>
            <table class="w-100">
                <tr>
                    <td class="w-15">
                        <img src="assets/img/prod-001.png" alt="">
                    </td>

                    <td class="w-30">
                        <h4>Descrição do Item</h4>
                        <p>
                            <strong>Qtde.: </strong> 2x5000 - <strong>Ref.:</strong> pan150b<br>
                            Panfleto Couché 150g 7x10cm 4x0 5000<br>
                            <strong>Material:</strong> Papel Couché 150g/m²<br>
                        </p>
                    </td>

                    <td class="w-35">
                        <p>
                            <strong>Data de Entrega:</strong> 01/04/2019
                        </p>
                        <p>
                            <strong>Observações: </strong>
                            <p>O serviço foi realizado conforme solicitado. Recomendamos atenção à manutenção periódica do produto para garantir seu bom funcionamento. Caso haja algum problema ou dúvida, estamos à disposição para ajustes e mais esclarecimentos.</p>
                        </p>
                    </td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>
    <!-- /PRODUTO: Item 001 -->

    <!-- PRODUTO: Item 002 -->
    <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-50">
                        <p><strong>Pedido: </strong> #1452 | <strong>Item: </strong> 0001</p>
                    </td>
                </tr>
            </table>
            <table class="w-100">
                <tr>
                    <td class="w-15">
                        <img src="assets/img/prod-001.png" alt="">
                    </td>

                    <td class="w-30">
                        <h4>Descrição do Item</h4>
                        <p>
                            <strong>Qtde.: </strong> 2x5000 - <strong>Ref.:</strong> pan150b<br>
                            Panfleto Couché 150g 7x10cm 4x0 5000<br>
                            <strong>Material:</strong> Papel Couché 150g/m²<br>
                        </p>
                    </td>

                    <td class="w-35">
                        <p>
                            <strong>Data de Entrega:</strong> 01/04/2019
                        </p>
                        <p>
                            <strong>Observações: </strong>
                            <p>O serviço foi realizado conforme solicitado. Recomendamos atenção à manutenção periódica do produto para garantir seu bom funcionamento. Caso haja algum problema ou dúvida, estamos à disposição para ajustes e mais esclarecimentos.</p>
                        </p>
                    </td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>
    <!-- /PRODUTO: Item 002 -->

    <!-- PRODUTO: Item 003 -->
    <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-50">
                        <p><strong>Pedido: </strong> #1452 | <strong>Item: </strong> 0001</p>
                    </td>
                </tr>
            </table>
            <table class="w-100">
                <tr>
                    <td class="w-15">
                        <img src="assets/img/prod-001.png" alt="">
                    </td>

                    <td class="w-30">
                        <h4>Descrição do Item</h4>
                        <p>
                            <strong>Qtde.: </strong> 2x5000 - <strong>Ref.:</strong> pan150b<br>
                            Panfleto Couché 150g 7x10cm 4x0 5000<br>
                            <strong>Material:</strong> Papel Couché 150g/m²<br>
                        </p>
                    </td>

                    <td class="w-35">
                        <p>
                            <strong>Data de Entrega:</strong> 01/04/2019
                        </p>
                        <p>
                            <strong>Observações: </strong>
                            <p>O serviço foi realizado conforme solicitado. Recomendamos atenção à manutenção periódica do produto para garantir seu bom funcionamento. Caso haja algum problema ou dúvida, estamos à disposição para ajustes e mais esclarecimentos.</p>
                        </p>
                    </td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>
    <!-- /PRODUTO: Item 003 -->

    <!-- <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-50 va-top">
                        <h4>Observações Internas</h4>
                        <p>O serviço foi realizado conforme solicitado. Recomendamos atenção à manutenção periódica do produto para garantir seu bom funcionamento. Caso haja algum problema ou dúvida, estamos à disposição para ajustes e mais esclarecimentos.</p>
                    </td>
                    <td class="w-50 va-top">
                        <h4>Observações do Produto</h4>
                        <p>Antes de realizar a compra, verifique as especificações do produto, como tamanho, cor e material, para garantir que atende às suas necessidades. Aconselha-se ler as avaliações de outros clientes e conferir as políticas de troca e devolução. Em caso de dúvidas, entre em contato com o suporte.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr> -->
    <br><br>

    <tr class="footer">
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-50 ta-center va-bottom">
                        <p>_________________________________________<br><br>
                            Assinatura Prestador</p>
                    </td>
                    <td class="w-50 ta-center va-bottom">
                        <p>_________________________________________<br><br>
                            Assinatura Cliente</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>


</table>

</body>
</html>