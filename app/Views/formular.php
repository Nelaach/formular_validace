<?php $db = \Config\Database::connect();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Nový zápis </title>

    <script>
function validateForm() {
  var prezdivka = document.forms["myForm"]["prezdivka"].value;
  var delka_prezdivky = prezdivka.length;
  if (delka_prezdivky < 3) {
    document.getElementById("text").innerHTML = "Přezdívka musí obsahovat minimálně 3 znaky";
    return false;
 }
  var vek = document.forms["myForm"]["vek"].value;

    if (vek < 6 || vek >200){
        document.getElementById("text").innerHTML = "Věk musí být vyšší než 6 a nižší než 200";
    return false;
    }

  
}
    </script>

</head>

<body>
    <div><br>&nbsp</div>

    <div class="container">
        <form method="post" action="<?php echo base_url('home/form') ?>" onsubmit="return(validateForm())" name="myForm">
            <h4 style="text-align: center">Nové hodnoty</h4>
            <div class="row">
                <div class="col-md-6">
                    <label>Přezdívka</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control" name="prezdivka" required>
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <label>Email</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Oblíbené číslo</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="number" class="form-control" name="oblibene_cislo" required>
                    </div>
                </div>


                <div class="col-md-6">
                    <label>Věk</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="number" class="form-control" name="vek" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text" required></textarea>

            </div>

            <select class="form-control" name="barva" id="barva">
                <?php
                $query = $db->query("SELECT * FROM barva");
                foreach ($query->getResult() as $row) { ?>
                    <option value=<?php echo $row->id ?>> <?php echo $row->nazev;
                                                        } ?></option>
            </select>

            <div>&nbsp </div>
            <label>&nbspKalendář&nbsp</label><input type="datetime-local" id="datum" name="datum">
            <div>&nbsp </div>
            <p id="text"></p>
            <div style="text-align: left">
                <button type="submit" name="register" class="btn btn-primary">Odeslat</button>
            </div>
        </form>

    </div>


</body>

</html>