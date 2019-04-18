// var Api="http://localhost/onesource_admin/";
var Api="http://1sourceestate.com/onesource_admin/";
//console.log("Reachde theere");

purchaseTableLoad();
saleTableLoad();
availableTableLoad();
requireTableLoad();

function purchaseTableLoad(){

    var u_id = localStorage.getItem("u_id");
    var role = localStorage.getItem("role");

    fetch(Api+'backend/showPurchaseTable.php', {
     method: 'POST',
     body: JSON.stringify({
        u_id:u_id,
        role: role
     }),    
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
     
        document.getElementById("purchaseTableBody").innerHTML+= showPurchaseTables(tr);

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
            <td>${data.inqName}</td>
            <td>${data.phone}</td>
            <td>${data.ranges}</td>
            <td>${data.societyName}</td>
            <td>${data.type}</td>
            <td>${data.date}</td>
            <td>${data.userName}</td>
         </tr>
         
         `;
}


function purchaseOnclickFunction(){
    var purchaseTable = document.getElementById('purchaseWholeTable');
	// console.log("Normal");
	// console.log(purchaseTable.rows.length);
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

                                         document.getElementById("picNumberPurchase").value=obj.picNumber;
                                         document.getElementById("picNamePurchase").value=obj.picName;
                                         
                                        console.log(responseJson[0]);
                                    })
                                    .catch((error)=>{
                                        console.error(error);
                                    });

											
										}
								}

}

function purchaseUpdate(){
   
   
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var idd=document.getElementById('purchaseUserId').innerHTML;
    var pname=document.getElementById("pname").value;
    var pphone=document.getElementById("pphone").value;
    var pcareof=document.getElementById("pcareof").value;
    var prange=document.getElementById("prange").value;
    var psocietyName=document.getElementById("psocietyName").value;


    var ptype='';

        for(var i =1; i<=7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("ptypeRadio"+i).checked){
                ptype=document.getElementById("ptypeRadio"+i).value;
                // radioTypeFlag=true;
            }
        }

    if(ptype==='other'){
        ptype=document.getElementById('ptypeRadioOther').value;
    }

    var pnature='';

        for(var i=1;i<3;i++){
            if(document.getElementById("pnatureRadio"+i).checked){
                pnature=document.getElementById("pnatureRadio"+i).value;
            }
        }

    var parea=document.getElementById("parea").value;


    var pareaDrop = document.getElementById("pareaDrop");
    var pareaValue = pareaDrop.options[pareaDrop.selectedIndex].value;
    
    var ppayment='';

        for(var i=1;i<3;i++){
            if(document.getElementById("ppaymentRadio"+i).checked){
                ppayment=document.getElementById("ppaymentRadio"+i).value;
            }
        }


    var pdown=document.getElementById("pdown").value;
    var pshedule=document.getElementById("pshedule").value;
    var pmonthly=document.getElementById("pmonthly").value;

    var pfloorDrop = document.getElementById("pfloorDrop");
    var pfloorValue = pfloorDrop.options[pfloorDrop.selectedIndex].value;
    var pfloorOther='';

    if(pfloorValue==='other'){
        pfloorOther=document.getElementById("pfloorCheckOther").value;
    }


    var proom=[];
    var proomOther='';

        for(var i =1; i<7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("proomCheckbox"+i).checked){
                proom.push(document.getElementById("proomCheckbox"+i).value);
                // radioTypeFlag=true;
            }
        }
   //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if(proom.includes('other')){
        proomOther=document.getElementById('proomCheckOther').value;
    }

     var potherDetails=document.getElementById("potherDetails").value;
     var pnearby=document.getElementById("pnearby").value;
     var potherFacilites=document.getElementById("potherFacilites").value;
     var phealthFacilites=document.getElementById("phealthFacilites").value;
// debugger;
     var picName='';
     var picNumber = document.getElementById("pfileName").files.length;
    
     if((document.getElementById("pfileName").value === null) || (document.getElementById("pfileName").value === undefined) || (document.getElementById("pfileName").value === '')){
        picName = '';
        console.log("Inside if");
        console.log(document.getElementById("picNumberPurchase").value);

        picNumber= document.getElementById("picNumberPurchase").value;
        picName = document.getElementById("picNamePurchase").value;
    }   
    else{
        picName = "pur_"+pname+pphone;
        prevNum= document.getElementById("picNumberPurchase").value;
        for(var j=0;j<prevNum;j++){
           // alert(j)

        
        $.ajax({
            url: Api+'backend/delete.php',
           // data: {'file' : "<?php echo dirname(__FILE__) . '../../inquiry_demo/uploads/'" + picName + j+'.jpg?>' },
           data: {'file' : "../../inquiry_demo/upload/" + picName + j+".jpg" },
            method:'GET',
            success:function(response){
              
            }
           });
        }//for loop
    }



    // alert(picName);

    document.getElementById("pPicName").value = picName;
   // document.getElementById("pUserId").value = uid;
    

    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    proom=JSON.stringify(proom);
    // console.log(proom);

    fetch(Api+'backend/updatePurchase.php', {
        method: 'POST',
        body: JSON.stringify({
            p_id: idd,
            pname:pname,
            pphone:pphone,
            pcareof:pcareof,
            prange:prange,
            psocietyName:psocietyName,
            ptype:ptype,
            pnature:pnature,
            parea:parea,
            pareaValue:pareaValue,
            ppayment:ppayment,
            pdown:pdown,
            pshedule:pshedule,
            pmonthly:pmonthly,
            pfloorValue:pfloorValue,
            pfloorOther:pfloorOther,
            proom:proom,
            proomOther:proomOther,
            potherDetails:potherDetails,
            pnearby:pnearby,
            potherFacilites:potherFacilites,
            phealthFacilites:phealthFacilites,
            picName:picName,
            picNumber:picNumber
            
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            
           // debugger;
            alert("Successfully Updateds");
            document.getElementById("pPicSubmit").click();
         //   document.getElementById('pPicForm').submit();
            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            //window.location.href  = "/onesource_admin/viewDetails.php";
            
            // console.log(responseJson);
        })
        .catch((error)=>{
            console.log(error);
             alert("Not Updated");
             window.location.href  = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });



}

function purchaseDelete(){

    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
   // var p_id='2';




   var prevNum= document.getElementById("picNumberPurchase").value;
    var picName = document.getElementById("picNamePurchase").value;
   for(var j=0;j<prevNum;j++){
      // alert(j)

   
   $.ajax({
       url: Api+'backend/delete.php',
      // data: {'file' : "<?php echo dirname(__FILE__) . '../../inquiry_demo/uploads/'" + picName + j+'.jpg?>' },
      data: {'file' : "../../inquiry_demo/upload/" + picName + j+".jpg" },
       method:'GET',
       success:function(response){
         
       }
      });
   }//for loop

   var idd=document.getElementById('purchaseUserId').innerHTML;

   fetch(Api+'backend/deletePurchase.php', {
       method: 'POST',
       body: JSON.stringify({
           p_id: idd,
          
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           
           alert("Successfully Deleted");

           // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
           window.location.href  = "/onesource_admin/viewDetails.php";
           
           
           // console.log(responseJson);
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "/onesource_admin/viewDetails.php";
           // console.error(error);
       });

}





function saleTableLoad(){

    var u_id = localStorage.getItem("u_id");
    var role = localStorage.getItem("role");

    fetch(Api+'backend/showSaleTable.php', {
     method: 'POST',
     body: JSON.stringify({
        u_id:u_id,
        role: role
     }),    
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
     
        document.getElementById("saleTableBody").innerHTML+= showSaleTable(tr);

     })

     saleOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showSaleTable(data){

 return `
        <tr>
             <td>${data.s_id}</td>
             <td>${data.sname}</td>
             <td>${data.sphoneNumber}</td>
             <td>${data.scompleteAddress}</td>
             <td>${data.ssocietyName}</td>
             <td>${data.sdemand}</td>
             <td>${data.stype}</td>
             <td>${data.sdirection}</td>
             <td>${data.date}</td>
         </tr>
         `;
}


function saleOnclickFunction(){
    var saleTable = document.getElementById('saleWholeTable');
 
    // console.log("reached sale modal")
    // $('#saleModal').modal('show');
   
    for(var i = 1; i < saleTable.rows.length - 1; i++)
                {
						
                    saleTable.rows[i].onclick = function()
                    {

                       
    
                                var idd=this.cells[0].innerHTML;
                                
                              

                                $('#saleModal').modal('show');


 

    fetch(Api+'backend/showSale.php', {
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

            $("#imageSaleId").html("");

            document.getElementById("saleUserId").innerHTML=obj.s_id;
            document.getElementById("sname").value=obj.sname;



            var imgSale = document.getElementById("imageSaleId");
            for( var j =0; j<obj.sPicNumber ; j++){

                var anchor = document.createElement("a");
                anchor.setAttribute("href","../inquiry_demo/upload/"+obj.spicName+j + ".jpg");
                anchor.setAttribute("target","_new");

                var img= document.createElement("img");
                img.setAttribute("src","../inquiry_demo/upload/"+obj.spicName+j + ".jpg");
                img.setAttribute("width","22%");
                img.setAttribute("height","auto");

                anchor.appendChild(img);


                imgSale.appendChild(anchor);
            }




            document.getElementById("sphone").value=obj.sphoneNumber;
            document.getElementById("scareof").value=obj.scareOf;
            document.getElementById("scompleteAddress").value=obj.scompleteAddress;
            document.getElementById("ssocietyName").value=obj.ssocietyName;
            var radioType=obj.stype;
            var radioTypeFlag=false;
            if(radioType!==null){
                for(var i =1; i<7;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("stypeRadio"+i).value===radioType){
                        document.getElementById("stypeRadio"+i).checked=true;
                        radioTypeFlag=true;
                    }
                }
            }

            if(radioTypeFlag===false && radioType!==null){
                 document.getElementById("stypeOther").style.display="block";
                document.getElementById("stypeRadio7").checked=true;
                document.getElementById("stypeRadioOther").value=radioType;
               
                // ptypeFunction();
            }

            document.getElementById("sdemand").value=obj.sdemand;
            var radioNature=obj.snature;
           
            if(radioNature!==null){
                for(var i =1; i<3;i++){
                    if(document.getElementById("snatureRadio"+i).value===radioNature){
                        document.getElementById("snatureRadio"+i).checked=true;
                    }
                }
            }

            document.getElementById("sarea").value=obj.sarea;

            var arrayArea=['sqfeet','sqyards','acre'];

            var areaUnit=obj.sareaDrop;
            var indexArea=arrayArea.indexOf(areaUnit);

            document.getElementById("sareaDrop").selectedIndex=indexArea;


            var arrayDirection=['westOpen','eastOpen','corner'];
            var directionUnit=obj.sdirection;
            var indexDirection=arrayDirection.indexOf(directionUnit);
            document.getElementById("sDirection").selectedIndex=indexDirection;

            var arrayFloor=['ground','1','2','3','4','other'];

            var sfloor=obj.sfloor;
            var indexFloor=arrayFloor.indexOf(sfloor);

            document.getElementById("sfloorDrop").selectedIndex=indexFloor;

            document.getElementById("sfloorCheckOther").selectedIndex=obj.sfloorOther;


            var checkRoom=obj.sroom;
            // console.log(checkRoom)
            var checkRoomFlag=false;
            if(checkRoom!==null){
                for(var i =1; i<6;i++){
                    // var valueId="ptypeRadio"
                    if(checkRoom.includes(document.getElementById("sroomCheckbox"+i).value)){
                        document.getElementById("sroomCheckbox"+i).checked=true;
                        checkRoomFlag=true;
                    }
                }
            }

            if(document.getElementById("sroomCheckbox6").value){
                 document.getElementById("sroomOther").style.display="block";
                // document.getElementById("proomCheckbox6").checked=true;
                document.getElementById("sroomCheckOther").value=obj.sroomOther;
               
                // ptypeFunction();
            }

            var radioDocument=obj.sdocument;
            var radioDocumentFlag=false;
            if(radioDocument!==null){
                for(var i =1; i<5;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("sdocumentRadio"+i).value===radioDocument){
                        document.getElementById("sdocumentRadio"+i).checked=true;
                        radioDocumentFlag=true;
                    }
                }
            }

            if(radioDocumentFlag===false && radioDocument!==null){
                 document.getElementById("sdocumentOther").style.display="block";
                document.getElementById("sdocumentRadio4").checked=true;
                document.getElementById("sdocumentRadioOther").value=radioDocument;
               
                // ptypeFunction();
            }


            var radioAuthority=obj.sauthority;
            var radioAuthorityFlag=false;
            if(radioAuthority!==null){
                for(var i =1; i<7;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("sauthorityRadio"+i).value===radioAuthority){
                        document.getElementById("sauthorityRadio"+i).checked=true;
                        radioAuthorityFlag=true;
                    }
                }
            }

            if(radioAuthorityFlag===false && radioAuthority!==null){
                 document.getElementById("sauthorityOther").style.display="block";
                document.getElementById("sauthorityRadio6").checked=true;
                document.getElementById("sauthorityRadioOther").value=radioAuthority;
               
                // ptypeFunction();
            }


            var radioPayment=obj.spayment;
            var radioPaymentFlag=false;
            var radiopaymentOther='a';
            if(radioPayment!==null){
                for(var i =1; i<4;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("spaymentRadio"+i).value===radioPayment){
                        document.getElementById("spaymentRadio"+i).checked=true;
                        radioPaymentFlag=true;
                    }
                }
            }

            if(radioPaymentFlag===true && radioPayment!=='cash'){
                 document.getElementById("spaymentOther").style.display="block";
                //document.getElementById("sauthorityRadio6").checked=true;
                radiopaymentOther=obj.spaymentOther1;
                
                // ptypeFunction();
            }
            document.getElementById("spaymentRadioOther").value=radiopaymentOther;

            console.log(radiopaymentOther);



            var checkUtility=obj.sutility;
            // console.log(checkRoom)
           // var checkRoomFlag=false;
            if(checkUtility!==null){
                for(var i =1; i<4;i++){
                    // var valueId="ptypeRadio"
                    if(checkUtility.includes(document.getElementById("sutilityCheckbox"+i).value)){
                        document.getElementById("sutilityCheckbox"+i).checked=true;
                       // checkRoomFlag=true;
                    }
                }
            }

           

            



            document.getElementById("sprojectCondition").value=obj.sproject;
             document.getElementById("sotherDetails").value=obj.sotherDetails;
             document.getElementById("snearby").value=obj.snearby;
             document.getElementById("sotherFacilites").value=obj.sotherFacilities;
             document.getElementById("shealthFacilites").value=obj.shealthFacilities;


             document.getElementById("picNumberSale").value=obj.sPicNumber;
             document.getElementById("picNameSale").value=obj.spicName;

            


            
            console.log(responseJson[0]);
        })
        .catch((error)=>{
            console.error(error);
        });

        }//onclick Funciton

    }//for Loop



}




function saleUpdate(){
   
 
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var idd=document.getElementById('saleUserId').innerHTML;
    var sname=document.getElementById("sname").value;
    var sphoneNumber=document.getElementById("sphone").value;
    var scareOf=document.getElementById("scareof").value;
    var scompleteAddress=document.getElementById("scompleteAddress").value;
    var SsocietyName=document.getElementById("ssocietyName").value;


    var stype='';

        for(var i =1; i<=7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("stypeRadio"+i).checked){
                stype=document.getElementById("stypeRadio"+i).value;
                // radioTypeFlag=true;
            }
        }

    if(stype==='other'){
        stype=document.getElementById('stypeRadioOther').value;
    }

    var sdemand=document.getElementById("sdemand").value;
    


    var snature='';

        for(var i=1;i<3;i++){
            if(document.getElementById("snatureRadio"+i).checked){
                snature=document.getElementById("snatureRadio"+i).value;
            }
        }

    var sarea=document.getElementById("sarea").value;


    var sareaDrop = document.getElementById("sareaDrop");
    var sareaDropValue = sareaDrop.options[sareaDrop.selectedIndex].value;


     var sDirection = document.getElementById("sDirection");
    var sDirectionValue = sDirection.options[sDirection.selectedIndex].value;

    
    var sfloorDrop = document.getElementById("sfloorDrop");
    var sfloorDropValue = sfloorDrop.options[sfloorDrop.selectedIndex].value;
    var sfloorCheckOther='';

    if(sfloorDropValue==='other'){
        sfloorCheckOther=document.getElementById("sfloorCheckOther").value;
    }


    var sroom=[];
    var sroomOther='';

        for(var i =1; i<7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("sroomCheckbox"+i).checked){
                sroom.push(document.getElementById("sroomCheckbox"+i).value);
                // radioTypeFlag=true;
            }
        }
   //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if(sroom.includes('other')){
        sroomOther=document.getElementById('sroomCheckOther').value;
    }
     var sdocument='';

        for(var i =1; i<5;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("sdocumentRadio"+i).checked){
                sdocument=document.getElementById("sdocumentRadio"+i).value;
                // radioTypeFlag=true;
            }
        }


    if(sdocument==='other'){
        sdocument=document.getElementById('sdocumentRadioOther').value;
    }


    var sauthority='';

        for(var i =1; i<7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("sauthorityRadio"+i).checked){
                sauthority=document.getElementById("sauthorityRadio"+i).value;
                // radioTypeFlag=true;
            }
        }

    if(sauthority==='other'){
        sauthority=document.getElementById('sauthorityRadioOther').value;
    }


    var spayment='';

        for(var i =1; i<4;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("spaymentRadio"+i).checked){
                spayment=document.getElementById("spaymentRadio"+i).value;
                // radioTypeFlag=true;
            }
        }

        spaymentOtherText=document.getElementById('spaymentRadioOther').value;
    // if(sauthority==='other'){
    //     sauthority=document.getElementById('sauthorityCheckOther').value;
    // }

    
    var sutility=[];
    

        for(var i =1; i<4;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("sutilityCheckbox"+i).checked){
                sutility.push(document.getElementById("sutilityCheckbox"+i).value);
                // radioTypeFlag=true;
            }
        }



    var sProject=document.getElementById("sprojectCondition").value;


     var sotherDetails=document.getElementById("sotherDetails").value;
     var snearby=document.getElementById("snearby").value;
     var sotherFacilites=document.getElementById("sotherFacilites").value;
     var shealthFacilites=document.getElementById("shealthFacilites").value;
     
     


 //debugger
     var spicName='';
     var spicNumber = document.getElementById("sfileName").files.length;
    
     if((document.getElementById("sfileName").value === null) || (document.getElementById("sfileName").value === undefined) || (document.getElementById("sfileName").value === '')){
        spicName = '';
        console.log("Inside if");
        console.log(document.getElementById("picNumberSale").value);

        spicNumber= document.getElementById("picNumberSale").value;
        spicName = document.getElementById("picNameSale").value;
    }   
    else{
        spicName = "sale_"+sname+sphoneNumber;
        var prevNum= document.getElementById("picNumberSale").value;
        for(var j=0;j<prevNum;j++){
           // alert(j)

        
        $.ajax({
            url: Api+'backend/delete.php',
           // data: {'file' : "<?php echo dirname(__FILE__) . '../../inquiry_demo/uploads/'" + picName + j+'.jpg?>' },
           data: {'file' : "../../inquiry_demo/upload/" + spicName + j+".jpg" },
            method:'GET',
            success:function(response){
              
            }
           });
        }//for loop
    }



    // alert(picName);

    document.getElementById("sPicName").value = spicName;





    sroom=JSON.stringify(sroom);
    sutility=JSON.stringify(sutility);

    fetch(Api+'backend/updateSale.php', {
        method: 'POST',
        body: JSON.stringify({
            s_id:idd,
        sname:sname,
         sphoneNumber:sphoneNumber,
         scareOf:scareOf,
         scompleteAddress:scompleteAddress,
         SsocietyName:SsocietyName,
         stype:stype,
         sdemand:sdemand,
         snature:snature,
         sarea:sarea,
         sareaDropValue:sareaDropValue,
         sDirectionValue:sDirectionValue,            
         sfloorDropValue:sfloorDropValue,
         sfloorCheckOther:sfloorCheckOther,
         sroom:sroom,
         sroomOther:sroomOther,
         sdocument:sdocument,
         sauthority:sauthority,
         spayment:spayment,
         spaymentOtherText:spaymentOtherText,
         sutility:sutility,
         sProject:sProject,
         sotherDetails:sotherDetails,
         snearby:snearby,
         sotherFacilites:sotherFacilites,
         shealthFacilites:shealthFacilites,
         spicName:spicName,
            spicNumber:spicNumber
            
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            
            alert("Successfully Updated");
            document.getElementById("sPicSubmit").click();

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
          //  window.location.href  = "/onesource_admin/viewDetails.php";
            
            
            // console.log(responseJson);
        })
        .catch((error)=>{
            alert(error);
             alert("Not Updated");
             window.location.href  = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });



}


function saleDelete(){

    var prevNum= document.getElementById("picNumberSale").value;
    var spicName = document.getElementById("picNameSale").value;
        for(var j=0;j<prevNum;j++){
           // alert(j)

        
        $.ajax({
            url: Api+'backend/delete.php',
           // data: {'file' : "<?php echo dirname(__FILE__) . '../../inquiry_demo/uploads/'" + picName + j+'.jpg?>' },
           data: {'file' : "../../inquiry_demo/upload/" + spicName + j+".jpg" },
            method:'GET',
            success:function(response){
              
            }
           });
        }//for loop


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
   // var p_id='2';
   var s_id=document.getElementById('saleUserId').innerHTML;


   fetch(Api+'backend/deleteSale.php', {
       method: 'POST',
       body: JSON.stringify({
           s_id: s_id,
          
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           
           alert("Successfully Deleted");

           // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
           window.location.href  = "/onesource_admin/viewDetails.php";
           
           
           // console.log(responseJson);
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "/onesource_admin/viewDetails.php";
           // console.error(error);
       });

}



function availableTableLoad(){
    var u_id = localStorage.getItem("u_id");
    var role = localStorage.getItem("role");

    fetch(Api+'backend/showAvailableTable.php', {
     method: 'POST',
     body: JSON.stringify({
        u_id:u_id,
        role: role
     }), 
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
     
        document.getElementById("availableTableBody").innerHTML+= showAvailableTable(tr);

     })
     availableOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showAvailableTable(data){

 return `
        <tr>
             <td>${data.a_id}</td>
             <td>${data.aname}</td>
             <td>${data.aphoneNumber}</td>
             <td>${data.acompleteAddress}</td>
             <td>${data.asocietyName}</td>
             <td>${data.atype}</td>
             <td>${data.aDemand}</td>
             <td>${data.aarea}</td>
             <td>${data.aDirection}</td>
             <td>${data.date}</td>                
         </tr>
         `;
}



function availableOnclickFunction(){

   var availableTable = document.getElementById('availableWholeTable');

  
   for(var i = 1; i < availableTable.rows.length - 1; i++)
               {
                       
                availableTable.rows[i].onclick = function()
                   {

   
                               var idd=this.cells[0].innerHTML;
                               
                             

                               $('#AvailableModal').modal('show');




    fetch(Api+'backend/showAvailable.php', {
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

             $("#imageAvailableId").html("");

            document.getElementById("availableUserId").innerHTML=obj.a_id;
            document.getElementById("aname").value=obj.aname;

            var imgAvailable = document.getElementById("imageAvailableId");
            for( var j =0; j<obj.aPicNumber ; j++){

                var anchor = document.createElement("a");
                anchor.setAttribute("href","../inquiry_demo/upload/"+obj.apicName+j + ".jpg");
                anchor.setAttribute("target","_new");

                var img= document.createElement("img");
                img.setAttribute("src","../inquiry_demo/upload/"+obj.apicName+j + ".jpg");
                img.setAttribute("width","22%");
                img.setAttribute("height","auto");

                anchor.appendChild(img);


                imgAvailable.appendChild(anchor);
            }



            document.getElementById("aphoneNumber").value=obj.aphoneNumber;
            document.getElementById("acareOf").value=obj.acareOf;
            document.getElementById("acompleteAddress").value=obj.acompleteAddress;
            document.getElementById("asocietyName").value=obj.asocietyName;
            var radioType=obj.atype;
            var radioTypeFlag=false;
            if(radioType!==null){
                for(var i =1; i<7;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("atype"+i).value===radioType){
                        document.getElementById("atype"+i).checked=true;
                        radioTypeFlag=true;
                    }
                }
            }

            if(radioTypeFlag===false && radioType!==null){
                 document.getElementById("atypeOther").style.display="block";
                document.getElementById("atype7").checked=true;
                document.getElementById("atypeOtherText").value=radioType;
               
                // ptypeFunction();
            }

            document.getElementById("aDemand").value=obj.aDemand;
            var radioNature=obj.anature;
           
            if(radioNature!==null){
                for(var i =1; i<3;i++){
                    if(document.getElementById("anature"+i).value===radioNature){
                        document.getElementById("anature"+i).checked=true;
                    }
                }
            }

            document.getElementById("aarea").value=obj.aarea;

            var arrayArea=['sqfeet','sqyards','acre'];

            var areaUnit=obj.aareaDrop;
            var indexArea=arrayArea.indexOf(areaUnit);

            document.getElementById("aareaDrop").selectedIndex=indexArea;


            var arrayDirection=['westOpen','eastOpen','corner'];
            var directionUnit=obj.aDirection;
            var indexDirection=arrayDirection.indexOf(directionUnit);
            document.getElementById("aDirection").selectedIndex=indexDirection;

            var arrayFloor=['ground','1','2','3','4','other'];

            var sfloor=obj.afloor;
            var indexFloor=arrayFloor.indexOf(sfloor);

            document.getElementById("afloorDrop").selectedIndex=indexFloor;

            document.getElementById("afloorCheckOther").selectedIndex=obj.afloorOther;


            var checkRoom=obj.aroom;
            // console.log(checkRoom)
            var checkRoomFlag=false;
            if(checkRoom!==null){
                for(var i =1; i<6;i++){
                    // var valueId="ptypeRadio"
                    if(checkRoom.includes(document.getElementById("aroom"+i).value)){
                        document.getElementById("aroom"+i).checked=true;
                        checkRoomFlag=true;
                    }
                }
            }

            if(document.getElementById("aroom6").value){
                 document.getElementById("aroomOther").style.display="block";
                // document.getElementById("proomCheckbox6").checked=true;
                document.getElementById("aroomCheckOther").value=obj.aroomOther;
               
                // ptypeFunction();
            }

            var radioDocument=obj.adocument;
            var radioDocumentFlag=false;
            if(radioDocument!==null){
                for(var i =1; i<5;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("adocument"+i).value===radioDocument){
                        document.getElementById("adocument"+i).checked=true;
                        radioDocumentFlag=true;
                    }
                }
            }

            if(radioDocumentFlag===false && radioDocument!==null){
                 document.getElementById("adocumentOther").style.display="block";
                document.getElementById("adocument4").checked=true;
                document.getElementById("adocumentCheck").value=radioDocument;
               
                // ptypeFunction();
            }


            var radioAuthority=obj.aauthority;
            var radioAuthorityFlag=false;
            if(radioAuthority!==null){
                for(var i =1; i<7;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("aauthority"+i).value===radioAuthority){
                        document.getElementById("aauthority"+i).checked=true;
                        radioAuthorityFlag=true;
                    }
                }
            }

            if(radioAuthorityFlag===false && radioAuthority!==null){
                 document.getElementById("aauthorityOther").style.display="block";
                document.getElementById("aauthority6").checked=true;
                document.getElementById("aauthorityCheckOther").value=radioAuthority;
               
                // ptypeFunction();
            }


            var checkUtility=obj.autility;
        
            if(checkUtility!==null){
                for(var i =1; i<4;i++){
                    // var valueId="ptypeRadio"
                    if(checkUtility.includes(document.getElementById("autility"+i).value)){
                        document.getElementById("autility"+i).checked=true;
                       // checkRoomFlag=true;
                    }
                }
            }

           

            document.getElementById("aProject").value=obj.aProject;
             document.getElementById("aotherDetails").value=obj.aotherDetails;
             document.getElementById("anearby").value=obj.anearby;
             document.getElementById("aotherFacilites").value=obj.aotherFacilities;
             document.getElementById("ahealthFacilites").value=obj.ahealthFacilities;
             document.getElementById("adues").value=obj.aDues;


             document.getElementById("picNumberAvailable").value=obj.aPicNumber;
             document.getElementById("picNameAvailable").value=obj.apicName;

            console.log(responseJson[0]);
        })
        .catch((error)=>{
            console.error(error);
        });

    }


}//for loop


}





function availableUpdate(){
    
    var a_id=document.getElementById('availableUserId').innerHTML;
    var aname=document.getElementById("aname").value;
    var aphoneNumber=document.getElementById("aphoneNumber").value;
    var acareOf=document.getElementById("acareOf").value;
    var acompleteAddress=document.getElementById("acompleteAddress").value;
    var asocietyName=document.getElementById("asocietyName").value;


    var atype='';

        for(var i =1; i<8;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("atype"+i).checked){
                atype=document.getElementById("atype"+i).value;
                // radioTypeFlag=true;
            }
        }

    if(atype==='other'){
        atype=document.getElementById('atypeOtherText').value;
    }

    var aDemand=document.getElementById("aDemand").value;
    


    var anature='';

        for(var i=1;i<3;i++){
            if(document.getElementById("anature"+i).checked){
                anature=document.getElementById("anature"+i).value;
            }
        }

    var aarea=document.getElementById("aarea").value;


    var aareaDrop = document.getElementById("aareaDrop");
    var aareaValue = aareaDrop.options[aareaDrop.selectedIndex].value;


     var aDirection = document.getElementById("aDirection");
    var aDirectionValue = aDirection.options[aDirection.selectedIndex].value;

    
    var afloorDrop = document.getElementById("afloorDrop");
    var afloorValue = afloorDrop.options[afloorDrop.selectedIndex].value;
    var afloorOther='';

    if(afloorValue==='other'){
        afloorOther=document.getElementById("afloorCheckOther").value;
    }


    var aroom=[];
    var aroomOther='';

        for(var i =1; i<7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("aroom"+i).checked){
                aroom.push(document.getElementById("aroom"+i).value);
                // radioTypeFlag=true;
            }
        }
   //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if(aroom.includes('other')){
        aroomOther=document.getElementById('aroomCheckOther').value;
    }
     var adocument='';

        for(var i =1; i<5;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("adocument"+i).checked){
                adocument=document.getElementById("adocument"+i).value;
                // radioTypeFlag=true;
            }
        }


    if(adocument==='other'){
        adocument=document.getElementById('adocumentCheck').value;
    }


    var aauthority='';

        for(var i =1; i<7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("aauthority"+i).checked){
                aauthority=document.getElementById("aauthority"+i).value;
                // radioTypeFlag=true;
            }
        }

    if(aauthority==='other'){
        aauthority=document.getElementById('aauthorityCheckOther').value;
    }

    
    var autility=[];
    

        for(var i =1; i<4;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("autility"+i).checked){
                autility.push(document.getElementById("autility"+i).value);
                // radioTypeFlag=true;
            }
        }



    var aProject=document.getElementById("aProject").value;


     var aotherDetails=document.getElementById("aotherDetails").value;
     var anearby=document.getElementById("anearby").value;
     var aotherFacilites=document.getElementById("aotherFacilites").value;
     var ahealthFacilites=document.getElementById("ahealthFacilites").value;
     var aDues=document.getElementById("adues").value;
    




     var apicName='';
     var apicNumber = document.getElementById("afileName").files.length;
    
     if((document.getElementById("afileName").value === null) || (document.getElementById("afileName").value === undefined) || (document.getElementById("afileName").value === '')){
        apicName = '';
        

        apicNumber= document.getElementById("picNumberAvailable").value;
        apicName = document.getElementById("picNameAvailable").value;
    }   
    else{
        apicName = "avail_"+aname+aphoneNumber;
        var prevNum= document.getElementById("picNumberAvailable").value;
        for(var j=0;j<prevNum;j++){
           // alert(j)

        
        $.ajax({
            url: Api+'backend/delete.php',
           // data: {'file' : "<?php echo dirname(__FILE__) . '../../inquiry_demo/uploads/'" + picName + j+'.jpg?>' },
           data: {'file' : "../../inquiry_demo/upload/" + apicName + j+".jpg" },
            method:'GET',
            success:function(response){
              
            }
           });
        }//for loop
    }



    document.getElementById("aPicName").value = apicName;


    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    aroom=JSON.stringify(aroom);
    autility=JSON.stringify(autility);

    fetch(Api+'backend/updateAvailable.php', {
        method: 'POST',
        body: JSON.stringify({
            a_id:a_id,
            aname:aname,
            aphoneNumber:aphoneNumber,
            acareOf:acareOf,
            acompleteAddress:acompleteAddress,
            asocietyName:asocietyName,
            atype:atype,
            aDemand:aDemand,
            anature:anature,
            aarea:aarea,
            aareaValue:aareaValue,
            aDirectionValue:aDirectionValue,           
            afloorValue:afloorValue,
            afloorOther:afloorOther,
            aroom:aroom,
            aroomOther:aroomOther,
            adocument:adocument,
            aauthority:aauthority,
            autility:autility,
            aProject:aProject,
            aotherDetails:aotherDetails,
            anearby:anearby,
            aotherFacilites:aotherFacilites,
            ahealthFacilites:ahealthFacilites,
            aDues:aDues,
            apicName:apicName,
            apicNumber:apicNumber
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            
            alert("Successfully Updated");
            document.getElementById("aPicSubmit").click();

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
           // window.location.href  = "/onesource_admin/viewDetails.php";
            
            
            // console.log(responseJson);
        })
        .catch((error)=>{
             alert("Not Updated");
             window.location.href  = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });



}




function availableDelete(){

    
    var prevNum= document.getElementById("picNumberAvailable").value;
    var apicName = document.getElementById("picNameAvailable").value;
        for(var j=0;j<prevNum;j++){
           // alert(j)

        
        $.ajax({
            url: Api+'backend/delete.php',
           // data: {'file' : "<?php echo dirname(__FILE__) . '../../inquiry_demo/uploads/'" + picName + j+'.jpg?>' },
           data: {'file' : "../../inquiry_demo/upload/" + apicName + j+".jpg" },
            method:'GET',
            success:function(response){
              
            }
           });
        }//for loop



   var a_id=document.getElementById('availableUserId').innerHTML;


   fetch(Api+'backend/deleteAvailable.php', {
       method: 'POST',
       body: JSON.stringify({
           a_id: a_id,
          
       }),
       headers: new Headers({
         'Content-Type': 'application/json',
       })
       
   })
   .then((response) => response.json())
       .then((responseJson) => {
           
           alert("Successfully Deleted");

           // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
           window.location.href  = "/onesource_admin/viewDetails.php";
           
           
           // console.log(responseJson);
       })
       .catch((error)=>{
            alert("Not Deleted");
            window.location.href  = "/onesource_admin/viewDetails.php";
           // console.error(error);
       });

}


function requireTableLoad(){

    var u_id = localStorage.getItem("u_id");
    var role = localStorage.getItem("role");

    fetch(Api+'backend/showRequireTable.php', {
     method: 'POST',
     body: JSON.stringify({
        u_id:u_id,
        role: role
     }),    
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
     
        document.getElementById("requireTableBody").innerHTML+= showRequireTable(tr);

     })

     requireOnclickFunction();
 })
 .catch((error)=>{
 console.error(error);
   });
}


function showRequireTable(data){

 return `
        <tr>
             <td>${data.r_id}</td>
             <td>${data.rname}</td>
             <td>${data.rphoneNumber}</td>
             <td>${data.rrange}</td>
             <td>${data.rsocietyName}</td>
             <td>${data.rtype}</td>    
             <td>${data.date}</td>              
         </tr>
         `;
}


function requireOnclickFunction(){


  // require_id=data;
 
    var requireTable = document.getElementById('requireWholeTable');
 
    // console.log("reached sale modal")
    // $('#saleModal').modal('show');
   
    for(var i = 1; i < requireTable.rows.length - 1; i++)
                {
						
                    requireTable.rows[i].onclick = function()
                    {

                       
    
                                var idd=this.cells[0].innerHTML;
                                
                              

                                $('#requireModal').modal('show');

    fetch(Api+'backend/showRequire.php', {
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

            document.getElementById("requireUserId").innerHTML=obj.r_id;
            document.getElementById("rname").value=obj.rname;
            document.getElementById("rphoneNumber").value=obj.rphoneNumber;
            document.getElementById("rcareof").value=obj.rcareOf;
            document.getElementById("rrange").value=obj.rrange;
            document.getElementById("rsocietyName").value=obj.rsocietyName;

            document.getElementById("rarea").value=obj.rarea;

            var arrayArea=['sqfeet','sqyards','acre'];

            var areaUnit=obj.rareaDrop;
            var indexArea=arrayArea.indexOf(areaUnit);

            document.getElementById("rareaDrop").selectedIndex=indexArea;


            var radioType=obj.rtype;
            var radioTypeFlag=false;
            if(radioType!==null){
                for(var i =1; i<7;i++){
                    // var valueId="ptypeRadio"
                    if(document.getElementById("rtype"+i).value===radioType){
                        document.getElementById("rtype"+i).checked=true;
                        radioTypeFlag=true;
                    }
                }
            }

            if(radioTypeFlag===false && radioType!==null){
                 document.getElementById("rtypeOther").style.display="block";
                document.getElementById("rtype7").checked=true;
                document.getElementById("rtypeOtherCheck").value=radioType;
               
                // ptypeFunction();
            }


           
            



            var arrayFloor=['ground','1','2','3','4','other'];

            var rfloor=obj.rfloor;
            var indexFloor=arrayFloor.indexOf(rfloor);

            document.getElementById("rfloorDrop").selectedIndex=indexFloor;

            document.getElementById("rfloorCheckOther").selectedIndex=obj.rfloorOther;



             var checkRoom=obj.rroom;
             
            var checkRoomFlag=false;
            if(checkRoom!==null){
                for(var i =1; i<6;i++){
                    // var valueId="ptypeRadio"
                    if(checkRoom.includes(document.getElementById("rroom"+i).value)){
                        document.getElementById("rroom"+i).checked=true;
                        checkRoomFlag=true;
                    }
                }
            }

            if(document.getElementById("rroom6").value){
                 document.getElementById("rroomOther").style.display="block";
                // document.getElementById("proomCheckbox6").checked=true;
                document.getElementById("rroomOtherText").value=obj.rroomOther;
               
                // ptypeFunction();
            }

             document.getElementById("rotherDetails").value=obj.rOtherDetails;
             document.getElementById("rnearby").value=obj.rnearby;
             document.getElementById("rotherFacilites").value=obj.rotherFacilities;
             document.getElementById("rhealthFacilites").value=obj.rhealthFacilities;

            
            console.log(responseJson[0]);
        })
        .catch((error)=>{
            console.error(error);
        });



         }//onclick Funciton

    }//for Loop



}

function requireUpdate(){
   
   
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var r_id=document.getElementById('requireUserId').innerHTML;
    var rname=document.getElementById("rname").value;
    var rphoneNumber=document.getElementById("rphoneNumber").value;
    var rcareOf=document.getElementById("rcareof").value;
    var rrange=document.getElementById("rrange").value;
    var rsocietyName=document.getElementById("rsocietyName").value;

    var rarea=document.getElementById("rarea").value;


    var rareaDrop = document.getElementById("rareaDrop");
    var rareaValue = rareaDrop.options[rareaDrop.selectedIndex].value;
    
    var rtype='';

        for(var i =1; i<8;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("rtype"+i).checked){
                rtype=document.getElementById("rtype"+i).value;
                // radioTypeFlag=true;
            }
        }

    if(rtype==='other'){
        rtype=document.getElementById('rtypeOtherCheck').value;
    }

    

    var rfloorDrop = document.getElementById("rfloorDrop");
    var rfloorValue = rfloorDrop.options[rfloorDrop.selectedIndex].value;
    var rfloorOther='';

    if(rfloorValue==='other'){
        rfloorOther=document.getElementById("rfloorCheckOther").value;
    }


    var rroom=[];
    var rroomOtherText='';

        for(var i =1; i<7;i++){
            // var valueId="ptypeRadio"
            if(document.getElementById("rroom"+i).checked){
                rroom.push(document.getElementById("rroom"+i).value);
                // radioTypeFlag=true;
            }
        }
   //  if(checkRoom.includes(document.getElementById("proomCheckbox"+i).value)){
    if(rroom.includes('other')){
        rroomOtherText=document.getElementById('rroomOtherText').value;
    }

     var rotherDetails=document.getElementById("rotherDetails").value;
     var rnearby=document.getElementById("rnearby").value;
     var rotherFacilites=document.getElementById("rotherFacilites").value;
     var rhealthFacilites=document.getElementById("rhealthFacilites").value;
    
    
    // console.log("asd "+purchaseIdd);
    // console.log(proom);
    rroom=JSON.stringify(rroom);
    // console.log(proom);

    fetch(Api+'backend/updateRequire.php', {
        method: 'POST',
        body: JSON.stringify({
            r_id:r_id,
            rname:rname,
         rphoneNumber:rphoneNumber,
         rcareOf:rcareOf,
         rrange:rrange,
         rsocietyName:rsocietyName,         
         rarea:rarea,
         rareaValue:rareaValue,
         rtype:rtype,
         rfloorValue:rfloorValue,
         rfloorOther:rfloorOther,
         rroom:rroom,
         rroomOtherText:rroomOtherText,
         rotherDetails:rotherDetails,
         rnearby:rnearby,
         rotherFacilites:rotherFacilites,
         rhealthFacilites:rhealthFacilites,
            
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            
            alert("Successfully Updated");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href  = "/onesource_admin/viewDetails.php";
            
            
            // console.log(responseJson);
        })
        .catch((error)=>{
             alert("Not Updated");
             window.location.href  = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });



}





function requireDelete(){

     // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var r_id=document.getElementById('requireUserId').innerHTML;
 

    fetch(Api+'backend/deleteRequire.php', {
        method: 'POST',
        body: JSON.stringify({
            r_id: r_id,
           
        }),
        headers: new Headers({
          'Content-Type': 'application/json',
        })
        
    })
    .then((response) => response.json())
        .then((responseJson) => {
            
            alert("Successfully Deleted");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href  = "/onesource_admin/viewDetails.php";
            
            
            // console.log(responseJson);
        })
        .catch((error)=>{
             alert("Not Deleted");
             window.location.href  = "/onesource_admin/viewDetails.php";
            // console.error(error);
        });

}

function formSelectionFunction(){

    alert(document.getElementById("formSelection").selectedIndex);
}
var purchaseBool = true;
var saleBool = true;
var availableBool = true;
var requireBool = true;

$( "#formSelection" ).change(function() {
    // $("#formSelection option").click(function(){
        var index = document.getElementById("formSelection").selectedIndex;
        if(index == 0){
         //   alert(index);
            viewDetailsLoad();
        }       
        else if(index == 1){

            if(saleBool){
               // saleTableLoad();
                $('#saleWholeTable thead tr').clone(true).appendTo('#saleWholeTable thead');
                $('#saleWholeTable thead tr:eq(1) th').each(function (i) {
                    var title = $(this).text();
                    $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

                    $('input', this).on('keyup change', function () {
                        if (table.column(i).search() !== this.value) {
                            table
                                .column(i)
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            

            var table = $('#saleWholeTable').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });
            
        }   
        saleBool=false;



       //     alert(index);
            document.getElementById("saleDiv").style.display = "block";

            // $("#purchaseTableBody").html("");
            // $("#availableTableBody").html("");
            // $("#requireTableBody").html("");
            

            document.getElementById("purchaseDiv").style.display = "none";
            document.getElementById("availableDiv").style.display = "none";
            document.getElementById("requireDiv").style.display = "none";

            // saleTableLoad();
        }
        else if(index == 2){

            if(availableBool){
               // availableTableLoad();

            $('#availableWholeTable thead tr').clone(true).appendTo('#availableWholeTable thead');
            $('#availableWholeTable thead tr:eq(1) th').each(function (i) {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

                $('input', this).on('keyup change', function () {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });

            var table = $('#availableWholeTable').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });
            
            }

            availableBool = false;




       //     alert(index);
            document.getElementById("availableDiv").style.display = "block";

            // $("#purchaseTableBody").html("");
            // $("#saleTableBody").html("");
            // $("#requireTableBody").html("");

            document.getElementById("purchaseDiv").style.display = "none";
            document.getElementById("saleDiv").style.display = "none";
            document.getElementById("requireDiv").style.display = "none";

            // availableTableLoad();
        }
        else{

            
            if(requireBool){
               // requireTableLoad();
            $('#requireWholeTable thead tr').clone(true).appendTo('#requireWholeTable thead');
            $('#requireWholeTable thead tr:eq(1) th').each(function (i) {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Search ' + title + '" style="color:black"/>');

                $('input', this).on('keyup change', function () {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });

            var table = $('#requireWholeTable').DataTable({
                orderCellsTop: true,
                fixedHeader: true
            });

            
        }
        requireBool = false;

            
          //  alert(index);
            
            document.getElementById("requireDiv").style.display = "block";
            // $("#purchaseTableBody").html("");
            // $("#saleTableBody").html("");
            // $("#availableTableBody").html("");

            document.getElementById("purchaseDiv").style.display = "none";
            document.getElementById("saleDiv").style.display = "none";
            document.getElementById("availableDiv").style.display = "none";

            // requireTableLoad();
        }
       // alert(document.getElementById("formSelection").selectedIndex);
    // });
   
  });


  viewDetailsLoad();
  function viewDetailsLoad(){

   
    if(purchaseBool){
      

    }

    purchaseBool = false;

    document.getElementById("purchaseDiv").style.display = "block";
    // $("#saleTableBody").html("");
    // $("#availableTableBody").html("");
    // $("#requireTableBody").html("");

    document.getElementById("saleDiv").style.display = "none";
    document.getElementById("availableDiv").style.display = "none";
    document.getElementById("requireDiv").style.display = "none";

    // purchaseTableLoad();
  }