<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Product List</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Student
                    <small>List</small>
                    <div class="float-right">
                    <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New Student</a>
                    </div>
                </h1>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Father Name</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>
        
</div>

		<!-- MODAL ADD -->
            <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">




                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Student Name</label>
                            <div class="col-md-10">
                              <input type="text" name="student_name" id="student_name" class="form-control" placeholder="Student Name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Father Name</label>
                            <div class="col-md-10">
                              <input type="text" name="father_name" id="father_name" class="form-control" placeholder="Father Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                              <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                    <!-- <div class="form-group">  
                      <form name="add_name" id="add_name">  --> 
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="subject_name[]" id="subject_name"  placeholder="Enter Subject name" class="form-control name_list" /></td>

                                         <td><input type="text" name="grade[]" id="grade" placeholder="Enter Grade" class="form-control name_list" /></td>

                                         <td><input type="text" name="marks[]" id="marks"  placeholder="Enter Marks" class="form-control name_list" /></td>

                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     <!-- </form>  
                                     </div>  
                      -->

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <!--  <div class="form-group row">
                           <label class="col-md-2 col-form-label">Product Code</label>
                           <div class="col-md-10">
                             <input type="text" name="product_code_edit" id="product_code_edit" class="form-control" placeholder="Product Code" readonly>
                           </div>
                       </div> -->

                       


                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Student Name</label>
                            <div class="col-md-10">
                              <input type="text" name="student_name_edit" id="student_name_edit" class="form-control" placeholder="Student Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Father Name</label>
                            <div class="col-md-10">
                              <input type="text" name="father_name_edit" id="father_name_edit" class="form-control" placeholder="Father Name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                              <input type="text" name="address_edit" id="address_edit" class="form-control" placeholder="Address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">email</label>
                            <div class="col-md-10">
                              <input type="text" name="email_edit" id="email_edit" class="form-control" placeholder="discount">
                            </div>
                        </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="student_name_delete" id="student_name_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->



        
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>


</body>
</html>





<script type="text/javascript">
    $(document).ready(function(){

          show_product(); 
        
        $('#mydata').dataTable();
         
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('student/student_data')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].student_name+'</td>'+
                                '<td>'+data[i].father_name+'</td>'+
                                '<td>'+data[i].address+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-student_name="'+data[i].student_name+'" data-father_name="'+data[i].father_name+'" data-address="'+data[i].address+'" data-email="'+data[i].email+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-student_name="'+data[i].student_name+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }
       

    //Save product



     


        $('#btn_save').on('click',function(){
            var student_name = $('#student_name').val();
            var father_name = $('#father_name').val();
            var address        = $('#address').val();
            var email        = $('#email').val();
   
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('student/save')?>",
                dataType : "JSON",
                data : {student_name:student_name , father_name:father_name, address:address,email:email},
                success: function(data){
                    $('[name="student_name"]').val("");
                    $('[name="father_name"]').val("");
                    $('[name="address"]').val("");
                    $('[name="email"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });


         var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="subject_name[]" id="subject_name"  placeholder="Enter your Subject Nmae" class="form-control name_list" /></td><td><input type="text" name="grade[]" id="grade"  placeholder="Enter grade" class="form-control name_list" /></td><td><input type="text" name="marks[]" id="marks"  placeholder="Enter Marks" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
       $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  

       $('#btn_save').on('click',function(){
            var subject_name = $('#subject_name').val();
            var grade = $('#grade').val();
            var marks        = $('#marks').val();
   
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('student/save_subject')?>",
                dataType : "JSON",
                data : {subject_name:subject_name , grade:grade, marks:marks},
                success: function(data){
                    alert(subject_name);
                    $('[name="subject_name[]"]').val("");
                    $('[name="grade[]"]').val("");
                    $('[name="marks[]"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });




         //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var student_name = $(this).data('student_name');
            var father_name = $(this).data('father_name');
            var address        = $(this).data('address');
            var email        = $(this).data('email');
            
            $('#Modal_Edit').modal('show');
            $('[name="student_name_edit"]').val(student_name);
            $('[name="father_name_edit"]').val(father_name);
            $('[name="address_edit"]').val(address);
            $('[name="email_edit"]').val(email);
        });

        //update record to database
         $('#btn_update').on('click',function(){
            var student_name = $('#student_name_edit').val();
            var father_name = $('#father_name_edit').val();
            var address        = $('#address_edit').val();
            var email        = $('#email_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('student/update')?>",
                dataType : "JSON",
                data : {student_name:student_name , father_name:father_name, address:address,email:email},
                success: function(data){
                    $('[name="student_name_edit"]').val("");
                    $('[name="father_name_edit"]').val("");
                    $('[name="address_edit"]').val("");
                    $('[name="email_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
            return false;
        });


         //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var student_name = $(this).data('student_name');
            
            $('#Modal_Delete').modal('show');
            $('[name="student_name_delete"]').val(student_name);
        });

        //delete record to database
         $('#btn_delete').on('click',function(){
            var student_name = $('#student_name_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('student/delete')?>",
                dataType : "JSON",
                data : {student_name:student_name},
                success: function(data){
                    $('[name="student_name_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });


       

        });
</script>