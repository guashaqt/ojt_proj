

<!-- Main Content 
<div id="content">
<div class="container">
    <form method="POST">
    <div class="form-group">
        <label> First Name </label>
        <input type="text" name="firstname" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>
<div class="form-group">
        <label> Middle Name </label>
        <input type="text" name="firstname" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>
<div class="form-group">
        <label> Last Name </label>
        <input type="text" name="lastname" class="form-control"/>
        <span><?= form_error('lastname') ?></span>
</div>

<div class="form-group">
        <label> Address </label>
        <input type="text" name="firstname" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>
<div class="form-group">
        <label> Purok </label>
        <input type="text" name="firstname" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>
<div class="form-group">
        <label> Sex </label>
        <input type="text" name="firstname" class="form-control"/>
        <span><?= form_error('firstname') ?></span>
</div>

<div class="form-group">
        <label> Birth Date </label>
        <input type="date" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
        <label> Birth Place </label>
        <input type="text" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
        <label> Contact </label>
        <input type="text" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
        <label> Nationality </label>
        <input type="text" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
        <label> Civil  Status </label>
        <input type="text" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>
<div class="form-group">
        <label> Religion </label>
        <input type="text" name="birth_date" class="form-control"/>
        <span><?= form_error('birth_date') ?></span>
</div>


<div class="form-group">
    <button class="btn btn-primary"> Add Resident </button>
</div>
</form>
</div>
</div>-->

<!-- Main Content -->
<!-- Main Content -->
<div id="content">
    <div class="container">
        <br>
        <br>
        <br>
        <h2 class="text-center">RESIDENT INFORMATION</h2>
        <br>
        <br>

        <form method="POST">
            <div class="form-row">
                <div class="form-group col">
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required />
                    <span><?= form_error('firstname') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="middlename">Middle Name:</label>
                    <input type="text" name="middlename" id="middlename" class="form-control" required />
                    <span><?= form_error('middlename') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required />
                    <span><?= form_error('lastname') ?></span>
                </div>
            </div>
            <br>

            <div class="form-row">
                <div class="form-group col">
                    <label for="purok">Purok:</label>
                    <select name="purok" id="purok" class="form-control" required>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                    <span><?= form_error('purok') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="street">Street Name:</label>
                    <input type="text" name="streetname" id="street" class="form-control" required />
                    <span><?= form_error('street') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="barangay">Barangay:</label>
                    <input type="text" name="barangay" id="barangay" class="form-control" required />
                    <span><?= form_error('barangay') ?></span>
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="form-group col">
                    <label for="sex">Sex:</label>
                    <select name="sex" id="sex" class="form-control" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span><?= form_error('sex') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="birth_date">Birth Date:</label>
                    <input type="date" name="birth_date" id="birth_date" class="form-control" required />
                    <span><?= form_error('birth_date') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="birth_place">Birth Place:</label>
                    <input type="text" name="birth_place" id="birth_place" class="form-control" required />
                    <span><?= form_error('birth_place') ?></span>
                </div>
            </div>
            <br>

            <div class="form-row">
                <div class="form-group col">
                    <label for="contact">Contact:</label>
                    <input type="text" name="contact" id="contact" class="form-control" required />
                    <span><?= form_error('contact') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="nationality">Nationality:</label>
                    <input type="text" name="nationality" id="nationality" class="form-control" required />
                    <span><?= form_error('nationality') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="civil_status">Civil Status:</label>
                    <select name="civil_status" id="civil_status" class="form-control" required>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="widowed">Widowed</option>
                        <option value="divorced">Divorced</option>
                    </select>
                    <span><?= form_error('civil_status') ?></span>
                </div>
                <br>
                <div class="form-group col">
                    <label for="religion">Religion:</label>
                    <input type="text" name="religion" id="religion" class="form-control" required />
                    <span><?= form_error('religion') ?></span>
                </div>
            </div>
            <br>
            <div class="form-group text-center">
                <button class="btn btn-primary">Add Resident</button>
            </div>
        </form>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

