<?php
require('connection.inc.php');
require('functions.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Buy POS - Dashboard</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body onload="initClock()">
    <section class="dashboard">
        <div class="dash_head">
            <p><span class="head_t">Best Buy POS ->> User Site:-</span><span class="head_n"> Bbuy Jamgora Ashlia</span> <span class="head_status"> [Site Id : 12729] Status:153</span></p>
        </div>
        <nav class="nav">
            <ul class="navbar">
                <li> <a href="javascript:void(0)">File</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)" onclick="openTab(event, 'defaultOpendiv')" id="defaultOpen">Defalut</a> </li>
                            <li> <a href="javascript:void(0)">Exit</a> </li>
                            <li> <a href="javascript:void(0)">Close All</a> </li>
                            <li> <a href="./logout.php">Logout</a> </li>
                            <li> <a href="javascript:void(0)" onclick="openTab(event, 'notification')">Notification</a> </li>
                            <li> <a href="javascript:void(0)" onclick="openTab(event, 'changePassword')">Change Password</a> </li>
                            <li> <a href="javascript:void(0)">Permission Reload</a> </li>
                        </div>
                    </ul>
                </li>
                <li> <a href="javascript:void(0)">Master Setup</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)">Item</a> </li>
                            <li> <a href="javascript:void(0)">Outlet Master</a> </li>
                            <li> <a href="javascript:void(0)">Program / Incentive</a> </li>
                            <li> <a href="javascript:void(0)">Loyalty Cards</a> </li>
                        </div>
                    </ul>
                </li>
                <li> <a href="javascript:void(0)">Sales and Distribution</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)">Advance</a> </li>
                            <li> <a href="invoice.php" target="_blank">Invoice</a> </li>
                            <li> <a href="javascript:void(0)">Invoice Special Discount</a> </li>
                            <li> <a href="javascript:void(0)">Sales Return</a> </li>
                        </div>
                    </ul>
                </li>
                <li> <a href="javascript:void(0)">Inventory</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)">Damage Entry</a> </li>
                            <li> <a href="javascript:void(0)">Transfer Out (TO)</a> </li>
                            <li> <a href="javascript:void(0)" onclick="openTab(event, 'TransferIn')">Transfer In (TI)</a> </li>
                            <li> <a href="javascript:void(0)">Process OC for TO</a> </li>
                            <li> <a href="javascript:void(0)">Web DO Entry</a> </li>
                            <li> <a href="javascript:void(0)">Process SR RFL</a> </li>
                            <li> <a href="javascript:void(0)">Process MR RFL</a> </li>
                            <li> <a href="javascript:void(0)">Expense Entry</a> </li>
                        </div>
                    </ul>
                </li>
                <li> <a href="javascript:void(0)">Reports</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)">Sales</a> </li>
                            <li> <a href="javascript:void(0)">Inventory and Purchase</a> </li>
                            <li> <a href="javascript:void(0)">Item Balance</a> </li>
                            <li> <a href="javascript:void(0)">Damage</a> </li>
                            <li> <a href="javascript:void(0)">SPD & COD Report</a> </li>
                            <li> <a href="javascript:void(0)">Expense Report</a> </li>
                        </div>
                    </ul>
                </li>
                <li> <a href="javascript:void(0)">Maintenance</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)">Fixed Asset</a> </li>
                        </div>
                    </ul>
                </li>
                <li> <a href="javascript:void(0)">Administrator</a></li>
                <li> <a href="javascript:void(0)">Help</a>
                    <ul class="submenu1">
                        <div class="nav_gap"></div>
                        <div class="submenu1allitem">
                            <li> <a href="javascript:void(0)">Setup Note</a> </li>
                            <li> <a href="javascript:void(0)">Attendence</a> </li>
                            <li> <a href="javascript:void(0)">Warranty Link - RAC</a> </li>
                            <li> <a href="javascript:void(0)">Warranty Link - THA</a> </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="dash_body">
            <div id="defaultOpendiv defaultOpen" class="tab_content">Defalut Open</div>
            <div id="notification" class="tab_content"></div>
            <div id="changePassword" class="tab_content">Change Password</div>
            <div id="TransferIn" class="tab_content"><?php require('./pages/TransferIN.php') ?></div>
        </div>
        <?php require'./pages/footer.php' ?>
    </section>
    <script src="./js/app.js"></script>
</body>

</html>