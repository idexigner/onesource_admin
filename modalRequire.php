


<div class="modal" id="requireModal"  tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="smallmodalLabel">Required Modal</h5>
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
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">User ID: </label> <span id="requireUserId">  </span></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="hidden"  id="userId" name="userId"  class="form-control" >
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="rname" name="rname"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="rphoneNumber" name="rphoneNumber"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Care of</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="rcareof" name="rcareof"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ranges</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="rrange" name="rrange"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Society Name</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;"><input type="text"  id="rsocietyName" name="rsocietyName"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>



                                                             <div class="row form-group">
                                                                <div class="col col-md-3"><label for="text-input" class="form-control-label">Area</label></div>
                                                                <div class="col-8 col-md-6" style="background-color:white;"><input type="text"  id="rarea" name="rarea"  class="form-control">
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>

                                                                <div class="col-4 col-md-3" style="background-color:white;" >
                                                                    <select name="rareaDrop" id="rareaDrop" class="form-control">
                                                                        <option value="sqfeet" >SQ Feet</option>
                                                                        <option value="sqyards">SQ Yards</option>
                                                                        <option value="acre">Acre</option> 
                                                                    </select>
                                                                    <!--<small class="form-text text-muted">Enter Event T</small>-->
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Type</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype1" value="plot" > Plot</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype2" value="banglow" > Banglow</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype3" value="house"> House</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype4" value="portion"  > Portion</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype5" value="flat" > Flat</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype6" value="shop"  > Shop</label></div>
                                                                    <div class="radio-inline"><label><input type="radio" name="rtype" id="rtype7" value="other"> other</label></div>
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="rtypeOther"> 
                                                                        <input type="text"  name="rtypeOtherCheck"  id="rtypeOtherCheck" class="form-control" placeholder="Your other Type">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>


                                                            


                                                           


                                                        



                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Floor</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    <select name="rfloorDrop" id="rfloorDrop" class="form-control">
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
                                                                   
                                                                    <div style="display:none" id="rfloorOther"> 
                                                                        <input type="text"  name="rfloorCheckOther"  id="rfloorCheckOther" class="form-control" placeholder="Other Floor">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>




                                                             <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Room</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">
                                                                    
                                                                    <div class="radio-inline"><label><input type="checkbox" name="rroom[]" id="rroom1" value="1bedl" > 1 Bed L</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="rroom[]" id="rroom2" value="2bedl" > 2 Bed L</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="rroom[]" id="rroom3" value="2beddd"> 2 Bed DD</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="rroom[]" id="rroom4" value="3bedl"  > 3 Bed L</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="rroom[]" id="rroom5" value="3beddd" > 3 Bed DD</label></div>
                                                                    <div class="radio-inline"><label><input type="checkbox" name="rroom[]" id="rroom6" value="other"> Other</label></div>
                                                                    <br>
                                                                   
                                                                    <div style="display:none" id="rroomOther"> 
                                                                        <input type="text"  name="rroomCheckOther"  id="rroomOtherText" class="form-control" placeholder="Other Room">
                                                                    </div>

                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Other Details</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="roherDetails" id="rotherDetails" rows="3" placeholder="Your Other Details" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Nearby Location Facilites</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="rnearby" id="rnearby" rows="3" placeholder="Your Nearby Location Facilites" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>



                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Other Facilities</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="rotherFacilites" id="rotherFacilites" rows="3" placeholder="Your Other Facilities" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>


                                                            <div class="form-group">
                                                                <div class="col col-md-3"><label for="radio" class="form-control-label">Health Facilites</label></div>
                                                                <div class="col-12 col-md-9" style="background-color:white;">                                                                    
                                                                  <textarea name="rhealthFacilites" id="rhealthFacilites" rows="3" placeholder="Your Health Facilites" class="form-control"></textarea>                                                                    
                                                                </div>

                                                            </div>



                                                            



                                                            

                                                         <div class="row form-group">
                                                                    <div class="col col-md-3"></div>
                                                                    <div class="col-12 col-md-9" style="background-color:white;">
                                                                         <input type="button"  name="submit2" onclick="requireDelete();"class="btn btn-warning "  style="float:left;display:inline;background-color:red;" value="Delete">
                                                                        <input type="button"  name="submit" onclick="requireUpdate();" class="btn btn-primary "  style="float:right;display:inline;margin-right:3%;" value="Update">
                                                                        
                                                                        <!--<input type="submit"  name="submit" class="btn btn-primary "  style="float:right" value="Update">-->
                                                                        
                                                                        
                                                                        
                                                                        </div>
                                                                </div>

                                </form>


							
                        </div>
                    </div>
                </div>
</div>




