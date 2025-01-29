<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Imprimir Recibo</title>
    <link href="assets/img/favicon.svg" rel="icon" type="image/svg+xml">
    <!-- <link href="assets/css/print.css" rel="stylesheet"> -->
    <style>
        .w-25 {
            width: 25%;
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
            height: 0.9cm;
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
                    <td class="w-25">
                        <h3>eRevendedor</h3>

                        <p><strong>Nome:</strong> Jonas Souza Ferreira<br>
                            <strong>CNPJ: </strong> 17.212.923/0001-00<br>
                            Rua Diamantina, 72 - Sala 103 - Centro<br>
                            Ipatinga - MG - 35160-019</p>
                    </td>
                    <td class="w-25">
                        <p><strong>Telefone:</strong> (31) 99162-2057<br>
                            <strong>E-mail:</strong> jonas_souza18@hotmail.com</p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>


    <tr>
        <td colspan="3">
            <hr>
            <table class="w-100">
                <tr>
                    <td class="w-50">
                        <h1>Recibo</h1>
                    </td>
                    <td class="w-50 ta-right">
                        <h1>R$ 106,01</h1>
                    </td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <p>Recebi(emos) de Kriativando Gráfica Digital, CNPJ 27.122.012/0001-45, a importância de R$ 106,01 (cento e seis reais e um centavo), referente à venda 305.</p>
            <p>Para maior clareza, firmo(amos) o presente.</p>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <table class="w-100">
                <tr>
                    <td class="w-50 ta-center va-bottom">
                        <p class="mp-50">Ipatinga (MG), 10 de outubro de 2019.</p>
                        <p class="mp-20">_________________________________________<br><br>
                            Jonas Souza Ferreira<br>
                            CNPJ: 17.212.923/0001-00
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>
</html>