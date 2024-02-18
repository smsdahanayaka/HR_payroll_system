<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boostsrap scc -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <style>
        .error_desc {
            color: red;
            font-size: 15px;
        }
    </style>
    <title>Employee Managment</title>
</head>

<body>

    <!-- boady section -->
    <section>
        <div class="container mb-2 pt-100">
            <div class="container mt-5 mb-5">
                <!-- Add Employee btn -->
                <button type="button" id="addItem" class="btn-add-itm btn btn-primary" data-toggle="modal" data-target="#addNewItem">
                    Add new Item
                </button>

            </div>
            <div class="row">
                <div class="context mt-10">

                    <!-- data table -->
                    <table id="employee-tbl" class="table mt-3">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Basic Salary</th>
                                <th>Allowns</th>
                                <th>Salary details</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <!--Add new employee Modal -->
                    <div class="modal fade" id="addNewEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add new Items</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="addEmployeeForm" enctype="multipart/form-data">
                                        <p>Personal Information</p>
                                        <hr>

                                        <div class="row">
                                            <div class="col-6">
                                                <label for="inputAddress" class="form-label">First Name</label>
                                                <input type="text" class="form-control itm-code emp_first_name" id="emp_first_name" name="first_name" required>
                                                <span style="color: red;" class="error_desc"></span>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputAddress" class="form-label">Last Name</label>
                                                <input type="text" class="form-control itm-name emp_last_name" id="emp_last_name" name="last_name" required>
                                                <span class="error_desc"></span>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Full Name</label>
                                                <input type="text" class="form-control itm-name emp_full_name" id="emp_full_name" name="full_name" required>
                                                <span class="error_desc"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address</label>
                                                <input type="text" class="form-control itm-category emp_address" id="emp_address" name="address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Contact Number</label>
                                                <input type="text" class="form-control itm-category emp_contact" id="emp_contact" name="contact_number">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Email</label>
                                                <input type="text" class="form-control itm-category emp_email" id="emp_email" name="email" required>
                                                <span class="error_desc"></span>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Nic</label>
                                                <input type="text" class="form-control itm-category emp_nic" id="emp_nic" name="nic">
                                            </div>
                                            <div class="col-12 mt-5">
                                                <label for="inputImage" class="form-label">Prfile picture</label>
                                                <div name="imagePreview" id="imagePreview"></div>
                                                <input type="file" name="imageFile" id="imageFile" accept="image/*" required>

                                            </div>
                                        </div>
                                        <br>
                                        <p>Salary Information</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <label for="inputAddress" class="form-label">Basic salary</label>
                                                <input type="text" class="form-control itm-unit emp_basic_sal" id="emp_basic_sal" name="basic_salary" required>
                                            </div>
                                            <div class="col">
                                                <label for="inputAddress" class="form-label">Allowns</label>
                                                <input type="text" class="form-control itm-unit emp_allowns" id="emp_allowns" name="allowns" required>
                                            </div>
                                        </div><br>

                                    </form>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary " id="add-employee-btn">Add
                                            Item</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- update employee -->
                    <div class="modal fade" id="updateEmployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">employee</h5>
                                    <button type="button" class="close" data-dismiss="modal" value='update' aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <p>Personal Information</p>
                                        <hr>

                                        <div class="row">
                                            <div class="col-4">
                                                <label for="inputAddress" class="form-label">Emp_id</label>
                                                <input type="text" class="form-control itm-code emp_id" id="emp_u_id" disabled>
                                            </div>
                                            <div class="col-4">
                                                <label for="inputAddress" class="form-label">First Name</label>
                                                <input type="text" class="form-control itm-code emp_first_name" id="emp_u_first_name">
                                            </div>
                                            <div class="col-4">
                                                <label for="inputAddress" class="form-label">Last Name</label>
                                                <input type="text" class="form-control itm-name emp_last_name" id="emp_u_last_name">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Full Name</label>
                                                <input type="text" class="form-control itm-name emp_full_name" id="emp_u_full_name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address</label>
                                                <input type="text" class="form-control itm-category emp_address" id="emp_u_address">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Contact Number</label>
                                                <input type="text" class="form-control itm-category emp_contact" id="emp_u_contact">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Email</label>
                                                <input type="text" class="form-control itm-category emp_email" id="emp_u_email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Nic</label>
                                                <input type="text" class="form-control itm-category emp_nic" id="emp_u_nic">
                                            </div>
                                            <div class="col-12 mt-5">
                                                <label for="inputImage" class="form-label">Prfile picture</label>
                                                <div name="imagePreview1" id="imagePreview1"></div>
                                                <input type="file" name="imageFile" id="imageFile" accept="image/*" required>
                                            </div>
                                        </div>
                                        <br>
                                        <p>Salary Information</p>
                                        <hr>
                                        <div class="row">
                                            <div class="col">
                                                <label for="inputAddress" class="form-label">Basic salary</label>
                                                <input type="text" class="form-control itm-unit emp_basic_sal" id="emp_u_basic_sal">
                                            </div>
                                            <div class="col">
                                                <label for="inputAddress" class="form-label">Allowns</label>
                                                <input type="text" class="form-control itm-unit emp_allowns" id="emp_u_allowns">
                                            </div>
                                        </div><br>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary " id="update_employee_btn">Update Item</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- boostrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js" integrity="sha384-b4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyQm1CZZdSHVlQTKcs6oUzODG2P3JIRcuk" crossorigin="anonymous">
    </script>
    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/75ad900f1b.js" crossorigin="anonymous"></script>
    <!-- bootbox js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.js"></script>

    <script>
        $(document).ready(function() {

            // view all employee in table
            var dataTable = $("#employee-tbl").DataTable({
                ajax: {
                    // url: '<?php echo base_url() ?>index.php/Employee_controller/getItemsRecord',
                    url: "<?php echo site_url('Employee_controller/getItemsRecord'); ?>",
                    type: 'GET',
                    dataType: 'json',
                    dataSrc: ''
                },
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'first_name'
                    },
                    {
                        data: 'last_name'
                    },
                    {
                        data: 'contact_number'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'basic_salary'
                    },
                    {
                        data: 'allowns'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button  class="emp_salary_dt btn-sm btn btn-act btn-primary " value=' +
                                row.id +
                                ' type="button">Salary <i class="fa-regular fa-eye"></i></i> </button>';
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button class="view-employee edit-employee btn-sm btn btn-act btn-primary " value=' +
                                row.id +
                                ' type="button"><i class="fa-solid fa-user-pen" id=""></i> </button>';
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return '<button  class="delete-employee btn-sm btn btn-act btn-danger " value=' +
                                row.id +
                                ' type="button"><i class="fa-solid fa-trash icn-dlt" ></i></td> </button>';
                        }
                    }
                ]
            });

            // add new Employee
            $(document).on("click", "#add-employee-btn", function(e) {

                e.preventDefault();
                var formData = new FormData($('#addEmployeeForm')[0]);
                // console.log(formData);
                $.ajax({
                    type: "POST",
                    // url: "<?php echo base_url() ?>index.php/Employee_controller/insertData",
                    url: "<?php echo site_url('Employee_controller/insertData'); ?>",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(resultData) {
                        // console.log("shan"+resultData.input_error);
                        // die();
                        if (!resultData.status) {

                            for (var x = 0; x < resultData.input_error.length; x++) {
                                $('[name="' + resultData.input_error[x] + '"]').siblings("span.error_desc").html(resultData.error_desc[x]).show();
                                console.log(resultData.input_error.length);
                            }

                        } else {

                            dataTable.ajax.reload();
                            bootbox.alert("Successfully added, New Employee!");
                            var modalId = "addNewEmployee";
                            // console.log(resultData.);
                            closeModal(modalId);
                        }

                    },
                });

            });

            // view employee
            $(document).on("click", ".view-employee", function() {
                $("#updateEmployee").modal("show");
                var vid = $(this).val();
                var data = {
                    id: vid,
                };
                console.log(data);
                $.ajax({
                    url: "<?php echo site_url('Employee_controller/viewById'); ?>",
                    type: "POST",
                    data: data,
                    success: function(response) {
                        
                        try {
                            var result = JSON.parse(response);
                            
                            console.log(result[0]);
                            $("#emp_u_id").val(result[0].id);
                            $("#emp_u_first_name").val(result[0].first_name);
                            $("#emp_u_last_name").val(result[0].last_name);
                            $("#emp_u_full_name").val(result[0].full_name);
                            $("#emp_u_address").val(result[0].address);
                            $("#emp_u_contact").val(result[0].contact_number);
                            $("#emp_u_email").val(result[0].email);
                            $("#emp_u_nic").val(result[0].nic);
                            $("#emp_u_basic_sal").val(result[0].basic_salary);
                            $("#emp_u_allowns").val(result[0].allowns);
                            $('#imagePreview1').html('<img src="' + result[0].profile_image +'" width="150" height="150">');
                           
                        } catch (e) {
                            
                            bootbox.alert("Error: " + response);
                        }

                    },
                });
            });

            // update employee
            $(document).on("click", "#update_employee_btn", function() {
                var empId = $("#emp_u_id").val();
                var empFName = $("#emp_u_first_name").val();
                var empLastName = $("#emp_u_last_name").val();
                var empFullName = $("#emp_u_full_name").val();
                var empAddress = $("#emp_u_address").val();
                var empContactNumber = $("#emp_u_contact").val();
                var empEmail = $("#emp_u_email").val();
                var empNic = $("#emp_u_nic").val();
                var empSalary = $("#emp_u_basic_sal").val();
                var empAllowns = $("#emp_u_allowns").val();

                var data = {
                    id: empId,
                    first_name: empFName,
                    last_name: empLastName,
                    full_name: empFullName,
                    address: empAddress,
                    contact_number: empContactNumber,
                    email: empEmail,
                    nic: empNic,
                    basic_salary: empSalary,
                    allowns: empAllowns,
                };

                console.log(data);
                $.ajax({
                    // url: "http://localhost/employee-managment/index.php/Employee_controller/updateSup",
                    url: "<?php echo site_url('Employee_controller/updateSup'); ?>",
                    type: "POST",
                    data: data,
                    success: function(response) {
                        console.log(response);
                        if (response) {
                            var result = JSON.parse(response);
                            bootbox.alert("Successfully Updated");
                            dataTable.ajax.reload();
                            $("#updateItm").modal("hide");
                        } else {
                            bootbox.alert("Eroor" + response);
                        }
                    },
                });
            });


            // delete employee
            $(document).on("click", ".delete-employee", function() {
                var did = $(this).val();
                bootbox.confirm('Are you sure, confirm!',
                    function(result) {
                        if (result) {
                            var data = {
                                id: did,
                            };
                            $.ajax({
                                type: "POST",
                                // url: "http://localhost/employee-managment/index.php/Employee_controller/deleteData",
                                url: "<?php echo site_url('Employee_controller/deleteData'); ?>",
                                data: data,
                                dataType: "text",
                                success: function(resultData) {
                                    if (resultData) {
                                        dataTable.ajax.reload();
                                        bootbox.alert("Successfully Deleted");
                                    } else {
                                        bootbox.alert("Error" + response);
                                    }
                                },
                            });
                        } else {

                        }
                    });


            });

            // employee salary
            $(document).on("click", ".emp_salary_dt", function() {
                var vid = $(this).val();
                var data = {
                    id: vid,
                };
                $.ajax({
                    // url: "http://localhost/employee-managment/index.php/Employee_controller_new/employee_15_days_sal",
                    url: "<?php echo site_url('Employee_controller_new/employee_15_days_sal'); ?>",
                    type: "POST",
                    data: data,
                    success: function(response) {


                        var result = JSON.parse(response);

                        var result = JSON.parse(response);
                        console.log(result);
                        bootbox.alert({
                            title: 'Employee Salary Details',
                            message: '<p>- Employee per day salary is: ' + result[
                                    'per_day_Salary'] + '</p> </br></hr>' +
                                '<p>- Employee 15 days salary is: ' + result[
                                    '15-day-sal'] + ' </p>',

                        });
                        // bootbox.alert("Employee per day salary is =       " + result['per_day_Salary']);


                    },
                });

            });

            // view profile pic

            $('#imageFile').change(function() {
                var file = this.files[0];

                if (file) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        var imageUrl = event.target.result;
                        $('#imagePreview').html('<img src="' + imageUrl +
                            '" width="150" height="150">');
                    };

                    reader.readAsDataURL(file);
                }
            });



            // X button funbction
            $(".close").click(function() {
                modalId = "updateEmployee";
                modalId2 = "addNewEmployee";
                closeModal(modalId1);
                closeModal(modalId2);
            });

            // close modal
            function closeModal($modalId) {
                $("#" + $modalId).modal("hide");
            }

            // show add item modal
            $("#addItem").click(function() {
                $("#addNewEmployee").modal("show");
            });

            // show update item modal
            $(".view-item").click(function() {
                $("#updateEmployee").modal("show");
            });
        });
    </script>

</body>

</html>