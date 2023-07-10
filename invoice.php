<?php
require('connection.inc.php');
require('functions.inc.php');
require('redirectlink.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Buy POS - Invoice</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section class="dashboard" id="invoice">
        <div class="dash_head invoice_head">
            <p><img src="./assests/images/invoice.png"> <span> Direct Sales</span></p>
        </div>
        <div class="someMargin"></div>
        <div class="dash_body" id="invoice_body">
            <div class="invoice_body_lt">
                <div class="invoice_panel">
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label">Company</label>
                        <div class="panel_row_mix">
                            <select class="companyName selectTag">
                                <option selected>DLCL</option>
                            </select>
                            <label class="labelTag">OC Date</label>
                            <p class="selectTag ocdate"><span>08/09/2022</span><span>09:51 PM</span></p>
                            <select class="computerN selectTag">
                                <option selected>COM5</option>
                            </select>
                            <label class="labelTag sexecutive">S. Executive</label>
                            <select class="sexecutiveId selectTag">
                                <option selected></option>
                            </select>
                        </div>
                    </div>
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label">Depot</label>
                        <div class="panel_row_mix">
                            <select class="depotName selectTag">
                                <option selected>BBUY JAMGORA  ASHULIA</option>
                            </select>
                            <label class="labelTag salesIdName">Sales Id</label>
                            <select class="salesId selectTag">
                                <option selected>12729</option>
                            </select>
                            <label class="labelTag ">Fiter Man</label>
                            <select class="fiterMan selectTag">
                                <option selected></option>
                            </select>
                        </div>
                    </div>
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label">Distributer</label>
                        <div class="panel_row_mix">
                            <select class="distributeCode selectTag">
                                <option selected>70849</option>
                            </select>
                            <select class="distributerName selectTag">
                                <option selected>Best Buy-Jamgora_Ashulia</option>
                            </select>
                            <input type="checkbox" class="dcheck">
                            <label class="labelTag ">D Date</label>
                            <select class="dDate selectTag">
                                <option selected>08/09/2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label">Note</label>
                        <div class="panel_row_mix">
                            <input type="text" class="note selectTag">
                            <label class="labelTag ">Customer</label>
                            <select class="customer selectTag">
                                <option selected>None</option>
                            </select>
                        </div>
                    </div>
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label">Pay type</label>
                        <div class="panel_row_mix">
                            <select class="paytype selectTag">
                                <option selected></option>
                            </select>
                            <label class="labelTag ">Customer No</label>
                            <select class="customerN selectTag">
                                <option selected></option>
                            </select>
                            <input type="text" class="customerB selectTag">
                        </div>
                    </div>
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label">Customer Id</label>
                        <div class="panel_row_mix">
                            <select class="customerid selectTag">
                                <option selected></option>
                            </select>
                            <p class="CI ocdate">CI</p>
                            <label for="" class="panel_row_label mobileNL">Mobole No</label>
                            <input type="text" class="mobileN selectTag">
                            <label for="" class="panel_row_label mobileNL">CN / Email</label>
                            <input type="text" class="email selectTag">
                        </div>
                    </div>
                    <div class="invoice_panel_row">
                        <label for="" class="panel_row_label"></label>
                        <div class="panel_row_mix">
                            <label class="labelTag currentMath ">Current Math</label>
                            <p class="CurrentMathV ocdate">0</p>
                            <label class="labelTag emei">IMEI Help</label>
                            <input type="checkbox" class="dcheck">
                            <label class="labelTag"> D (%)</label>
                            <label class="labelTag Ucode"> U code</label>
                            <p class="CIA ocdate"></p>
                            <p class="CIB ocdate">0</p>
                        </div>
                    </div>
                </div>
                <div class="search_panel">
                    <input type="text" class="search_item_code">
                </div>
                <div class="invoice_item">

                </div>
            </div>
            <div class="invoice_body_rt">

            </div>
        </div>
        <div class="invoice_footer"></div>
    </section>
</body>

</html>