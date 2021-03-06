<?= $this->extend('template/layout')  ?>
<?= $this->section('content')  ?>
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->

    <hr class="mt-0 mb-4">
    <div class="row">

        <div class="col-xl-12">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="POST">
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" name="userName" id="inputUsername" type="text" placeholder="Enter your username" value="<?= !isset($userData['userName']) ?: $userData['userName']  ?>">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" name="firstName" id="inputFirstName" type="text" placeholder="Enter your first name" value="<?= !isset($userData['firstName']) ?: $userData['firstName']  ?>">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" name="lastName" id="inputLastName" type="text" placeholder="Enter your last name" value="<?= !isset($userData['lastName']) ?: $userData['lastName']  ?>">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">Location</label>
                                <input class="form-control" name="location" id="inputLocation" type="text" placeholder="Enter your location" value="<?= !isset($userData['location'])  ?: $userData['location'] ?>">
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control"  id="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?= !isset($userData['eMail']) ?: $userData['eMail'] ?>" disabled>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" name="phone" id="inputPhone" type="tel" placeholder="Enter your phone number" value="<?= !isset($userData['phone']) ?: $userData['phone'] ?>">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" name="birthDay" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="<?= !isset($userData['birthDay']) ?: $userData['birthDay'] ?>">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()  ?>