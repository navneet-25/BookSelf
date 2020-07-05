<?php include "header1.php";
include "slider.php"; ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">

            <div id="tableHover" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Hover Table</h4>
                                        </div>                 
                                    </div>
                                </div>
                                    <div class="table-responsive">
                                     <!-- Modal -->
                                     <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">

                                                            <div class="modal-header" id="registerModalLabel">
                                                                <h4 class="modal-title">Add Stock</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                
                                                            <form class='mt-0'>
                                                                <div class='form-group'>
                                                                <label for='stock'><b>Add Number</b></label>
                                                                    <input type='number' name='demo3_21' class='form-control' id='stock' required>

                                                                </div>
                                                                <button id='add-btn' type='submit' class='btn btn-success mt-2 mb-2 btn-block'>Add</button>
                                                                
                                                            </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <table class="table table-bordered table-hover mb-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th class="text-center">Image</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Price</th>
                                                    <th class="text-center">Total Units</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Unit Left</th>
                                                    <th class="text-center">Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody id="append">
                                               
                                                <tr>
                                                    <td> Alma Clarke</td>
                                                    <td>11/08/2019</td>
                                                    <td>420</td>
                                                    <td class="text-center"><span class="text-secondary">Pending</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Xavier</td>
                                                    <td>12/08/2019</td>
                                                    <td>130</td>
                                                    <td class="text-center"><span class="text-info">In progress</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                                <tr>
                                                    <td>Vincent Carpenter</td>
                                                    <td>13/08/2019</td>
                                                    <td>260</td>
                                                    <td class="text-center"><span class="text-danger">Canceled</span></td>
                                                    <td class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                        </div>

             <!-- row layout-top-spacing -->
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->
    <script>
            $("input[name='demo3_21']").TouchSpin({
            initval: 30
            });
            </script>
    <script>
    $(document).ready(function(){
        function load(){
            $.ajax({
                url : "ajax/bookstatusajax.php",
                type : "POST",
                success : function(data){
                    $("#append").html(data);
                }
            });
        }
        load();
    });

        $(document).on("click", "#idch", function(){
            let x = $(this).data("bid");
            sessionStorage.setItem("productid", x);
            
        });
        $("#add-btn").click(function(){
                let y = $("#stock").val();
                let x = sessionStorage.getItem("productid");
                $.ajax({
                    url : "ajax/add-stock.php",
                    type : "POST",
                    data : {id : x, stock : y},
                    success : function(data){
                        if(data = 1){
                            location.reload();
                        }else{
                            alert(data);
                        }
                    }
                })
            })
    
            
    </script>



<?php include "footer1.php"; ?>