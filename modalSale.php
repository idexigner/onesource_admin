


<div class="modal" id="saleModal"  tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Sale</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form  method="POST"class="form-horizontal">
                                                            <!--<div class="row form-group">
                                                                <div class="col col-md-12"><label for="text-input" class=" form-control-label">Domain ID: </label><span id="domainId"></span></div>
                                                                
                                                            </div>  -->

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User ID: </label> <span id="saleUserId">  </span></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="hidden"  id="suserId" name="suserId"  class="form-control" >
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="sname" name="sname"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="sphone" name="sphone"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Care of</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="scareof" name="scareof"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Complete Address</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="scompleteAddress" name="scompleteAddress" class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Society Name</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="ssocietyName" name="ssocietyName"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Type</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio1" value="plot" > Plot</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio2" value="banglow" > Banglow</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio3" value="house"> House</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio4" value="portion"  > Portion</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio5" value="flat" > Flat</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio6" value="shop"  > Shop</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="stype" id="stypeRadio7" value="other"> other</label></div>
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="stypeOther"> 
                                                                        <input type="text"  name="stypeRadioOther"  id="stypeRadioOther" class="form-control" placeholder="Your other Type">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>


                                                                 <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Demand</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="sdemand" name="sdemand"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Nature</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="snature" id="snatureRadio1" value="residential" > Residential</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="snature" id="snatureRadio2" value="commercial" > Commercial</label></div>
                                                  
                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Area</label></div>
                                                                <div class="col-8 col-md-6" style="background-color:white;"><input type="text"  id="sarea" name="sarea"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>

                                                                <div class="col-4 col-md-3" style="background-color:white;" >
                                                                    <select name="sareaDrop" id="sareaDrop" class="form-control">
                                                                        <option value="sqfeet" >SQ Feet</option>
                                                                        <option value="sqyards">SQ Yards</option>
                                                                        <option value="acre">Acre</option> 
                                                                    </select>
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>


                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Direction</label></div>
                                                                
                                                                <div class="col-12 col-md-9" style="background-color:white;" >
                                                                    <select name="sDirection" id="sDirection" class="form-control">
                                                                       <option value="westOpen">West Open</option>
                                                                        <option value="eastOpen">East Open</option>
                                                                        <option value="corner">Corner</option> 
                                                                    </select>
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>


                                                         


                                                            <!--<div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Payment</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="ppayment" id="ppaymentRadio1" value="cash" > Cash</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="ppayment" id="ppaymentRadio2" value="cheque" > Cheque</label></div>
                                                  
                                                                    
                                                                </div>

                                                            </div>

                                                            <div class="form-group">
                                                                <div class="col col-md-3"></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <input type="text"  id="pdown" name="pdown"  class="form-control" placeholder="Enter Down payment">
                                                                    <input type="text"  id="pshedule" name="pshedule"  class="form-control" placeholder="Enter Schedue payment">
                                                                    <input type="text"  id="pmonthly" name="pmonthly"  class="form-control" placeholder="Enter monthly payment">      
                                                                </div>

                                                            </div>-->



                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Floor</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <select name="sfloorDrop" id="sfloorDrop" class="form-control">
                                                                    <!--<option  > Select Any</option>-->
                                                                        <option value="ground"> Ground</option>
                                                                        <option value="1"> 1</option>
                                                                        <option value="2"> 2</option>
                                                                        <option value="3"> 3</option>
                                                                        <option value="4"> 4</option>
                                                                        <option value="other"> other</option>
                                                                    </select>
                                                                    <!--<div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox1" value="ground" > Ground</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox2" value="banglow" > Banglow</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox3" value="house"> House</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox4" value="portion"  > Portion</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox5" value="flat" > Flat</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox6" value="shop"  > Shop</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="pfloor[]" id="pfloorCheckbox7" value="other"> other</label></div>-->
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="sfloorOther"> 
                                                                        <input type="text"  name="sfloorCheckOther"  id="sfloorCheckOther" class="form-control" placeholder="Other Floor">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>




                                                             <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Room</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sroom[]" id="sroomCheckbox1" value="1bedl" > 1 Bed L</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sroom[]" id="sroomCheckbox2" value="2bedl" > 2 Bed L</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sroom[]" id="sroomCheckbox3" value="2beddd"> 2 Bed DD</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sroom[]" id="sroomCheckbox4" value="3bedl"  > 3 Bed L</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sroom[]" id="sroomCheckbox5" value="3beddd" > 3 Bed DD</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sroom[]" id="sroomCheckbox6" value="other"> Other</label></div>
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="sroomOther"> 
                                                                        <input type="text"  name="sroomCheckOther"  id="sroomCheckOther" class="form-control" placeholder="Other Room">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>





                                                              <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Document Details</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="sdocument" id="sdocumentRadio1" value="30yearLease" > 30 Year Lease</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="sdocument" id="sdocumentRadio2" value="90yearLease" > 90 Year Lease</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="sdocument" id="sdocumentRadio3" value="transfer"> Transfer</label></div>
                                                                   
                                                                    <div class="radio-inline"><label><input type="radio" name="sdocument" id="sdocumentRadio4" value="other"> other</label></div>
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="sdocumentOther"> 
                                                                        <input type="text"  name="sdocumentRadioOther"  id="sdocumentRadioOther" class="form-control" placeholder="Your other Document">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>


                                                             <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Authority</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="sauthority" id="sauthorityRadio1" value="kda" > KDA</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="sauthority" id="sauthorityRadio2" value="mda" > MDA</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="sauthority" id="sauthorityRadio3" value="dc"> DC</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="sauthority" id="sauthorityRadio4" value="builder" > Builder</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="sauthority" id="sauthorityRadio5" value="cantonment" > Cantonment</label></div>
                                                                    
                                                                    <div class="radio-inline"><label><input type="radio" name="sauthority" id="sauthorityRadio6" value="other"> other</label></div>
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="sauthorityOther"> 
                                                                        <input type="text"  name="sauthorityRadioOther"  id="sauthorityRadioOther" class="form-control" placeholder="Your other Authority">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>




                                                             <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Payment</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="spayment" id="spaymentRadio1" value="installment" > Installment</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="spayment" id="spaymentRadio2" value="cash" > Cash</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="spayment" id="spaymentRadio3" value="bookingPlan"> Booking Plan</label></div>
                                                                 
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="spaymentOther"> 
                                                                        <input type="text"  name="spaymentRadioOther"  id="spaymentRadioOther" class="form-control" placeholder="Your other Payment">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Utilities</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sutility[]" id="sutilityCheckbox1" value="lineWater" > Line Water</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sutility[]" id="sutilityCheckbox2" value="electricity" > Electricity</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="sutility[]" id="sutilityCheckbox3" value="gas">Gas</label></div>
                                                                    
                                                                    
                                                                   
                                                                    

                                                                    
                                                                </div>

                                                            </div>



                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Project Condition</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="sprojectCondition" name="sprojectCondition"  class="form-control" placeholder="Your Project COndition"> 
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>







                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Other Details</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="soherDetails" id="sotherDetails" rows="3" placeholder="Your Other Details" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Nearby Location Facilites</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="snearby" id="snearby" rows="3" placeholder="Your Nearby Location Facilites" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>



                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Other Facilities</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="sotherFacilites" id="sotherFacilites" rows="3" placeholder="Your Other Facilities" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Health Facilites</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="shealthFacilites" id="shealthFacilites" rows="3" placeholder="Your Health Facilites" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>


                                                            

                                                         <div class="row form-group">
                                                                    <div class="col col-md-3"></div>
                                                                    <div class="col-12 col-md-9" style="background-color:white;">
                                                                         <input type="button"  name="submit2" onclick="saleDelete();"class="btn btn-warning "  style="float:left;display:inline;background-color:red;" value="Delete">
                                                                        <input type="button"  name="submit" onclick="saleUpdate();" class="btn btn-primary "  style="float:right;display:inline;margin-right:3%;" value="Update">
                                                                        
                                                                        <!--<input type="submit"  name="submit" class="btn btn-primary "  style="float:right" value="Update">-->
                                                                        
                                                                        
                                                                        
                                                                        </div>
                                                                </div>

                                </form>


							
                        </div>
                    </div>
                </div>

            </div>





