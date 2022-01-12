<?php
$title = 'Home';
$homeCurrent = "(current)";
$attendeesCurrent = '';
require_once './includes/header.php';
require_once './db/db_config.php';


$crudSpecialtiesResult = $crud->getSpecialties();
?>

    <h1 class="text-center my-5">IT Conference Registration</h1>

    <form method="post" action="./success.php">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input required type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp"
                   placeholder="Enter First Name">
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input required type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp"
                   placeholder="Enter Last Name">
        </div>

        <div class="mb-3">
            <label for="dateOfBirth" class="form-label">Date Of Birth</label>
            <input type="date" value="2000-01-22" min="1900-01-01" max="2004-1-1" class="form-control" id="dateOfBirth"
                   name="dateOfBirth">
        </div>

        <div class="mb-3">
            <label for="specialty" class="form-label">Area Of Expertise</label>
            <select id="specialty" name="specialty" class="form-select" aria-label="Default select example">
                <!-- get value in the 'name', 'id' column from res arr -->
                <?php while ($r = $crudSpecialtiesResult->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input required type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input required type="phone" class="form-control" id="phone" name="phone">
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>

        <div id="emailHelp" class="form-text">We'll never share your information with anyone.</div>
    </form>

<?php
require_once './includes/footer.php'
?>