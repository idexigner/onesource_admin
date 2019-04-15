var Api="http://localhost/onesource_admin/";
console.log("Reachde theere");

purchaseTableLoad();

function purchaseTableLoad(){
    fetch(Api+'backend/showPurchaseTable.php', {
     method: 'GET',
     headers: new Headers({
         'content-type': 'application/json',
         'Accept': 'application/json',
     })
 })
 .then((response) => response.json())
 .then((responseJson) =>{
     console.log(responseJson);
     // alluserdata = responseJson;
     responseJson.map((tr)=>{
     
        document.getElementById("exampleTable").innerHTML+= showPurchaseTables(tr);

     })
     purchaseOnclickFunction();


 })
 .catch((error)=>{
 console.error(error);
   });
}
function showPurchaseTables(data){
    
 return `
          <tr>
            <td>${data.p_id}</td>
            <td>${data.name}</td>
            <td>${data.phone}</td>
            <td>${data.ranges}</td>
            <td>${data.societyName}</td>
            <td>${data.type}</td>
            <td>${data.date}</td>
         </tr>
         
         `;
}


function purchaseOnclickFunction(){
    var purchaseTable = document.getElementById('example');
	console.log("Normal");
	console.log(purchaseTable.rows.length);
                for(var i = 1; i < purchaseTable.rows.length - 1; i++)
                {
						
                    purchaseTable.rows[i].onclick = function()
                    {

                        console.log('reached inside purchase trable');
    
                                var idd=this.cells[0].innerHTML;
                                
                                console.log(idd);

                                $('#purchaseModal').modal('show');




                                fetch(Api+'backend/showPurchase.php', {
                                    method: 'POST',
                                    body: JSON.stringify({
                                        id: idd,
                                        // pass: pass,
                                        // fullname: fullname,
                                    }),
                                    headers: new Headers({
                                      'Content-Type': 'application/json',
                                    })
                                    
                                })
                                .then((response) => response.json())
                                    .then((responseJson) => {
                                        var obj=responseJson[0];
                                        $("#imagePurchaseId").html("");
                            
                                        document.getElementById("purchaseUserId").innerHTML=obj.p_id;
                                        document.getElementById("pname").value=obj.name;


                                        var imgPurchase = document.getElementById("imagePurchaseId");
//<a href="../inquiry_demo/upload/pur_faraz2123123320.jpg" target="_new"><img src="../inquiry_demo/upload/pur_faraz2123123320.jpg" style="width:22%;height:auto"></a>
                                        for( var j =0; j<obj.picNumber ; j++){

                                            var anchor = document.createElement("a");
                                            anchor.setAttribute("href","../inquiry_demo/upload/"+obj.picName+j + ".jpg");
                                            anchor.setAttribute("target","_new");

                                            var img= document.createElement("img");
                                            img.setAttribute("src","../inquiry_demo/upload/"+obj.picName+j + ".jpg");
                                            img.setAttribute("width","22%");
                                            img.setAttribute("height","auto");

                                            anchor.appendChild(img);


                                            imgPurchase.appendChild(anchor);
                                        }


                                        document.getElementById("pphone").value=obj.phone;
                                        document.getElementById("pcareof").value=obj.careOf;
                                        document.getElementById("prange").value=obj.ranges;
                                        document.getElementById("psocietyName").value=obj.societyName;
                                        var radioType=obj.type;
                                        var radioTypeFlag=false;
                                        if(radioType!==null){
                                            for(var i =1; i<7;i++){
                                                // var valueId="ptypeRadio"
                                                if(document.getElementById("ptypeRadio"+i).value===radioType){
                                                    document.getElementById("ptypeRadio"+i).checked=true;
                                                    radioTypeFlag=true;
                                                }
                                            }
                                        }
                            
                                        if(radioTypeFlag===false && radioType!==null){
                                             document.getElementById("ptypeOther").style.display="block";
                                            document.getElementById("ptypeRadio7").checked=true;
                                            document.getElementById("ptypeRadioOther").value=radioType;
                                           
                                            // ptypeFunction();
                                        }
                            
                            
                                        var radioNature=obj.nature;
                                       
                                        if(radioNature!==null){
                                            for(var i =1; i<3;i++){
                                                if(document.getElementById("pnatureRadio"+i).value===radioNature){
                                                    document.getElementById("pnatureRadio"+i).checked=true;
                                                }
                                            }
                                        }
                            
                                        document.getElementById("parea").value=obj.area;
                            
                                        var arrayArea=['sqfeet','sqyards','acre'];
                            
                                        var areaUnit=obj.areaUnit;
                                        var indexArea=arrayArea.indexOf(areaUnit);
                            
                                        document.getElementById("pareaDrop").selectedIndex=indexArea;
                            
                            
                                        var radioPayment=obj.payment;
                                       
                                        if(radioPayment!==null){
                                            for(var i =1; i<3;i++){
                                                if(document.getElementById("ppaymentRadio"+i).value===radioPayment){
                                                    document.getElementById("ppaymentRadio"+i).checked=true;
                                                }
                                            }
                                        }
                            
                                        document.getElementById("pdown").value=obj.downPayment;
                                        document.getElementById("pshedule").value=obj.schedulePayment;
                                        document.getElementById("pmonthly").value=obj.monthlyPayment;
                            
                            
                            
                                        var arrayFloor=['ground','1','2','3','4','other'];
                            
                                        var pfloor=obj.floor;
                                        var indexFloor=arrayFloor.indexOf(pfloor);
                            
                                        document.getElementById("pfloorDrop").selectedIndex=indexFloor;
                            
                                        document.getElementById("pfloorCheckOther").selectedIndex=obj.floorOther;
                            
                            
                            
                                         var checkRoom=obj.room;
                                         console.log(checkRoom)
                                        var checkRoomFlag=false;
                                        if(checkRoom!==null){
                                            for(var i =1; i<6;i++){
                                                // var valueId="ptypeRadio"
                                                if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
                                                    document.getElementById("proomCheckbox"+i).checked=true;
                                                    checkRoomFlag=true;
                                                }
                                            }
                                        }
                            
                                        if(document.getElementById("proomCheckbox6").value){
                                             document.getElementById("proomOther").style.display="block";
                                            // document.getElementById("proomCheckbox6").checked=true;
                                            document.getElementById("proomCheckOther").value=obj.roomOther;
                                           
                                            // ptypeFunction();
                                        }
                            
                                         document.getElementById("potherDetails").value=obj.otherDetail;
                                         document.getElementById("pnearby").value=obj.nearby;
                                         document.getElementById("potherFacilites").value=obj.otherFacilities;
                                         document.getElementById("phealthFacilites").value=obj.healthFacilities;
                            
                                        
                                        console.log(responseJson[0]);
                                    })
                                    .catch((error)=>{
                                        console.error(error);
                                    });

											
										}
								}

}