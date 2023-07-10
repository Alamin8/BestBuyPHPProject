<?php
require('connection.inc.php');
if (isset($_POST['TIsubmit'])) {
    $files = $_FILES['doc']['tmp_name'];

    $ext = pathinfo($_FILES['doc']['name'], PATHINFO_EXTENSION);
    if ($ext == 'xlsx' || $ext == 'xls') {

        require('./assests/phplibrary/PHPExcel.php');
        require('./assests/phplibrary/PHPExcel/IOFactory.php');

        $obj = PHPExcel_IOFactory::load($files);
        foreach ($obj->getWorksheetIterator() as $sheet) {
            $getHighestRow = $sheet->getHighestRow();
            for ($i = 0; $i < $getHighestRow; $i++) {
                $item_code = $sheet->getCellByColumnAndRow(0, $i)->getValue();
                $product_name = $sheet->getCellByColumnAndRow(1, $i)->getValue();
                $product_group = $sheet->getCellByColumnAndRow(2, $i)->getValue();
                $stoc = $sheet->getCellByColumnAndRow(3, $i)->getValue();
                $mrp = $sheet->getCellByColumnAndRow(4, $i)->getValue();
                if($item_code != ''){
                    mysqli_query($con, "insert into products (item_code, product_name, product_group, stoc, mrp) values ('$item_code', '$product_name', '$product_group', '$stoc', '$mrp')");
                }
            }
        }
    }else{
        echo "Unsupported Formet";
      
    }
}
header('Location: dashboard.php');

?>