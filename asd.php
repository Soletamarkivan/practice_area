<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl ">
                                        <div class="modal-content">
                                            <div class="modal-header ">
                                                <h5 class="modal-title" id="exampleModalLabel">CREATE TEIS</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>


                                            <!-- START MODAL HERE -->
                                            <div class="modal-body">
                                                <form id="add_teis">

                                                    <div class="modal-body p-0 m-0 ">
                                                        <div class="form-group text-right  text-dark" style="font-weight:bolder; font-size:13px">
                                                            <!-- <label>DATE</label> -->
                                                            <?php
                                                            echo date('F d, Y');
                                                           


                                                            ?>

                                                        </div>

                                                        <div class="row">
                                                            <!-- FIRST ROW -->
                                                            <div class="col-6">
                                                                <div class="form-group" style="font-weight:bolder ">
                                                                    <label>Company</label>

                                                                    <select name="company" class="form-control " id="company">
                                                                        <option value="" id="company" selected disabled>Choose Company</option>

                                                                        <?php


                                                                        $result = mysqli_query($db_connect, "SELECT * FROM company");
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id']; ?>">
                                                                                <?php echo $row["company_name"]; ?></option>
                                                                        <?php
                                                                        }

                                                                        ?>

                                                                    </select>

                                                                </div>



                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Borrower Name</label>


                                                                    <select name="borrower" class="form-control" id="borrower_name">
                                                                        <option value="">Choose Company First</option>

                                                                    </select>
                                                                </div>

                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Item Description</label>


                                                                    <input type="text" name="item_desc" id="item_desc" class="form-control" placeholder="Choose item code first" disabled>
                                                                </div>



                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>TEIS #</label>


                                                                    <input type="text" name="teis_no" id="teis_no" class="form-control" placeholder="TEIS No.">
                                                                </div>

                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Quantity</label>


                                                                    <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantity">
                                                                </div>

                                                            </div>




                                                            <!-- SECOND ROW -->

                                                            <div class="col-6">
                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Department</label>


                                                                    <select name="department" class="form-control" id="department">
                                                                        <option value="">Choose Company First</option>

                                                                    </select>
                                                                </div>


                                                                <div class="form-group " style="font-weight:bolder">
                                                                    <label>Item Code</label>
                                                                    <select name="item_code" class="form-control" id="item_code">
                                                                        <option value="" id="txtcomp_view" selected disabled>Item Code</option>
                                                                        <?php

                                                                        $result = mysqli_query($db_connect, 'SELECT * FROM item_code');
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id'] ?>">
                                                                                <?php echo $row['item_code_name']; ?>
                                                                            </option>
                                                                        <?php
                                                                        }
                                                                        ?>


                                                                    </select>
                                                                </div>

                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Unit</label>

                                                                    <select name="unit" class="form-control" id="unit">
                                                                        <option value="" id="unit">Unit</option>
                                                                        <?php

                                                                        include "db_connection.php";
                                                                        $result = mysqli_query($db_connect, "SELECT * FROM unit");
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id']; ?>">
                                                                                <?php echo $row["unit_name"]; ?></option>
                                                                        <?php
                                                                        }

                                                                        ?>

                                                                    </select>
                                                                    <!-- <input type="text" name="unit" id="unit" class="form-control" placeholder="Unit"> -->
                                                                </div>







                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Purpose</label>


                                                                    <input type="text" name="purpose" id="purpose" class="form-control" placeholder="Purpose">
                                                                </div>






                                                                <div class="form-group" style="font-weight:bolder">
                                                                    <label>Prepared by</label>

                                                                    <!-- <label>Company</label> -->
                                                                    <select name="company" class="form-control" id="prepared_by">
                                                                        <option value="" id="txtcomp_view">Please Choose</option>

                                                                        <?php


                                                                        $result = mysqli_query($db_connect, "SELECT users.id, users.first_name, users.last_name FROM `users` LEFT JOIN department on users.department_id = department.id WHERE department.department_name LIKE '%WAREHOUSE%';");
                                                                        while ($row = mysqli_fetch_array($result)) {
                                                                        ?>
                                                                            <option value="<?php echo $row['id']; ?>">
                                                                                <?php echo $row["first_name"] . ' ' . $row['last_name'] ?></option>
                                                                        <?php
                                                                        }

                                                                        ?>
                                                                    </select>
                                                                </div>


                                                            </div>









                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 form-group text-center" style="font-weight:bolder">
                                                                <label>Item Barcode</label>
                                                                <br>

                                                                <svg id="barcode"> </svg>
                                                            </div>

                                                        </div>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-info">Create TEIS</button>

                                                    </div>
                                                </form>


                                            </div>

                                            
                                            <!-- END MODAL HERE -->
                                        </div>
                                    </div>
                                </div>