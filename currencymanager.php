<?php
require('header.php');
require('logconfig.php');
$log->addInfo("User Visited: Currency Manager");
$db = new SQLite3('hello.db');
$message="";
try {
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $ccode=$_POST['ccode'];
    $crate=$_POST['crate'];
    $query="INSERT INTO currencies(ccode,crate) values('$ccode',$crate)";
    $r = $db->query($query);

    //echo $db->lastErrorMsg();
}
    $result = $db->query('SELECT * FROM currencies');

}catch(Exception $e)
{
    var_dump($e);
}


?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h5 id="error"><?php echo $message;?></h5>
                <h2>Add Currency Form</h2>
                <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                        <label>Currency Code</label>
                        <input type="text" class="form-control" id="ccode" name="ccode"/>
                    </div>
                    <div class="form-group">
                        <label>Exchange Rate</label>
                        <input type="number" step="0.001" class="form-control" id="crate" name="crate"/>
                    </div>
                    <input type="submit" class="btn btn-success" />
                    <input type="reset" class="btn btn-warning" />
                </form>


            </div>
        </div>
        <div class="row">
            <hr />
            <div class="col-md-6 col-md-offset-3">
                <h2>Existing Currency Table</h2>
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <td>Currency Code</td>
                        <td>Currency Rate(USD)</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($currency = $result->fetchArray()) {
                        echo "<tr>";
                        echo "<td>".$currency['ccode']."</td>";
                        echo "<td>".$currency['crate']."</td>";

                        echo "</tr>";
                    }


                    ?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>


<?php
require('footer.php');
?>