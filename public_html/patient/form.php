<div class="container mt-5">
    <div class="row ">
        <div class="col-6">
            <div class="card text-white bg-info  " style="max-width: 25rem;">
                <div class="card-header">Patient Service</div>
                <div class="card-body">

                    <h5 class="card-title">Health Quiries</h5>
                    <div class="col-8">
                        <form action="foodchartconn.php" method="post">
                            <label for="healthcondition" class="form-label mt-3">Healthcondition</label>
                            <select class="form-control" name="healthcondition" id="healthcondition">
                                <option selected> select</option>
                                <option value="Daibetic">Daibetic</option>
                                <option value="Heart Issue">Heart Issue</option>
                                <option value="Blood Pressure Problem">Blood Pressure Problem</option>
                                <option>Fatty Liver</option>
                            </select>
                            <button class="btn btn-dark mt-3 mb-5" name="submit">Submit</button>


                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>