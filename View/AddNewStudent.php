                         <div class="w3-card" style=" position:absolute;top:0px;left:30px;width: 1100px;height: 700px;">
                     	   <div class="col-md-12">
                            <form  method="post" action="../Controler/NewStudentControl.php" enctype="multipart/form-data">
											  <div class="form-group">
											    <label >First name</label>
											    <input type="text"  name="firstname"class="form-control" required>
											  </div>
											  <div class="form-group">
											    <label >Last name</label>
											    <input type="text" name="lastname" class="form-control" required>
											  </div>
											  
											  <div class="form-group">
											    <label >Address</label>
											    <input type="text" name="address"class="form-control" required>
											  </div>

											  <div class="form-group">
											    <label >Date of birth</label>
											    <input type="date"  name="dob"class="form-control" required>
											  </div>

											  <div class="form-group">
											    <label >Name of Father/Mother/Keeper</label>
											    <input type="text" name="keeper"class="form-control" required>
											  </div>

											  <div class="form-group">
											    <label >Contact Number</label>
											    <input type="text" name="contactnumber" class="form-control" required>
											  </div>

											  <div class="form-group">
											    <label >Email</label>
											    <input type="Email" name="email" class="form-control" required>
											  </div>
											  <button type="submit" name="add" class="w3-button w3-teal">ADD STUDENT</button>
                                             <!--<div class="form-group">
													<label >Picture</label>
		                                                 <input type="file" name="img" class="custom-file-input">
		                                                 <span class="custom-file-control"></span>
		                                                  <button type="submit" name="addP" class="w3-button w3-blue">UPLOAD PHOTO</button>

		                                          
		                                     </div>
-->
                                              
		     								  
									 </form> 
</div>
</div>