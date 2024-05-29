<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        th,
        td {
            text-align: center;
        }

        .hide {
            display: none;
        }

        .data_id {
            text-align: center;
        }
    </style>
    <title>PHP - AJAX - CRUD</title>
</head>

<body>



    <!-- Add Modal -->
    <div class="modal fade" id="Data_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="error-message">


                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Request No." class="form-control requestno"><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Area" class="form-control area"><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Date" class="form-control date"><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Needed Date" class="form-control ndate"><br>
                        </div>
                        <div class="col-md-6">

                            <input type="text" placeholder="Price" class="form-control price"><br>
                        </div>
                        <div class="col-md-6">

                            <input type="text" placeholder="Total" class="form-control total"><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="Products/Materials" class="form-control product"><br>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_data">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="DataViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4 style="display: inline;">Request No.: </h4>
                    <h4 style="display: inline;" class="requestno_view"></h4><br>
                    <h4 style="display: inline;">Area : </h4>
                    <h4 style="display: inline;" class="area_view"></h4><br>
                    <h4 style="display: inline;">Date : </h4>
                    <h4 style="display: inline;" class="date_view"></h4><br>
                    <h4 style="display: inline;">Needed Date : </h4>
                    <h4 style="display: inline;" class="ndate_view"></h4><br>
                    <h4 style="display: inline;">Price : </h4>
                    <h4 style="display: inline;" class="price_view"></h4><br>
                    <h4 style="display: inline;">Total : </h4>
                    <h4 style="display: inline;" class="total_view"></h4><br>
                    <h4 style="display: inline;">Product/Matarials : </h4>
                    <h4 style="display: inline;" class="product_view"></h4><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Edit Model -->
    <div class="modal fade" id="DataEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_edit">
                        <div class="col-md-12">
                            <div class="error-message-update">


                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Request No.</label>
                            <input id="requestno_edit" type="text" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Area</label>
                            <input id="area_edit" type="text" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Date</label>
                            <input id="date_edit" type="text" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Need Date</label>
                            <input id="ndate_edit" type="text" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Price</label>
                            <input id="price_edit" type="text" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Total</label>
                            <input id="total_edit" type="text" class="form-control ">
                        </div>
                        <div class="col-md-6">
                            <label for="">Products/Materials</label>
                            <input id="product_edit" type="text" class="form-control ">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_data">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!--delete Model -->

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_delete">
                        <div class="col-md-12">
                            <h6>
                                Are You Sure To Delete this Data??
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete_data">Yes Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!--Mark delete Model -->
    <div class="modal fade" id="mdeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" id="id_mdelete">
                        <div class="col-md-12">
                            <h6>
                                Are You Sure To Delete Selected Data??
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger mDeletebtn">Yes Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Ajax CRUD Operation
                            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#Data_AddModal">
                                Add
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="message-show">

                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th><input id="ckbAll" class="label-inline" type="checkbox"> <input type="button" class="btn btn-danger mDelete" value="Delete"></th>
                                    <th>Request No.</th>
                                    <th>Area</th>
                                    <th>Date</th>
                                    <th>Need Date</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Products/Materials</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="data">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            getdata();



            $('#ckbAll').click(function(event) {
                if (this.checked) {
                    // Iterate each checkbox
                    $(':checkbox').each(function() {
                        this.checked = true;
                    });
                } else {
                    $(':checkbox').each(function() {
                        this.checked = false;
                    });
                }
            });



            $('.delete_data').click(function(e) {
                e.preventDefault();

                var data_id = $('#id_delete').val();
                //alert(data_id);

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_delete': true,
                        'data_id': data_id,

                    },
                    success: function(response) {
                        $('#deleteModal').modal('hide');
                        $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> ' + response + '.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                        $('.data').html("");
                        getdata();

                    }
                });

            });


            //mark delete

            $('.mDeletebtn').click(function(e) {
                e.preventDefault();
                var data_id = $('#id_mdelete').val();
                //alert(data_id);

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'mark_delete': true,
                        'data_id': data_id,

                    },
                    success: function(response) {
                        $('#mdeleteModal').modal('hide');
                        $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> ' + response + '.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                        $('.data').html("");
                        getdata();

                    }
                });

            });

            $(document).on("click", ".mDelete", function() {
                var id_array=[];

                $("input[type=checkbox]:checked").closest('td').each(function(index) {
                    var id=$(this).closest('tr').find('.data_id').text();

                    id_array.push(id);
                });

                //var data_id = $("input[type=checkbox]:checked").closest('tr').find('.data_id').text();


                // $("input[type=checkbox]").each(function() {
                //     var self = $(this);
                //     if (self.is(':checked')) {
                //         arr.push(self.attr("id"));
                //     }
                // });
                //alert(id_array);

                // var data_id= $('.mark').closest('tr').find('.data_id').text();
                // //alert(data_id);
                if (id_array != '') {
                    $('#id_mdelete').val(id_array);
                    $('#mdeleteModal').modal('show');
                } else {
                    alert('Select Atleast One!');
                }

            });

            //end mark delete

            $(document).on("click", ".delete_btn", function() {

                var data_id = $(this).closest('tr').find('.data_id').text();
                //alert(data_id);
                $('#id_delete').val(data_id);
                $('#deleteModal').modal('show');
            });

            $('.update_data').click(function(e) {
                e.preventDefault();

                // var data_id=$('#id_edit').val();
                var data_id = $('#id_edit').val();


                var requestno = $('#requestno_edit').val();
                var area = $('#area_edit').val();
                var date = $('#date_edit').val();
                var ndate = $('#ndate_edit').val();
                var price = $('#price_edit').val();
                var total = $('#total_edit').val();
                var product = $('#product_edit').val();


                if (requestno != '' & area != '' & date != '' & ndate != '' & price != '' & total != '' & product != '') {
                    $.ajax({
                        type: "POST",
                        url: "code.php",
                        data: {
                            'checking_update': true,
                            'data_id': data_id,
                            'requestno': requestno,
                            'area': area,
                            'date': date,
                            'ndate': ndate,
                            'price': price,
                            'total': total,
                            'product': product,
                        },
                        success: function(response) {
                            // console.log(response);
                            $('#DataEditModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> ' + response + '.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            $('.data').html("");
                            getdata();

                        }
                    });

                } else {
                    // console.log("Please enter all fileds.");
                    $('.error-message-update').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fileds.\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                }

            });



            $(document).on("click", ".edit_btn", function() {

                var data_id = $(this).closest('tr').find('.data_id').text();
                //alert(data_id);

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_edit': true,
                        'data_id': data_id,

                    },
                    success: function(response) {
                        //    console.log(response);
                        $.each(response, function(key, value) {
                            // console.log(value['area']);
                            $('#id_edit').val(value['id']);
                            $('#requestno_edit').val(value['requestno']);
                            $('#area_edit').val(value['area']);
                            $('#date_edit').val(value['date']);
                            $('#ndate_edit').val(value['ndate']);
                            $('#price_edit').val(value['price']);
                            $('#total_edit').val(value['total']);
                            $('#product_edit').val(value['product']);
                        });
                        $('#DataEditModal').modal('show');
                    }
                });

            });


            $(document).on("click", ".viewbtn", function() {

                var data_id = $(this).closest('tr').find('.data_id').text();
                //alert(data_id);

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_view': true,
                        'data_id': data_id,

                    },
                    success: function(response) {
                        //    console.log(response);
                        $.each(response, function(key, value) {
                            // console.log(value['area']);
                            $('.requestno_view').text(value['requestno']);
                            $('.area_view').text(value['area']);
                            $('.date_view').text(value['date']);
                            $('.ndate_view').text(value['ndate']);
                            $('.price_view').text(value['price']);
                            $('.total_view').text(value['total']);
                            $('.product_view').text(value['product']);
                        });
                        $('#DataViewModal').modal('show');
                    }
                });

            });



            $('.add_data').click(function(e) {
                e.preventDefault();

                var requestno = $('.requestno').val();
                var area = $('.area').val();
                var date = $('.date').val();
                var ndate = $('.ndate').val();
                var price = $('.price').val();
                var total = $('.total').val();
                var product = $('.product').val();


                if (requestno != '' & area != '' & date != '' & ndate != '' & price != '' & total != '' & product != '') {
                    $.ajax({
                        type: "POST",
                        url: "code.php",
                        data: {
                            'checking_add': true,
                            'requestno': requestno,
                            'area': area,
                            'date': date,
                            'ndate': ndate,
                            'price': price,
                            'total': total,
                            'product': product,
                        },
                        success: function(response) {
                            // console.log(response);
                            $('#Data_AddModal').modal('hide');
                            $('.message-show').append('\
                                <div class="alert alert-success alert-dismissible fade show" role="alert">\
                                    <strong>Hey!</strong> ' + response + '.\
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                        <span aria-hidden="true">&times;</span>\
                                    </button>\
                                </div>\
                            ');
                            $('.data').html("");
                            getdata();
                            $('.requestno').val("");
                            $('.area').val("");
                            $('.date').val("");
                            $('.ndate').val("");
                            $('.price').val("");
                            $('.total').val("");
                            $('.product').val("");

                        }
                    });

                } else {
                    // console.log("Please enter all fileds.");
                    $('.error-message').append('\
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                            <strong>Hey!</strong> Please enter all fileds.\
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                                <span aria-hidden="true">&times;</span>\
                            </button>\
                        </div>\
                    ');
                }

            });
        });



        function getdata() {
            $.ajax({
                type: "GET",
                url: "fetch.php",
                success: function(response) {
                    // console.log(response);
                    $.each(response, function(key, value) {
                        // console.log(value['fname']);
                        $('.data').append('<tr>' +

                            '<td class="data_id">' + '<input class="mark" id="checkboxS" type="checkbox">' + '<p class="hide">' + value['id'] + '</p>' + '</td>\
                              <td>' + value['requestno'] + '</td>\
                                <td>' + value['area'] + '</td>\
                                <td>' + value['date'] + '</td>\
                                <td>' + value['ndate'] + '</td>\
                                <td>' + value['price'] + '</td>\
                                <td>' + value['total'] + '</td>\
                                <td>' + value['product'] + '</td>\
                                <td>\
                                    <a href="#" class="badge btn-info viewbtn">VIEW</a>\
                                    <a href="#" class="badge btn-primary edit_btn">EDIT</a>\
                                    <a href="#" class="badge btn-danger delete_btn">Delete</a>\
                                </td>\
                            </tr>');
                    });
                }
            });
        }
    </script>

</body>

</html>