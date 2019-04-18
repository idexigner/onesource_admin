//var Api="http://1sourceestate.com/onesource_admin/";
var Api="http://localhost/onesource_admin/";



var purc_id,require_id,available_id,sale_id;


function loadPurchaseMod(data){
   // purchaseTable();
    console.log("reached purchase modal")
    $('#purchaseModal').modal('show');
    //var purchaseIdd=purc_id;
   purc_id=data;
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    
    // console.log("asd "+purchaseIdd);
    

    fetch(Api+'backend/showPurchase.php', {
        method: 'POST',
        body: JSON.stringify({
            id: purc_id,
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

            document.getElementById("purchaseUserId").innerHTML=obj.p_id;
            document.getElementById("pname").value=obj.name;
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


function loadSaleMod(data){
   

}








function saveStorage(idd){
    // alert('asd');

    // console.log("inside save sotryu", idd);
    localStorage.setItem('purchaseIdJavascript',idd);
    sessionStorage.setItem('purchaseIdJavascripts',idd);

}


//  $("input[name='ptype']").click(function () {
//     $('#ptypeOther').css('display', ($(this).val() === 'other') ? 'block':'none');
// });


    $("input[name='ptype']").click(function () {
    $('#ptypeOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

// $("#pfloorDrop").change(function () {
//             alert($("#pfloorDrop").val());
//         });


    $("#pfloorDrop").change(function () {
    $('#pfloorOther').css('display', ($(this).val() === 'other') ? 'block':'none'); 
                // alert($(this).val());
     });

    


$(document).ready(function () {
    $('#proomCheckbox6').change(function () {
        if (this.checked) 
        //  ^
           $('#proomOther').fadeIn();
        else 
            $('#proomOther').fadeOut();
    });
});

//Sale Java script

  $("input[name='stype']").click(function () {
    $('#stypeOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

 $("#sfloorDrop").change(function () {
    $('#sfloorOther').css('display', ($(this).val() === 'other') ? 'block':'none'); 
                // alert($(this).val());
     });

$(document).ready(function () {
    $('#sroomCheckbox6').change(function () {
        if (this.checked) 
        //  ^
           $('#sroomOther').fadeIn();
        else 
            $('#sroomOther').fadeOut();
    });
});

 $("input[name='sdocument']").click(function () {
    $('#sdocumentOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

 $("input[name='sauthority']").click(function () {
    $('#sauthorityOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

 $("input[name='spayment']").click(function () {
    $('#spaymentOther').css('display', (($(this).val() === 'bookingPlan') ||($(this).val() === 'installment') ) ? 'block':'none');
});


//Require Java script
 $("input[name='rtype']").click(function () {
    $('#rtypeOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

 $("#rfloorDrop").change(function () {
    $('#rfloorOther').css('display', ($(this).val() === 'other') ? 'block':'none'); 
                // alert($(this).val());
     });

$(document).ready(function () {
    $('#rroom6').change(function () {
        if (this.checked) 
        //  ^
           $('#rroomOther').fadeIn();
        else 
            $('#rroomOther').fadeOut();
    });
});


//Available Java script

  $("input[name='atype']").click(function () {
    $('#atypeOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

 $("#afloorDrop").change(function () {
    $('#afloorOther').css('display', ($(this).val() === 'other') ? 'block':'none'); 
                // alert($(this).val());
     });

$(document).ready(function () {
    $('#aroom6').change(function () {
        if (this.checked) 
        //  ^
           $('#aroomOther').fadeIn();
        else 
            $('#aroomOther').fadeOut();
    });
});

 $("input[name='adocument']").click(function () {
    $('#adocumentOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});

 $("input[name='aauthority']").click(function () {
    $('#aauthorityOther').css('display', ($(this).val() === 'other') ? 'block':'none');
});












function tableLoad(){
    //purchaseTableLoad();
   // saleTableLoad();
   // requireTableLoad();
   // availableTableLoad();

}

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
        
           document.getElementById("purchaseTable").innerHTML+= showPurchaseTable(tr);

        })
    })
    .catch((error)=>{
    console.error(error);
      });
}


function showPurchaseTable(data){
    

    return `
             <tr onClick="loadPurchaseMod(${data.p_id})">
                <td>${data.p_id}</td>
                <td>${data.name}</td>
                <td>${data.phone}</td>
                <td>${data.ranges}</td>
                <td>${data.societyName}</td>
                <td>${data.type}</td>
            </tr>
            
            `;
}













function purchaseIdPass(data){

    purc_id=data;
    //console.log(purc_id);
    loadPurchaseMod();
}

function saleIdPass(data){

    sale_id=data;
    //console.log(purc_id);
    loadPurchaseMod();
}

function purchaseIdPass(data){

    purc_id=data;
    //console.log(purc_id);
    loadPurchaseMod();
}

function purchaseIdPass(data){

    purc_id=data;
    //console.log(purc_id);
    loadPurchaseMod();
}



function blogin() {
    //console.log("reached");
    var name = document.getElementById("name").value;
    var pass = document.getElementById("password").value;


    fetch(Api + 'backend/blogin.php', {
        method: 'POST',
        body: JSON.stringify({
            name: name,
            pass: pass
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            if (responseJson === "Wrong Details") {
                alert(responseJson);
                window.location.href = "/onesource_admin/index.php";
            }
            else {
                // alert("farazedit"+ responseJson[0].role);
                localStorage.setItem("role", responseJson[0].role);
                localStorage.setItem("user", responseJson[0].name);
                localStorage.setItem("url", responseJson[0].url);
                localStorage.setItem("u_id", responseJson[0].u_id);
                window.location.href = "/onesource_admin/dashboard.php";
            }
       

        })
        .catch((error) => {
            // console.error(error);
            alert('Failed');

            window.location.href = "/onesource_admin/index.php";
        });


}
function submitInquiry(){ 
   
    document.getElementById("viewDetailId").className = "";
    document.getElementById("submitInquiryId").className = "active";

    var url = localStorage.getItem("url");

    if(window.location.href.includes("localhost")){
      
        location.replace("http://localhost/inquiry_demo?uidUrl="+url);
    }else {
     
        location.replace("http://1sourceestate.com/inquiry_demo?uidUrl="+url);
    }
  
}

function indexPage(){
    // alert("Index");
    var role = localStorage.getItem("role");
    // alert(role);
        //if(role != null ){
            if(role === "admin" ||  role === "staff"){
            //alert("Please Login First");
            window.location.href = "/onesource_admin/dashboard.php";
            // window.location.href = "/onesource_admin/index.php";
        }
        // else{
        //     window.location.href = "/onesource_admin/dashboard.php";
        // }
   
}
function onLoadFunction(param){

    var role = localStorage.getItem("role");
    var user = localStorage.getItem("user");
    var url = localStorage.getItem("url");

    // alert(role);
    if(role !== "admin" && role !== "staff"){
        alert("Please Login First");
        window.location.href = "/onesource_admin/index.php";
    }

    if(role === "staff"){
        document.getElementById("registerUserId").style.display = "none";
        document.getElementById("viewUserId").style.display = "none";
    }

    document.getElementById("nameHeader").innerText = user;
    document.getElementById("roleHeader").innerText = role;
    if(param == 'dashboard'){
        
        document.getElementById("dashboardId").className = "active";
        
    }
    else if(param == 'registerUser'){
            

            if(role == "admin" ){
                document.getElementById("registerUserId").className = "active";
            }
            else{
                alert("You dont have enough rights");
            window.location.href  = "/onesource_admin/dashboard.php";
            }
    }
    else if(param == 'viewDetail'){
       
        document.getElementById("viewDetailId").className = "active";
    }
    else if(param == 'viewUser'){


        if(role == "admin" ){
            document.getElementById("viewUserId").className = "active";
        }
        else{
           // alert("You dont have enough rights");
        window.location.href  = "/onesource_admin/dashboard.php";
        }
        
    }

// debugger


    
    
}

function logout(){
    alert("Thank you For using One Source System");
    
   

    localStorage.setItem("role", '');
    localStorage.setItem("user", '');
    localStorage.setItem("url", '');
    window.location.href  = "/onesource_admin/index.php";
}