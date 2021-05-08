<?php
declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кредитный калькулятор</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

</head>
<body>
<div class="container">
    <div class="sample">
        <div class="cake">
            <div id="form-wrapper">

                <h2>Кредитный калькулятор.</h2>
                <form id="calculate-loan" method="post" action="pdf.php">

                    <table>
                        <tr>
                            <td>
                                <div class="q-checkbox__label q-anchor--skip">Я получаю зп/пенсию на карту РНКБ</div>
                            </td>
                            <td><input type="checkbox" checked name="zp"
                                       class="hidden q-checkbox__native absolute q-ma-none q-pa-none"></td>

                        </tr>
                        <tr>
                            <td><label for="curren">Цель получения кредита:</label></td>
                            <td>
                                <select class="form-select" id="curren" name="curren">
                                    <?php
                                    $db = new PDO('sqlite:calculator.sqlite');
                                    $result = $db->query('SELECT * FROM purpose_loan');
                                    foreach ($result as $row) { ?>
                                        <option><?php
                                            echo $row['row']; ?></option>

                                        <?php
                                    } ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="currency">Валюта:</label></td>
                            <td>
                                <select v-model="convertfrom" id="currency" name="currency">
                                    <option v-for="(a, index) in currencyfrom" v-bind:value="a.name">{{a.desc}}</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="vehicle_value">Сумма кредита:</label></td>
                            <td><input class="form-control" type="number" id="vehicle_value" v-model.number="amount"
                                       name="vehicle_value">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="months">Months:</label></td>
                            <td><input class="form-control" type="number" step="1" id="months" v-model.number="amount1"
                                       name="months"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submit" value="Submit"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submitPDF" value="SubmitPDF"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="btn btn-primary" type="submit" name="submitXLSX" value="SubmitXLSX"></td>
                        </tr>


                    </table>
                    <span> Сумма кредита:{{amount}} {{convertfrom}} Eжемесячный платёж: {{finalamount}} {{convertfrom}}
            Переплата: {{finalamount1}} {{convertfrom}}</span>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
<script src="js/vue.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</html>