<?php include "header1.php";
    include "slider.php"; ?>

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="widget-titel text-center">
                                <h4>Canceled Orders <img src="icons/cancel.png" alt="" style="width:auto;height:24px;"></h4>
                            </div>
                            <div class="table-responsive mb-4 mt-4">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                </button>
                                            </div>
                                            <div id="modal-body" class="modal-body">
                                            
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                                                <button id="change" type="button" class="btn btn-primary snackbar-bg-success">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tracking ID</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Quant</th>
                                            <th class="text-center">Returned to Owner</th>
                                            <th class="text-center">Owner</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="append">
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <script>
        $('.snackbar-bg-success').click(function() {
            Snackbar.show({
                text: 'Order Status Changed',
                actionTextColor: '#fff',
                backgroundColor: '#8dbf42'
            });
        });
$(document).ready(function(){
    // Load Table Records
    function loadTable(){
      $.ajax({
        url : "ajax/cancelajax.php",
        type : "POST",
        success : function(data){
          $("#append").html(data);
        }
      });
    }
    loadTable();
    $(document).on("click", "#statusindi" ,function(){
        let x = $(this).data("oid");
        $.ajax({
            url : "ajax/cancel-change.php",
            type : "POST",
            data : {id : x},
            success : function(data){
                $("#modal-body").html(data);
            }
      });
    })
    $("#change").click(function(){
        let x = $("#mgct").val();
        let y = $("#mgctt").val();
        $.ajax({
            url : "ajax/cancel-status.php",
            type : "POST",
            data : {changeid : x, id : y},
            success : function(data){
                if(data == 1){
                    $("#exampleModal").modal("hide");
                    loadTable();
                }else{
                    alert("PROBELM");
                }
            }
      });
    })
});
    </script>


<?php include "footer1.php"; ?>