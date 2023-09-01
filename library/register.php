<?php
session_start();

require_once("./inc/function.php");
require_once("./inc/header.php");
?>
<div class="container">
    <h1>Page d'inscription</h1>
    <form action="./model/db_register.php" method="post">

        <div class="form-group">
            <label>civility :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="civility" id="man" value="man">
                <label class="form-check-label" for="man">Man </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="civility" id="woman" value="woman">
                <label class="form-check-label" for="woman">Woman </label>
                </div>
            </div>

            <div class="form-group">
                <label for="firstname">Firstname :</label>
                <input type="text" class="form-control" id="firstname" name="firstname" required>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname :</label>
                <input type="text" class="form-control" id="lastname" name="lastname" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <input type="password" name="passwords" placeholder="Your password :" class="passwords">
            </div>

            <div class="form-check">
                <label for="country">Country :</label>
                <select class="form-control" id="country" name="country">
                    <option value="france">France</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-check">
                <label class="form-check-label" for="phone">Your phone number</label>
                <input class="form-check-input" type="number" id="phone" name="phone">
            </div>

            <div class="form-check">
            <label class="form-check-label" for="birthday">Your birthday</label>
                <input class="form-check-input" type="date" id="birthday" name="birthday">
            </div>

            <div class="form-group">
                <label for="messages">Messages :</label>
                <textarea class="form-control" id="messages" name="messages" rows="4" required></textarea>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="conditions" name="conditions" value="oui">
                <label class="form-check-label" for="conditions">Conditions</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
        </div>           
    </form>
</div>        
<?php
require_once("./inc/footer.php");
?>