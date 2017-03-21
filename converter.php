<?php
require('header.php');

$log->addInfo("User Visited: Converter Page");

try {
    $db = new SQLite3('hello.db');

   $result = $db->query('SELECT * FROM currencies');
//    $currencies = $result->fetchAll();
//    var_dump($currencies);
}catch(Exception $e)
{
    var_dump($e);
}


?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h5 id="error"></h5>
            <form class="form-horizontal">
                <div class="form-group">
                    <label>Convert From</label>
                    <select class="form-control fromto" id="from" name="from">
                        <?php
                        echo "<option value='nothing'>Select</option>";
                        while($currency = $result->fetchArray()) {

                            echo "<option value='".$currency['ccode']."'>".$currency['ccode']."</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Convert To</label>
                    <select class="form-control fromto" id="to" name="to">
                        <?php
                        echo "<option value='nothing'>Select</option>";
                        while($currency = $result->fetchArray()) {

                            echo "<option value='".$currency['ccode']."'>".$currency['ccode']."</option>";
                        }

                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Enter Value</label>
                    <input type="number" name="currency" id="currency" class="form-control"/>
                </div>
            </form>
            <h5 id="results"></h5>

        </div>
    </div>

</div>


<?php
require('footer.php');
?>